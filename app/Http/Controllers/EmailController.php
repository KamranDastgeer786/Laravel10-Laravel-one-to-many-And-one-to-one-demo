<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function SendEmail()
    {
        $toEmail = "ikonicsoftware@gmail.com";
        $message = "Hello, welcome to our website";
        $subject = "welcome to test email";

       $request = Mail::to($toEmail)->send(new SendEmail($message,$subject));

       dd($request);

    }
}
