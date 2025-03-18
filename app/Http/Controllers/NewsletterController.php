<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Newsletter;
use App\Mail\NewsletterSubscribedMail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email|unique:newsletters,email'
        ]);

        // Create subscriber
        $subscriber = Newsletter::create(['email' => $request->email]);

        // Send the email notification
        Mail::to($subscriber->email)->send(new NewsletterSubscribedMail($subscriber->email));

        // Redirect back with success message
        return redirect()->back()->with('success', 'You have successfully subscribed! Check your email.');
    }
}
