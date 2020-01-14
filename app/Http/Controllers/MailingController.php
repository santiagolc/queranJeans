<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class MailingController extends Controller
{
    function sendEmail(){
        $data = array('name'=>"Ripon Uddin", "body" => "Test mail");
  

    Mail::send('emails.mail', $data, function($message) {
        $email = \Auth::user()->email;
        $message->to($email,'To My Yahoo')->subject('Laravel Test Email');
        $message->from('ToFromID@gmail.com','Ripon Uddin (Laravel Lover)');
    });
}
}

