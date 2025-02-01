<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function sendMail(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = $request->all();
        Mail::to('mrbhaqee.work@gmail.com')->send(new ContactMail($data));

        return response()->json(['success' => 'Email sent successfully!']);
    }
}
