<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Message;


class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
{
    // Validate form input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Save message in the database
    Message::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

    // Send email
    Mail::to('your-email@example.com')->send(new ContactMail([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]));


    return back()->with('success', 'Your message has been sent successfully!');
}

}
