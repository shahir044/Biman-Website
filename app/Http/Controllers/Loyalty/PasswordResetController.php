<?php

namespace App\Http\Controllers\Loyalty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Rules\Password;

class PasswordResetController extends Controller
{
    public function create(Request $request){

        $request->session()->flash('forgot-password','Forgot Password');
        return view('loyalty.register');
    }

    public function store(Request $request){

        $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => ['required', 'string', (new Password())->requireUppercase()->requireNumeric(), 'confirmed'],
            'g-recaptcha-response' => 'required|recaptcha',
        ],[
                'g-recaptcha-response.required' => 'You must check checkbox'
            ]);

        $collect = array(
            "identifierType" => "EMAIL",
            "identifierValue" => strtolower($request->email),
            "brand" =>config('app.loyalty_brand'),
            "password" => $request->password,
            "confirmPassword" => $request->password_confirmation,
        );


        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json'
        ])
            ->post('https://apac-s3wrapper.capillarytech.com/auth/v1/token/generate', $collect);

        $response = json_decode($response->getBody()->getContents());

        if ($response->status) {

            if ($response->status->code == 200 && $response->status->message == 'SUCCESS') {

                Session::put('capillarySessionId', $response->user->sessionId);

                $isPasswordReset = $this->resetPassword(strtolower($request->email),$request->password);

                if($isPasswordReset == 1){
                    $isOTp = $this->generateOTP(strtolower($request->email));

                    if ($isOTp->status->code == 200 && $isOTp->status->message == 'SUCCESS') {
                        Session::put('otp', 1);

                        return redirect()->route('loyalty.fgp.verify', ['email' => strtolower($request->email),'fgp' => true]);
                    }else{
                        return redirect()->route('login')->withErrors(['msg' => 'Your OTP rate exceeded. Please try again later.']);
                    }
                }else if($isPasswordReset == 2){
                    return redirect()->back()->with('password-reset-failed', 'Old password and new password cannot be same');
                }else if($isPasswordReset == 1515){
                    return redirect()->back()->with('password-reset-failed', 'User doesn\'t exist. Please sign up');
                }
                else{
                    return redirect()->back()->with('password-reset-failed', 'Something went wrong! Please try again');
                }

            }
        }

    }

    public function resetPassword($email,$password){

        $collect = array(
            "identifierType" => "EMAIL",
            "identifierValue" => $email,
            "brand" => config('app.loyalty_brand'),
            "sessionId" => Session::get('capillarySessionId'),
            "password" => $password,
            "confirmPassword" =>$password,
        );


        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json'
        ])
            ->post('https://apac-s3wrapper.capillarytech.com/auth/v1/web/password/forget', $collect);

        $response = json_decode($response->getBody()->getContents());

        if ($response->status) {
            if ($response->status->code == 200) {
               return 1;
            } else if ($response->status->code == 1527) {
               return 2;
            } else if($response->status->code == 1515){
                return 1515;
            }
            else{
                return 0;
            }
        }
    }

    public function generateOTP($email)
    {

        $collect = array(
            "identifierType" => "EMAIL",
            "identifierValue" => $email,
            "brand" => config('app.loyalty_brand'),
            "sessionId" => Session::get('capillarySessionId')
        );


        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json'
        ])
            ->post('https://apac-s3wrapper.capillarytech.com/auth/v1/web/otp/generate', $collect);

        return json_decode($response->getBody()->getContents());
    }

    public function verifyAccount(Request $request)
    {
        if (Session::get('otp')) {
            return view('loyalty.otp', ['email' => strtolower($request->email)])->with('forgotPassword','success');
        } else {
            return redirect()->route('index');
        }
    }

    public function submitOTP(Request $request)
    {


        $collect = array(
            "identifierType" => "EMAIL",
            "identifierValue" => strtolower($request->email),
            "brand" => config('app.loyalty_brand'),
            "sessionId" => Session::get('capillarySessionId'),
            "otp" => $request->first . $request->second . $request->third . $request->fourth . $request->fifth . $request->sixth
        );


        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json'
        ])
            ->post('https://apac-s3wrapper.capillarytech.com/auth/v1/web/otp/validate', $collect);

        $response = (json_decode($response->getBody()->getContents()));


        if ($response->status) {
            if ($response->status->code == 200) {
                Session::put('capAuthToken', $response->auth->token);
                return redirect()->route('login')->with('password-reset','Success');
            } else if ($response->status->code == 1506) {
                return redirect()->back()->with(['iotp' => 'Invalid OTP']);
            }else{
                return redirect()->back()->with(['iotp' => 'Something went wrong! Please try again later']);
            }
        }
    }
}
