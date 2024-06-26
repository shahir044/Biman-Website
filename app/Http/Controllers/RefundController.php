<?php

namespace App\Http\Controllers;

use App\Mail\RefundAcceptMail;
use App\Mail\RefundMail;
use App\Models\Refund;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Import the Carbon library for working with dates
use Illuminate\Support\Facades\Mail;

class RefundController extends Controller
{

    public function initiateRequest(){

        $countries =  DB::table('country')->orderBy('iso')->get();
        return view('refund-form', compact('countries'));

    }

    public function sendRequest(Request $request)
    {

        $request->validate([
            'pnr' => 'required|max:6',
            // 'departingDate' => 'required',
            'email' => 'required|email',
            'country_code' => 'required',
            'phone' => 'required',
            'full_name' => 'required|max:255',
            'last_digits' => 'required',
            'p_name_1' => 'required|max:255',
            'p_ticket_1' => 'required|max:13',
            'reason' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);

       $contact_no = $request->country_code;
       $contact_no = explode('-', $contact_no);
       $contact_no = $contact_no[0].$contact_no[1].$request->phone;

        // return $contact_no;

        $prevrequest = DB::table('refunds')->where('pnr',$request->pnr)->where('p_ticket_1',$request->p_ticket_1)->get();
        if (!empty($prevrequest[0])) {

            $request->session()->flash('success', 'You already requested for this PNR.');
            return redirect(route('refund-form'));

        }else {
            $departingDate = Carbon::createFromFormat('m/d/Y', $request->input('daterange_single'));
            $refund = new Refund();
            $refund->pnr = $request->pnr;
            $refund->departingDate = $departingDate->format('Y-m-d');
            $refund->email = $request->email;
            $refund->contact_no = $contact_no;
            $refund->full_name = $request->full_name;
            $refund->last_digits = $request->last_digits;
            $refund->reason = $request->reason;

            if (!empty($request->p_name_1)) {
                $refund->p_name_1 = $request->p_name_1;
            }
            if (!empty($request->p_ticket_1)) {
                $refund->p_ticket_1 = $request->p_ticket_1;
            }
            if (!empty($request->p_name_2)) {
                $refund->p_name_2 = $request->p_name_2;
            }
            if (!empty($request->p_ticket_2)) {
                $refund->p_ticket_2 = $request->p_ticket_2;
            }
            if (!empty($request->p_name_3)) {
                $refund->p_name_3 = $request->p_name_3;
            }
            if (!empty($request->p_ticket_3)) {
                $refund->p_ticket_3 = $request->p_ticket_3;
            }
            if (!empty($request->p_name_4)) {
                $refund->p_name_4 = $request->p_name_4;
            }
            if (!empty($request->p_ticket_4)) {
                $refund->p_ticket_4 = $request->p_ticket_4;
            }
            if (!empty($request->p_name_5)) {
                $refund->p_name_5 = $request->p_name_5;
            }
            if (!empty($request->p_ticket_5)) {
                $refund->p_ticket_5 = $request->p_ticket_5;
            }
            if (!empty($request->p_name_6)) {
                $refund->p_name_6 = $request->p_name_6;
            }
            if (!empty($request->p_ticket_6)) {
                $refund->p_ticket_6 = $request->p_ticket_6;
            }
            if (!empty($request->p_name_7)) {
                $refund->p_name_7 = $request->p_name_7;
            }
            if (!empty($request->p_ticket_7)) {
                $refund->p_ticket_7 = $request->p_ticket_7;
            }
            if (!empty($request->p_name_8)) {
                $refund->p_name_8 = $request->p_name_8;
            }
            if (!empty($request->p_ticket_8)) {
                $refund->p_ticket_8 = $request->p_ticket_8;
            }
            if (!empty($request->p_name_9)) {
                $refund->p_name_9 = $request->p_name_9;
            }
            if (!empty($request->p_ticket_9)) {
                $refund->p_ticket_9 = $request->p_ticket_9;
            }
            if (!empty($request->comment)) {
                $refund->comment = $request->comment;
            }

            $result = $refund->save();

            if($result){
                Mail::to($refund->email)->send(new RefundAcceptMail($refund));

                if (Mail::failures()) {
                    $request->session()->flash('success', 'Your request has been submitted successfully. Submission ID: RFID#'.$refund->id.'. You can check your refund request status using given PNR and last 4 digits account number from Refund Status section. For technial error we cannot send you an email now.');
                }else{
                    $request->session()->flash('success', 'Your request has been submitted successfully. Submission ID: RFID#'.$refund->id.'. Confirmation mail has been sent to your given email: '.$refund->email.'. You can check your refund request status using given PNR and last 4 digits account number from Refund Status section.');
                }
                //$request->session()->flash('success', 'Your request has been submitted successfully. Submission ID: RFID#'.$refund->id.'. '.$refund->email.'. We have received your submission and we will review it for further action. You can check your refund request status using your PNR and Last 4 digits account number from REFUND STATUS SECTION.');


            }else{
                $request->session()->flash('error', 'Something went wrong! Please try to submit again. If this issue remains again contact ibebiman@biman.gov.bd');
            }
            return redirect(route('refund-form'));
        }
    }

    public function checkRequest(Request $request){

        $request->validate([
            'pnr' => 'required|max:255',
            'last_digits' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);


        $resolvedrequest = DB::table('refunds')->where('pnr',$request->pnr)->get();



        if ($resolvedrequest[0]->status == 0) {
            $request->session()->flash('success', 'Dear '.$resolvedrequest[0]->full_name.', Your refund request for PNR-'.$resolvedrequest[0]->pnr.' is still under processing. We will review your request as soon as possible. Thank You for your time and patience.');
        }
        else if ($resolvedrequest[0]->status == 1) {
            $request->session()->flash('success', 'Dear '.$resolvedrequest[0]->full_name.', you would be happy to hear that your refund request for PNR-'.$resolvedrequest[0]->pnr.' has been accepted on '.$resolvedrequest[0]->updated_at.'. Biman refund team is now processing your request as per Ticketing Rules. You will get your refunded amount within 30 working days. Thank you for your patience.');
        }
        else if ($resolvedrequest[0]->status == 3) {
            $request->session()->flash('success', 'Dear '.$resolvedrequest[0]->full_name.', the refund request for PNR-'.$resolvedrequest[0]->pnr.' has been completed on '.$resolvedrequest[0]->updated_at.'. Additional Comments: '.$resolvedrequest[0]->decline_reason) ;
        }
        else if ($resolvedrequest[0]->status == 2 || $resolvedrequest[0]->status == 4) {
            $request->session()->flash('success', 'Dear '.$resolvedrequest[0]->full_name.', we are sorry to say that, your refund request has been declined for the following reason: '.$resolvedrequest[0]->decline_reason.'. Please contact with ibebiman@bdbiman.com & iberefund@bdbiman.com for if you need more information');
        }


        return redirect(route('refund-form'));

    }

}
