<?php

namespace App\Http\Controllers;

use App\Models\cargofeedback;
use App\Models\subscriber;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{
    public function submitFeedback(Request $request){

        // dd($request);

        $request->validate([
            'subject' => 'required|max:200',
            'name' =>  ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'country' => 'required',
            'flight' => 'nullable|max:50',
            'from' => 'nullable|max:50',
            'to' => 'nullable|max:50',
            'g-recaptcha-response' => 'recaptcha',
            'input_file' => 'nullable|max:500|mimes:png,jpg,jpeg,csv,txt,xlx,xls,xlsx,pdf',
          /*  'g-recaptcha-response' => function ($attribute, $value, $fail) {
               $secret_key = config('services.recaptcha.secret');
               $response = $value;
               $userIP =  $_SERVER['REMOTE_ADDR'];

               $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response&remoteip=$userIP";
               $response = \file_get_contents($url);
               $response = json_decode($response);

            //    dd($response);
                if(!$response->success){
                    Session::flash('g-recaptcha-reponse' , 'PLEASE CHECK reCaptcha');
                    Session::flash('alert-class','alert-danger');
                    $fail($attribute.' google reCatpcha failed');
                }
            },*/
        ]);
        //return $request;

        if($request->hasFile('input_file')){
            $file = $request->file('input_file');

            $fileNameWithExt = $file->getClientOriginalName();

            //return $fileNameWithExt;

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $date = date('d.m.Y.H.i.s', time());

            //return $date;

            $fileNameToStore = $date.'_'.$fileNameWithExt;

            $path = $file->storeAs('feedback',$fileNameToStore);
        }else{
            $fileNameToStore='';
        }


        // return $fileNameToStore;

        $feedback = new Feedback();
        // $file->title = $request->input('title');

        $feedback->suggestionType = $request->suggestionType;
        $feedback->subject = $request->subject;
        $feedback->description = $request->description;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->contact = $request->contact;
        $feedback->country = $request->country;
        $feedback->flight = $request->email;
        $feedback->from = $request->from;
        $feedback->to = $request->to;
        $feedback->journey_date =date('Y-m-d',$request->journey_date);
        $feedback->file_name = $fileNameToStore;
        $feedback->save();

        // Feedback::create($request->all());

        $request->session()->flash('success', 'Your feedback has been submitted successfully. We will get back to you shortly');

        return redirect()->back();


        // $feedback = new Feedback();

        // if ($request->Compliment == 'Compliment') {
        //     $feedback->suggestionType = 'Compliment';
        //     return 1;
        // }else if ($request->Compliment == 'Suggestion') {
        //     # code...
        // }
        // $feedback->subject = $request->subject;
        // $feedback->description = $request->description;
        // $feedback->name = $request->name;
        // $feedback->email = $request->email;
        // $feedback->contact = $request->contact;
        // $feedback->country = $request->country;
        // $feedback->flight = $request->flight;
        // $feedback->from = $request->from;
        // $feedback->to = $request->to;

        // $feedback->save();
        // return $request;



    }

    public function submitCargoFeedback(Request $request){

        // dd($request);

        $request->validate([
            'subject' => 'required|max:200',
            'description' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'name' =>  ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'agent' => 'required',
            'flight' => 'nullable|max:50',
            'from' => 'nullable|max:50',
            'to' => 'nullable|max:50',
            'input_file' => 'nullable|max:2000|mimes:png,jpg,jpeg,csv,txt,xlx,xls,xlsx,pdf',
            'g-recaptcha-response' => function ($attribute, $value, $fail) {
               $secret_key = config('services.recaptcha.secret');
               $response = $value;
               $userIP =  $_SERVER['REMOTE_ADDR'];

               $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response&remoteip=$userIP";
               $response = \file_get_contents($url);
               $response = json_decode($response);

            //    dd($response);
                if(!$response->success){
                    Session::flash('g-recaptcha-reponse' , 'PLEASE CHECK reCaptcha');
                    Session::flash('alert-class','alert-danger');
                    $fail($attribute.' google reCatpcha failed');
                }
            },
        ]);
        //return $request;

        if($request->hasFile('input_file')){
            $file = $request->file('input_file');

            $fileNameWithExt = $file->getClientOriginalName();

            //return $fileNameWithExt;

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $date = date('d.m.Y.H.i.s', time());

            //return $date;

            $fileNameToStore = $date.'_'.$fileNameWithExt;

            $path = $file->storeAs('Cargofeedback',$fileNameToStore);
        }else{
            $fileNameToStore='';
        }


        // return $fileNameToStore;

        $feedback = new cargofeedback();
        // $file->title = $request->input('title');

        $feedback->suggestionType = $request->suggestionType;
        $feedback->subject = $request->subject;
        $feedback->description = $request->description;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->contact = $request->contact;
        $feedback->freightAgent = $request->agent;
        $feedback->flight = $request->email;
        $feedback->from = $request->from;
        $feedback->to = $request->to;
        $feedback->journey_date = $request->journey_date;
        $feedback->file_name = $fileNameToStore;
        $feedback->save();

        // Feedback::create($request->all());

        return redirect()->back()->with('success', 'Your feedback has been submitted successfully. We will get back to you shortly');



    }

    public function addsubscriber(Request $request){
        $data = array();
        $emailCheck = subscriber::where('email',\request('email'))->get();

        if ($emailCheck->isEmpty()) {
            $newEmail = new subscriber();
            $newEmail->email = $request->email;
            $newEmail->save();

            // Response
            $data['success'] = 1;
            $data['message'] = 'Congratulations! You are now a subscriber.';
        }else {
            // Response
            $data['success'] = 0;
            $data['message'] = 'You are already our valued subscriber.';
        }

        return Response()->json($data);
    }
}
