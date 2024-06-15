<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Patients;
use Illuminate\Http\Request;
use App\Models\Users; // Assuming you have a User model
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    // Method to fetch all users
    public function index()
    {
        $users = Users::all();
        return response()->json($users);
    }

    // Method to create a new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:admin,doctor,patient,receptionist',
            'password' => 'required|string|min:6'
        ]);

        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        
        // Save the user to the database
        // $user->save();
        if ($user->role == 'doctor') {
            $nameParts = explode(' ', $user->name);
            $doctor = new Doctors();
            $doctor->user_id = $user->id; 
            $doctor->first_name = $nameParts[0];
            $doctor->last_name = isset($nameParts[1]) ? $nameParts[1] : '';
            $doctor->specialization = ''; 
            $doctor->license_number = ''; 
            $doctor->phone = ''; 
            $doctor->email = $user->email;
            $doctor->created_at = now();
            $doctor->updated_at = now();
            $doctor->save();
        }
        else if ($user->role == 'patient') {
            $nameParts = explode(' ', $user->name);
            $patient = new Patients();
            $patient->user_id = $user->id; 
            $patient->first_name = $nameParts[0];
            $patient->last_name = isset($nameParts[1]) ? $nameParts[1] : '';
            $patient->date_of_birth = '2001-01-01'; 
            $patient->gender = 'other'; 
            $patient->address = ''; 
            $patient->phone = '';
            $patient->email = $user->email;
            $patient->emergency_contact = ''; 
            $patient->medical_history = '';
            $patient->created_at = now();
            $patient->updated_at = now();
            $patient->save();
        }

        return response()->json(['message' => 'User added successfully', 'user' => $user]);
    }

    // Method to fetch a single user
    public function show($id)
    {
        $user = Users::findOrFail($id);
        return response()->json($user);
    }

    // Method to update a user
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required|in:admin,doctor,receptionist,patient'
        ]);

        $user = Users::findOrFail($id);
        $user->update($request->all());

        if ($user->role == 'doctor') {
            $nameParts = explode(' ', $user->name);
            $doctor = new Doctors();
            $doctor->user_id = $user->id; 
            $doctor->first_name = $nameParts[0];
            $doctor->last_name = isset($nameParts[1]) ? $nameParts[1] : '';
            $doctor->specialization = ''; 
            $doctor->license_number = ''; 
            $doctor->phone = ''; 
            $doctor->email = $user->email;
            $doctor->created_at = now();
            $doctor->updated_at = now();
            $doctor->save();
        }else if ($user->role == 'patient') {
            $nameParts = explode(' ', $user->name);
            $patient = new Patients();
            $patient->user_id = $user->id;
            $patient->first_name = $nameParts[0];
            $patient->last_name = isset($nameParts[1]) ? $nameParts[1] : ' ';
            $patient->date_of_birth = '2001-01-01'; 
            $patient->gender = 'other'; 
            $patient->address = ' '; 
            $patient->phone = ' ';
            $patient->email = $user->email;
            $patient->emergency_contact = ' ';
            $patient->medical_history = ' ';
            $patient->created_at = now();
            $patient->updated_at = now();
            $patient->save();
        }
        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    }

    // Method to delete a user
    public function destroy($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}