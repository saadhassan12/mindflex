<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Auth;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function appointment()
    {

        return view('appointment.appointment');
    }
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|string',
            'doctor_id' => 'required|exists:doctors,user_id', // Validate doctor_id
            'patient_id' => 'required', // Correct validation rule
        ]);

        // Save the data
        $appointment = new Appointment();
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->doctor_id = $request->input('doctor_id'); // Store the doctor_id
        $appointment->patient_id = $request->input('patient_id'); // Use the patient_id from the request
        $appointment->save();

        // Redirect or respond as needed
        return redirect()->route('checkout', ['id' => $appointment->id]);
    }
}
