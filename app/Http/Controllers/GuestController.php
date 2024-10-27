<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return response()->json(['success' => 'Appointment cancelled successfully.']);
    }

    public function payAppointment(Request $request, $id)
    {
        $appointment = Appointment::where('user_id', Auth::id())->findOrFail($id);
        $appointment->update(['status' => 'PAID']);

        return response()->json(['success' => 'Appointment paid successfully.']);
    }
}
