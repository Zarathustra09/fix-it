<?php

namespace App\Http\Controllers;

use App\Mail\CancelledAppointment;
use App\Mail\PaidAppointment;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class GuestController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $appointments = Appointment::where('user_id', $user->id)->get();

        return view('appointment', compact('appointments'));
    }

    public function cancelAppointment(Request $request, $id)
    {
        $appointment = Appointment::where('user_id', Auth::id())->findOrFail($id);
        $appointment->update(['status' => 'CANCELLED']);

        // Send the cancellation email
        Mail::to($appointment->email)->send(new CancelledAppointment($appointment));

        return response()->json(['success' => 'Appointment cancelled successfully.']);
    }

    public function payAppointment(Request $request, $id)
    {
        $appointment = Appointment::where('user_id', Auth::id())->findOrFail($id);
        $appointment->update(['status' => 'PAID']);

        // Send the payment email
        Mail::to($appointment->email)->send(new PaidAppointment($appointment));

        return response()->json(['success' => 'Appointment paid successfully.']);
    }
}
