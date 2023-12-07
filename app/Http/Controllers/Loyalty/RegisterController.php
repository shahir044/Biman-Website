<?php

namespace App\Http\Controllers\Loyalty;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\MinAge;
use App\Rules\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Rules\Password;


class RegisterController extends Controller
{
    public function addMember()
    {

    }

    public function tokenGenerate(Request $request)
    {

        $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => ['required', 'string', (new Password())->requireUppercase()->requireNumeric(), 'confirmed'],
            'agreeChb' => 'accepted',
            'g-recaptcha-response' => 'required|recaptcha',
            'agreeChb.accepted' => 'The agree checkbox must be accepted'
        ], [
            'g-recaptcha-response.required' => 'You must check checkbox'
        ]);

        $collect = array(
            "identifierType" => "EMAIL",
            "identifierValue" => strtolower($request->email),
            "brand" => config('app.loyalty_brand'),
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


                // Check user already exist or not
                if ($response->user) {
                    if ($response->user->userRegisteredForPassword) {
                        return redirect()->back()->with('user_exist', 'You\'re already registered as a Biman Loyalty Club member. Please log in or create an account with new email.');
                    }
                }

                /* var_dump($response);*/

                /*var_dump($response->user->sessionId);*/

                Session::put('capillarySessionId', $response->user->sessionId);
                $isOTp = $this->generateOTP(strtolower($request->email));

                /* dd($isOTp);*/

                if ($isOTp->status->code == 200 && $isOTp->status->message == 'SUCCESS') {
                    Session::put('otp', 1);
                    return redirect()->route('loyalty.account.verify', ['email' => strtolower($request->email)]);
                } else {
                    return redirect(route('loyalty.register'))->with('otp_not_generated', 'Something went wrong! Please try again later.');
                }
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

        /*var_dump(Session::get('capillarySessionId'));*/

        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json'
        ])
            ->post('https://apac-s3wrapper.capillarytech.com/auth/v1/web/otp/generate', $collect);

        /* var_dump($collect);*/
        /* dd($collect);*/
        //   var_dump($response->getStatusCode());

        //   var_dump($response->getBody()->getContents());
        //   dd($response->getBody());
        //   dd($response);

        return json_decode($response->getBody()->getContents());
    }

    public function verifyAccount(Request $request)
    {

        if (Session::get('otp')) {
            return view('loyalty.otp', ['email' => strtolower($request->email)]);
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
            if ($response->status->code == 200 && $response->status->message == 'SUCCESS') {
                Session::put('capAuthToken', $response->auth->token);
                $profile = $this->isProfile(strtolower($request->email));
                if ($profile) {
                    return $this->login($profile);
                } else {
                    return redirect()->route('loyalty.account.profile', ['email' => strtolower($request->email)]);
                }
            } else if ($response->status->code == 1506) {
                //$aotp = $this->generateOTP(strtolower($request->email));
                return redirect()->back()->with(['iotp' => 'Invalid OTP']);
            } else if ($response->status->code == 1518) {
                return redirect()->back()->with(['iotp' => 'Maximum OTP retry attempt reached. Please try again later.']);
            } else {
                return redirect()->back()->with(['iotp' => 'Something went wrong! Please try again later.']);
            }
        }
    }

    public function isProfile($email)
    {
        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json',
            'cap_authorization' => Session::get('capAuthToken'),
            'cap_brand' => config('app.loyalty_brand'),
            'cap_identifier_type' => 'EMAIL',
            'cap_identifier_value' => $email
        ])->get('https://apac-apigateway.capillarytech.com/mobile/v2/api/get/customer');

        $response = json_decode($response->getBody()->getContents());

        if ($response->status->code == 200 && $response->status->success) {
            return $response->customers->customer[0];
        } else {
            return null;
        }


    }

    public function login($customer)
    {
        Session::forget('otp');
        $user = new User();
        $user->customer = $customer;
        $user->id = $user->customer->external_id;
        $user->email = $user->customer->email;
        Auth::login($user);
        return redirect()->route('loyalty.member.test');
    }

    public function profile(Request $request)
    {
        return view('loyalty.create-profile', ['email' => strtolower($request->email), 'countries' => \App\Models\Country::all()]);
    }

    public function submitProfile(Request $request)
    {


        $request->validate([

            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'daterange_single' => ['required', new MinAge],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'gender' => 'required|string|max:255',
            'title' => ['required', 'string', 'max:255', new Title($request->daterange_single, $request->gender)],
            'country_code' => 'required',
            'phone' => 'required|max:25',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required'
        ], [
            'daterange_single.required' => 'The date of birth field is required',
        ]);


        $dob = Carbon::createFromFormat('d/m/Y', $request->daterange_single)->format('Y-m-d');
        $age = Carbon::parse($dob)->age;

        if ($age < 12)
            $request->validate(['parent_ffn' => 'required|max:30']);


        $extended_fields = array(
            "field" => self::getExtendedFields($request)
        );


        $custom_fields = array(
            "field" => self::getCustomFields($request)
        );

        $customer = array(
            "email" => strtolower($request->email),
            "firstname" => $request->first_name,
            "lastname" => $request->last_name,
            /*  "mobile" => substr($request->country_code, 3) . $request->phone,*/
            "source" => "INSTORE",
            "type" => "LOYALTY",
            "extended_fields" => $extended_fields,
            "custom_fields" => $custom_fields
        );


        $customerArray = [$customer];

        $customers = array(
            "customer" => $customerArray
        );

        $roots = [$customers];
        $root = array(
            "root" => $customers
        );


        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json',
            'cap_brand' => config('app.loyalty_brand'),
            'cap_identifier_type' => 'EMAIL',
            'cap_identifier_value' => strtolower($request->email),
            'cap_authorization' => Session::get('capAuthToken')
        ])
            ->post('https://apac-apigateway.capillarytech.com/mobile/v2/api/customer/email/add', $root);


        $response = (json_decode($response->getBody()->getContents()));


        if ($response->status) {
            if ($response->status->code == 200 && $response->status->message == 'Success') {

                // add mobile
                $addMobile = $this->addMobile($request->country_code.$request->phone, strtolower($request->email));

                if (isset($addMobile->errors)) {

                    return redirect()->back()->withErrors(['phone' => $addMobile->errors[0]->message])->withInput();
                }

                if (isset($addMobile->createdId)) {

                    if (isset($addMobile->warnings)) {
                        if (count($addMobile->warnings) > 0) {
                            return redirect()->back()->withErrors(['phone' => $addMobile->warnings[0]->message])->withInput();

                        } else {
                            $request->session()->flash('success', 'success');
                            return $this->login($response->customers->customer[0]);
                        }
                    }

                } else {
                    return redirect()->back()->withErrors(['phone' => 'Invalid mobile number'])->withInput();
                }

            }
        }
    }

    protected function getExtendedFields($data)
    {
        $field1 = array(
            "name" => "gender",
            "value" => $data->gender
        );

        $field2 = array(
            "name" => "city",
            "value" => $data->city
        );

        $field3 = array(
            "name" => "country_of_residence",
            "value" => $data->country
        );

        $field4 = array(
            "name" => "dob",
            "value" => Carbon::createFromFormat('d/m/Y', $data->daterange_single)->format('Y-m-d')
        );


        return [$field1, $field2, $field3, $field4];
    }

    protected function getCustomFields($data)
    {
        $field1 = array(
            "name" => "title",
            "value" => $data->title
        );
        $field2 = array(
            "name" => "address",
            "value" => $data->address
        );


        $field3 = array(
            "name" => "passport_number",
            "value" => $data->exists('passport_number') ? $data->passport_number : ""
        );

        $field4 = array(
            "name" => "parent_ffn",
            "value" => $data->exists('parent_ffn') ? $data->parent_ffn : ""
        );


        $field5 = array(
            "name" => "passport_expiry",
            "value" => $data->exists('passport_expiry') ? $data->passport_expiry : ""
        );

        $field6 = array(
            "name" => "passport_issual_coun",
            "value" => $data->exists('passport_issual_coun') ? $data->passport_issual_coun : ""
        );

        return [$field1, $field2, $field3, $field4, $field5, $field6];

    }

    protected function addMobile($mobile, $email)
    {

        $add = array(
            "type" => "mobile",
            "value" => $mobile,
        );


        $body = array(
            "add" => [$add]
        );

        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json',
            'cap_brand' => config('app.loyalty_brand'),
            'cap_identifier_type' => 'EMAIL',
            'cap_identifier_value' => strtolower($email),
            'cap_authorization' => Session::get('capAuthToken')
        ])
            ->post('https://apac-apigateway.capillarytech.com/mobile/v2/api/v2changeIdentifier', $body);

        $response = (json_decode($response->getBody()->getContents()));

        return $response;

    }

}
