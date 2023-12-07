<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function testMail()
    {
        $mail = 'bg.shahir@outlook.com';
        Mail::to($mail)->send(new TestMail());

        dd('Mail Send Successfully !!');
    }
}
