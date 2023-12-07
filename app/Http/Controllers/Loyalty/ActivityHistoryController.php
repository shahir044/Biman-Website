<?php

namespace App\Http\Controllers\Loyalty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ActivityHistoryController extends Controller
{
    public function getHistory(Request $request){


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
            ->get('https://apac-apigateway.capillarytech.com/mobile/v2/api/customer/transaction');

        $output = (json_decode($response->getBody()->getContents()));

        $table = "";

        $transactions = $output->customer->transactions->transaction;

/*        $table .= '<table class="table" id="transaction-history-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Ticket Number</th>
                                                        <th scope="col">Origin</th>
                                                        <th scope="col">Destination</th>
                                                        <th scope="col">Points Issued</th>
                                                        <th scope="col">Points Expiry Date</th>
                                                    </tr>
                                                    </thead>
                                                   <tbody>

                                                   </tbody>
                                              ';*/

        foreach ($transactions as $transaction){
            $custom_fields = $transaction->custom_fields->field;
            $extended_fields = $transaction->extended_fields->field;
            $departure_date = \Carbon\Carbon::createFromFormat('Y-m-d', \Carbon\Carbon::parse($transaction->billing_time)->toDateString())->format('d/m/Y');
            $ticket_number = $transaction->number;
            $origin = "";
            $destination = "";

            foreach ($custom_fields as $field){
                if($field->name == "ticket_number"){
                    $ticket_number = $field->value;
                }
            }

            foreach ($extended_fields as $field){
                if($field->name == "origin"){
                    $origin = $field->value;
                }else if($field->name == "destination"){
                    $destination = $field->value;
                }
            }

             $table .= '<tr class="text-center">
                <td>' .$ticket_number . '</td>
                <td>' . $origin . '</td>
                 <td>' .$destination . '</td>
                <td>' .$departure_date . '</td>
                 <td>' . (int)$transaction->points->issued . '</td>

              </tr>';
        }

        return $table;

    }
}
