<?php

namespace App\Http\Controllers\Loyalty;

use App\Http\Controllers\Controller;
use App\Rules\MinAge;
use App\Rules\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoyaltyController extends Controller
{
    public function getUser(){

        return view('loyalty.member.test',['user' => auth()->user(),'countries' => \App\Models\Country::all()]);
    }

    public function claimMileage(Request $request){
        $validator = Validator::make($request->all(),[
            'flight' => 'required|max:10',
            'departingDate' => 'required',
            'from' => 'required',
            'to' => 'required',
            'ticket_number' => 'required'
        ]);


        if(!$validator->passes()){
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]);
        }else{

            $response =  $this->searchTicket($request->ticket_number,$request->from,$request->to);



            if($response->status->success != 'false'){

                $fields = $response->transactions->transaction[0]->custom_fields->field;
                $departureDate = \Carbon\Carbon::createFromFormat('Y-m-d', \Carbon\Carbon::parse($response->transactions->transaction[0]->billing_time)->toDateString())->format('d/m/Y');

                $datetime1 = new \DateTime(Carbon::now()->toDateString());
                $datetime2 = new \DateTime(\Carbon\Carbon::parse($response->transactions->transaction[0]->billing_time)->toDateString());
                $diffDays =  $datetime1->diff($datetime2)->format('%a')+1;

                if($diffDays>90){
                    return response()->json(['status'=>1, 'message' => "Claims are only valid for flights flown within the last 90 days"]);
                }

                $firstName = "";
                $lastName = "";
                $ticketNumber = "";

                foreach ($fields as $field){
                    if($field->name == 'name_first'){
                        $names = explode(" ",$field->value);
                        $firstName = $names[0];
                        for($i = 1; $i < count($names)-1; $i = $i+1){
                            $firstName = $firstName.' '.$names[$i];
                        }
                    }else if($field->name == 'ticket_number'){
                        $ticketNumber = $field->value;
                    }else if($field->name == 'name_last'){
                        $lastName =  $field->value;
                    }
                }

                if($firstName == strtoupper(auth()->user()->customer->firstname) && $lastName == strtoupper(auth()->user()->customer->lastname) && $ticketNumber == $request->ticket_number){
                    $data = $this->postClaimMileage($response->transactions->transaction[0]->id);
                    return response()->json(['status'=>2,'data'=>$data]);
                }else{
                    return response()->json(['status'=>1, 'message' => "Your profile information does not match the ticket"]);
                }
            }else{
                return response()->json(['status'=>1, 'message' => "No information found against your ticket number"]);
            }
        }
    }

    public function searchTicket($ticketNumber,$from,$to){

        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json',
            'cap_brand' => config('app.loyalty_brand'),
            'cap_identifier_type' => 'EMAIL',
            'cap_identifier_value' => auth()->user()->customer->email,
            'cap_authorization' => Session::get('capAuthToken')
        ])
            ->get('https://apac-apigateway.capillarytech.com/mobile/v2/api/search/ticket',[
                'number' => $ticketNumber.$from.$to
            ]);
        return (json_decode($response->getBody()->getContents()));
    }

    public function postClaimMileage($id){


        $transaction = array(
            'transaction_id' =>$id
        );

        $request = array(
            'request' => $transaction
        );

        $root = array(
            'root' => $request
        );


        $response = Http::withHeaders([
            'Accept' => '*/*',
            'Accept-Encoding' => 'gzip, deflate, br',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json',
            'cap_brand' => config('app.loyalty_brand'),
            'cap_identifier_type' => 'EMAIL',
            'cap_identifier_value' => auth()->user()->customer->email,
            'cap_authorization' => Session::get('capAuthToken')
        ])
            ->post('https://apac-apigateway.capillarytech.com/mobile/v2/api/claim/airmiles', $root);

        return (json_decode($response->getBody()->getContents()));
    }

}
