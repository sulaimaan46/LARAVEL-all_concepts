<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{

    public function create()
    {
        return view('email');
    }

    public function sendmail(Request $request)
    {
        $details=['subject'=>$request->subject,'message'=>$request->message,$request->email];
//    dd($details);
        try {
            Mail::to($request->email)->send(new \App\Mail\OrderShipped($details));
        }catch (customException $e) {
            //display custom message
            echo $e->errorMessage();
        }
        exit;
        Mail::to($request->email)->send(new \App\Mail\OrderShipped($details));

//        return view('email');

//        $this->dispatch(new SendEmailJob());
    }
}

