<?php

namespace App\Http\Controllers\Loyalty;

use App\Http\Controllers\Controller;
use App\Rules\MinAge;
use App\Rules\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UpdateProfileController extends Controller
{
    public function updateProfile(Request $request)
    {

        //  dd($request);
        $request->validate([

            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => ['required', new MinAge],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'gender' => 'required|string|max:255',
            'title' => ['required', 'string', 'max:255', new Title($request->date_of_birth, $request->gender)],
            /* 'phone' => 'required|numeric',*/
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required'
        ], [
            'date_of_birth.required' => 'The date of birth field is required',
            'phone' => 'The mobile number must be in correct format'
        ]);

        $dob = Carbon::createFromFormat('d/m/Y', $request->date_of_birth)->format('Y-m-d');
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
            "email" => auth()->user()->customer->email,
            "firstname" => auth()->user()->customer->firstname,
            "lastname" => auth()->user()->customer->lastname,
            "mobile" => auth()->user()->customer->mobile,
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
            'cap_identifier_value' => strtolower(auth()->user()->customer->email),
            'cap_authorization' => Session::get('capAuthToken')
        ])
            ->post('https://apac-apigateway.capillarytech.com/mobile/v2/api/customers/update', $root);


        $response = (json_decode($response->getBody()->getContents()));


        if ($response->status) {
            if ($response->status->code == 200 && $response->status->message == 'Success') {

                if (auth()->user()->customer->mobile == $request->phone) {

                    $request->session()->flash('update-profile', 'success');
                    return redirect('/loyalty-club/my-account#my-profile');

                } else {

                    if (is_null(auth()->user()->customer->mobile)) {

                        $addMobile = $this->addMobile($request->phone);

                        if (isset($addMobile->errors)) {

                            return redirect('/loyalty-club/my-account#my-profile')->withErrors(['phone' => $addMobile->errors[0]->message]);
                        }

                        if (isset($addMobile->createdId)) {

                            if (isset($addMobile->warnings)) {
                                if (count($addMobile->warnings) > 0) {
                                    return redirect('/loyalty-club/my-account#my-profile')->withErrors(['phone' => $addMobile->warnings[0]->message]);

                                } else {
                                    $request->session()->flash('update-profile', 'success');
                                    return redirect('/loyalty-club/my-account#my-profile');
                                }
                            }

                        } else {
                            return redirect('/loyalty-club/my-account#my-profile')->withErrors(['phone' => 'Mobile number updation is failed ']);
                        }


                    } else {
                        $updateMobileStatus = $this->updateMobile($request->phone);
                        if ($updateMobileStatus->status->code == 200 && $updateMobileStatus->status->message == 'Success') {
                            $request->session()->flash('update-profile', 'success');
                            return redirect('/loyalty-club/my-account#my-profile');
                        } else {
                            return redirect('/loyalty-club/my-account#my-profile')->withErrors(['phone' => 'Mobile number updation is failed ']);
                        }

                    }

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
            "value" => Carbon::createFromFormat('d/m/Y', $data->date_of_birth)->format('Y-m-d')
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
            "value" => $data->passport_number
        );

        /*$field4 = array(
            "name" => "parent_ffn",
            "value" => $data->parent_ffn
        );*/


        $field5 = array(
            "name" => "passport_expiry",
            "value" => $data->passport_expiry
        );

        $field6 = array(
            "name" => "passport_issual_coun",
            "value" => $data->passport_issual_coun
        );

        return [$field1, $field2, $field3, $field5, $field6];
    }

    protected function addMobile($mobile)
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
            'cap_identifier_value' => strtolower(auth()->user()->customer->email),
            'cap_authorization' => Session::get('capAuthToken')
        ])
            ->post('https://apac-apigateway.capillarytech.com/mobile/v2/api/v2changeIdentifier', $body);

        $response = (json_decode($response->getBody()->getContents()));

        return $response;

    }

    protected function updateMobile($mobile)
    {


        $customer = array(
            "identifier" => "mobile",
            "old_value" => auth()->user()->customer->mobile,
            "new_value" => $mobile,
        );


        $customerArray = [$customer];

        $customers = array(
            "customer" => $customerArray
        );

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
            'cap_identifier_value' => strtolower(auth()->user()->customer->email),
            'cap_authorization' => Session::get('capAuthToken')
        ])
            ->post('https://apac-apigateway.capillarytech.com/mobile/v2/api/customer/update_identity', $root);

        $response = (json_decode($response->getBody()->getContents()));

        //  dd($response);
        return $response;

    }

}
