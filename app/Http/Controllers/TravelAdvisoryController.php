<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisory;
use App\Models\Country;

class TravelAdvisoryController extends Controller
{
    public function showAdvisory(){
        $advisories = Advisory::join('country','country_name','=','country.nicename')
                    ->orderBy('country_name','asc')
                    ->orderBy('created_at','desc')
                    ->get(['status','country_name','country.iso','advisory_title','file_name','created_at']);
        // dd($advisories);
        return view('travel-advisory', compact('advisories'));
    }
}
