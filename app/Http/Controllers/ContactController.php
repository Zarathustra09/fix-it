<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotification;
use App\Mail\AppointmentConfirmation;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function  index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $appointment = Appointment::create($request->all());

        // Send confirmation email to the user
        Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment));

        // Send notification email to the admin
        Mail::to(config('mail.from.address'))->send(new AdminNotification($appointment));

        return redirect()->route('contact')->with('success', 'Appointment created successfully.');
    }
}
