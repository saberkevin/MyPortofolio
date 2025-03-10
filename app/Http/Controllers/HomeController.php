<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contactUs()
    {
        $request = request();
        $subject = $request->input('subject');
        $message = "Name: " . $request->input('name') . "\n";
        $message .= "Email: " . $request->input('email') . "\n";
        $message .= "Message: " . $request->input('message');

        Mail::raw($message, function (Message $msg) use ($subject) {
            $msg->to('kevin.winarko@outlook.com')->subject($subject);
        });

        return "OK";
    }
}
