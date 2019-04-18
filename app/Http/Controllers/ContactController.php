<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        Mail::to(env('ADMIN_EMAIL'))->send(new ContactForm($request->email, $request->name, $request->phone, $request->message));

        //return redirect()->back()->with('success', 'Your message has been sent!');
        return redirect()->to(url()->previous() . '#contact-link')->with('message_sent', 'Your message has been sent!');
    }
}
