<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Add this line
use Illuminate\Support\Facades\Storage;

class doctorsController extends Controller
{

    public function doctorlogin()
    {
        return view('loginform');
    }
    public function doctorhomepage()
    {
        return view('doctor.doctorhomepage');
    }

    public function doctors()
    {

        return view('doctor.doctors');
    }

    public function doctorlist()
    {

        $users = User::where('type', 'doctor')->get();
        return view('doctor.doctorlist', compact('users'));
    }
    public function createdoctor()
    {

        return view('doctor.create');

    }

    public function doctorstore(Request $request)
    { {
            // Save user data
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_name' => $request->user_name,
                'gander' => $request->gander, // Fixed typo from 'gander' to 'gender'
                'age' => $request->age,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'type' => $request->type,
            ]);

            // Save doctor-specific data
            $doctor = new Doctor();
            $doctor->user_id = $user->id;
            $doctor->specialization = $request->specialization;
            $doctor->experience = $request->experience;
            $doctor->phone = $request->phone;
            $doctor->address = $request->address;

            // Handle image upload
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $doctor->image = $imageName;
            }

            // Handle documents upload
            if ($request->hasFile('documents')) {
                $documentNames = [];
                foreach ($request->file('documents') as $document) {
                    $docName = time() . '_' . $document->getClientOriginalName();
                    $document->move(public_path('documents'), $docName);
                    $documentNames[] = $docName;
                }
                $doctor->documents = json_encode($documentNames);
            }

            $doctor->notes = $request->notes;
            $doctor->save();

            return redirect()->route('admin.doctorlist')->with('success', 'Doctor created successfully.');
        }

    }
    public function destroy($id)
    {
        \Log::info('Attempting to delete user with ID: ' . $id);

        try {
            $user = User::findOrFail($id);
            $user->delete();
            \Log::info('Successfully deleted user with ID: ' . $id);
            return response()->json(['success' => true]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            \Log::error('User not found with ID: ' . $id);
            return response()->json(['success' => false, 'message' => 'User not found']);
        } catch (\Exception $e) {
            \Log::error('Failed to delete user with ID: ' . $id . ' Error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

}
