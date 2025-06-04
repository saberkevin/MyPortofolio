<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    /**
     * @SuppressWarnings("StaticAccess")
     */
    public function contactUs()
    {
        $request = request();      

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $subject = 'New Project Opportunity';
        $message = "Name: " . $request->input('name') . "\n";
        $message .= "Email: " . $request->input('email') . "\n";
        $message = "Budget: " . $request->input('budget') . "\n";
        $message .= "Message: \n" . $request->input('message');


        Mail::raw($message, function (Message $msg) use ($subject) {
            $msg->to('kevin.winarko@outlook.com')->subject($subject);
        });

        return "OK";
    }
}
