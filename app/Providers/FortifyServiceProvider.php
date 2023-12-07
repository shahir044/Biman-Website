<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use function PHPUnit\Framework\isNull;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Fortify::authenticateUsing(function (Request $request){


            $request->validate([
                'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
                'password' => 'required'
            ]);

            $response = self::generateToken(strtolower($request->email),$request->password);


            if ($response->status) {
                if ($response->status->code == 200 && $response->status->message == 'SUCCESS') {

                    $request->session()->put('capillarySessionId', $response->user->sessionId);
                    if($response->user->userRegisteredForPassword){
                        $isPasswordValidate = self::validatePassword(strtolower($request->email),$request->password);




                        if($isPasswordValidate){
                            $user= new User();
                            $user->customer = self::getUser(strtolower($request->email));

                            if(isset($user->customer->external_id)){

                                $user->id = $user->customer->external_id;
                                $user->email = $user->customer->email;

                                return $user;

                            }else{
                               return null;
                            }
                        }
                        else
                            return null;
                    }
                }
            }
        });

        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

     /*   Fortify::registerView(function(){
            return view('auth.register');
        });*/

        Fortify::loginView(function(){
            return view('loyalty.login');
        });

        Fortify::registerView(function(){
            return view('loyalty.register');
        });

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by(strtolower($request->email).$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });


    }


    protected function generateToken($email,$password){

        $collect = array(
            "identifierType" => "EMAIL",
            "identifierValue" => $email,
            "brand" => config('app.loyalty_brand'),
            "password" => $password,
            "confirmPassword" => $password,
        );

        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json'
        ])
            ->post('https://apac-s3wrapper.capillarytech.com/auth/v1/token/generate', $collect);

        $response = json_decode($response->getBody()->getContents());
        return $response;
    }

    protected function validatePassword($email,$password){
        $collect = array(
            "identifierType" => "EMAIL",
            "identifierValue" => $email,
            "brand" => config('app.loyalty_brand'),
            "sessionId" => Session::get('capillarySessionId'),
            "password" => $password,
        );

        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json'
        ])
            ->post('https://apac-s3wrapper.capillarytech.com/auth/v1/web/password/validate', $collect);

        $response = json_decode($response->getBody()->getContents());



        if($response->status->success && $response->status->code == 200){
            Session::put('capAuthToken',$response->auth->token);
            return true;
        }

        else
            return false;

    }

    protected function getUser($email){

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

        return $response->customers->customer[0];
    }
}
