<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Department;

class AppointmentController extends Controller
{
    public function appstore(Request $request)
    {
        // Validate the request
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'patient_name' => 'required|string|max:255',
            'patient_email' => 'required|email|max:255',
            'patient_phone' => 'required|string|max:20',
            'appointment_date' => 'required|date|after_or_equal:today',
            'message' => 'nullable|string',
        ]);

        // Create appointment record
        Appointment::create([
            'doctor_id' => $request->doctor_id,
            'patient_name' => $request->patient_name,
            'patient_email' => $request->patient_email,
            'patient_phone' => $request->patient_phone,
            'appointment_date' => $request->appointment_date,
            'message' => $request->message,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your appointment has been booked successfully!');
    }

    public function index()
    {
        $appointments = Appointment::with('doctor.department')->latest()->get();
        return view('backend.pages.appointment', compact('appointments'));
    }
    public function appointmentDestroy($id)
    {
        $delete = Appointment::findOrFail($id);
        $delete->delete();

        return redirect()->back()->with('success', 'Deleted successfully!');
    }
}
