<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;

class AppointmentController extends Controller
{

    public function index()
    {
        return view('appointment');
    }
    

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'date' => 'required|date',
        'message' => 'nullable|string',
    ]);

    $appointment = Appointment::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'date' => $request->date,
        'message' => $request->message,
    ]);

    // Send email
    Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment));

    return redirect('/')->with('success', 'Appointment booked successfully! A confirmation email has been sent.');
}

    
}


