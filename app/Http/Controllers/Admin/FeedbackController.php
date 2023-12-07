<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Refund;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index(){

        $passenger_feedback = DB::table('feedback')->orderBy('created_at','desc')->get();
//        return $passenger_feedback;
        return view('admin.feedback',compact('passenger_feedback'));

    }


}
