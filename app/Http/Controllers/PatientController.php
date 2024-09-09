<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Checkout;
use App\Models\Doctor;
use App\Models\User;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{

    public function patientlogin()
    {
        return view('loginform');
    }

    public function signup()
    {
        return view('signup');
    }
    public function patientstore(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->age = $request->age;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Encrypt the password
        $user->gander = $request->gander;
        $user->type = $request->type;
        $user->save();

        return redirect()->route('patientlogin')->with('success', 'User registered successfully!');
    }

    public function patientview()
    {

        return view('patient.patientview');
    }

    public function edit($id)
    {

        $patient = User::findOrFail($id);
        return view('patient.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $patient = User::findOrFail($id);

        // Update the patient's details
        $patient->first_name = $request->input('first_name');
        $patient->last_name = $request->input('last_name');
        $patient->age = $request->input('age');
        $patient->user_name = $request->input('user_name');
        $patient->email = $request->input('email');
        $patient->gander = $request->input('gander');

        // If the password field is filled, hash the new password; otherwise, retain the old password
        if ($request->filled('password')) {
            $patient->password = bcrypt($request->input('password'));
        }

        $patient->save();

        // Determine the redirect route based on whether the user is an admin
        if (Auth::user() && Auth::user()->isAdmin()) {
            return redirect()->route('admin.homepage')->with('success', 'Patient updated successfully.');
        } else {
            return redirect()->route('patientview')->with('success', 'Patient updated successfully.');
        }
    }

    public function show($id)
    {

        $patient = User::findOrFail($id);
        return view('patient.show', compact('patient'));
    }

    public function profile()
    {
        return view('patient.profile');
    }


    public function doctorview()
    {
        $doctors = DB::table('users')
            ->join('doctors', 'users.id', '=', 'doctors.user_id')
            ->join('specialities', 'doctors.specialization', '=', 'specialities.id')
            ->where('users.type', 'doctor')
            ->select('users.*', 'doctors.*', 'specialities.name as speciality_name')
            ->orderBy('specialities.name') // Order by specialities name
            ->get()
            ->groupBy('speciality_name');  // Group by speciality name


        return view('patient.doctorview', compact('doctors'));
    }


    public function changepass()
    {
        return view('patient.changepass');
    }


    public function exercise()
    {
        return view('patient.exercise');
    }

    public function updatePassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Check if the old password matches
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }

        // Update the password
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('status', 'Password updated successfully!');
    }

    public function booking($id)
    {
        $doctors = DB::table('users')
            ->join('doctors', 'users.id', '=', 'doctors.user_id')
            ->where('users.type', 'doctor')
            ->where('users.id', $id) // Specify the table for 'id'
            ->select('users.*', 'doctors.*')
            ->first();

        return view('patient.booking', compact('doctors'));
    }


    public function store(Request $request)
    {
        $userId = Auth::id(); // Get the current user ID

        // Validate and store the booking
        $request->validate([
            'slot_id' => 'required|integer',
            'time' => 'required|string'
        ]);

        $booking = new Booking();
        $booking->user_id = $userId;
        $booking->slot_id = $request->input('slot_id');
        $booking->time = $request->input('time');
        $booking->save();

        return response()->json(['success' => true]);
    }

    public function checkout($id)
    {
        $appointment = DB::table('appointments')
            ->leftjoin('users', 'appointments.doctor_id', '=', 'users.id')
            ->leftJoin('doctors', 'users.id', '=', 'doctors.user_id')
            ->select('appointments.*', 'users.*', 'doctors.*')
            ->where('appointments.id', $id)
            ->first();
        return view('patient.checkout', compact('appointment'));

    }
    public function sstore(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'payment_method' => 'required|string',
            'card_name' => 'nullable|string|max:255',
            'card_number' => 'nullable|string|max:19',
            'expiry_month' => 'nullable|string|max:2',
            'expiry_year' => 'nullable|string|max:2',
            'cvv' => 'nullable|string|max:4',
            'terms_accept' => 'required|accepted',
            'patient_id' => 'required',
            'doctor_id' => 'required',
        ]);
        Checkout::create($validated);
        return redirect()->route('doctorview');
    }
    public function pappointment()
    {
        $appointments = DB::table('appointments')
            ->leftjoin('users', 'appointments.doctor_id', '=', 'users.id')
            ->leftJoin('doctors', 'users.id', '=', 'doctors.user_id')
            ->select('appointments.*', 'users.*', 'doctors.*')
            ->where('appointments.patient_id', auth()->id())
            ->get();
        return view('patient.pappointment', compact('appointments'));

    }


    public function updatep(Request $request)
    {

        $user = auth()->user();


        // Update the user profile fields
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->age = $request->input('age');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->gander = $request->input('gander');

        // Check if the password field is not empty before updating


        // Save the user data
        $user->save();

        // Redirect or return a response
        return redirect()->route('pprofile')->with('success', 'Profile updated successfully!');
    }


}

