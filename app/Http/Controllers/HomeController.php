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

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('captcha.secret'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);
        
        logger()->info('Google reCAPTCHA validation response', $response->json());

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);



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
