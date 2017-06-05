<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request)
    {
        Mail::send('emails.email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
               $message->from('admin@lse.com');
                $message->to('admin@lse.com', 'Admin')->subject('LSE Feedback');
            });

        return redirect()->route('contact')->with('message', 'Thanks for Contacting Us!');
    }
}
