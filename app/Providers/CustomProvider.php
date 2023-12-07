<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class CustomProvider implements UserProvider
{

    public function retrieveById($identifier)
    {

        $apiUser=  self::getUser($identifier);

        if($apiUser){

            $user = new User();
            $user->customer = $apiUser;

            $extended_fields = $apiUser->extended_fields->field;
            $custom_fields = $apiUser->custom_fields->field;
            $user->id = $user->customer->external_id;
            $user->email = $user->customer->email;


            $user->customer->extended_fields->field = [(object)['name'=>'gender','value'=>''],(object)['name'=>'city','value'=>''],(object)['name'=>'country_of_residence','value'=>''],(object)['name'=>'dob','value'=>'']];
            foreach ($extended_fields as $extended_field){
                foreach ($user->customer->extended_fields->field as $f){
                    if($extended_field->name == $f->name)
                        $f->value =  $extended_field->value;
                }
            }

            $user->customer->custom_fields->field = [(object)['name'=>'title','value'=>''],(object)['name'=>'address','value'=>''],(object)['name'=>'passport_number','value'=>''],(object)['name'=>'parent_ffn','value'=>''],(object)['name'=>'passport_expiry','value'=>''],(object)['name'=>'passport_issual_coun','value'=>'']];

            foreach ($custom_fields as $custom_fields){
                foreach ($user->customer->custom_fields->field as $f){
                    if($custom_fields->name == $f->name)
                        $f->value =  $custom_fields->value;
                }
            }

            return $user;
        }
    }

    public function retrieveByToken($identifier, $token)
    {

        // TODO: Implement retrieveByToken() method.
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.

    }

    public function retrieveByCredentials(array $credentials)
    {
        // TODO: Implement retrieveByCredentials() method.

    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // TODO: Implement validateCredentials() method.
    }


    protected function getUser($identifier){

        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json',
            'cap_authorization' => Session::get('capAuthToken'),
            'cap_brand' =>config('app.loyalty_brand'),
            'cap_identifier_type' => 'EMAIL',
            'cap_identifier_value' => strtolower($identifier)
        ])->get('https://apac-apigateway.capillarytech.com/mobile/v2/api/get/customer');

        $response = json_decode($response->getBody()->getContents());


        if($response->status->success && $response->status->code == 200){
            return $response->customers->customer[0];
        }else
            return null;

    }

}
