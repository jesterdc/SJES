<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {   
        return view('contact');
    }

    public function submit(ContactRequest $request)
    {
        Mail::to('sjes@doc_request.com')->send(new ContactMail($request->name, $request->email, $request->content));
        return redirect()->back()->with('message', 'Message sent successfully!');
    }
}
