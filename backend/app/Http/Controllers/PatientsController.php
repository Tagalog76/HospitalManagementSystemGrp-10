<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientsController extends Controller
{
    // Method to add a new patient
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'emergency_contact' => 'required',
            'medical_history' => 'nullable',
        ]);

        // Create new patient
        $patient = PatientsController::create($validatedData);

        // Return response
        return response()->json(['message' => 'Patient created successfully', 'data' => $patient], 201);
    }

    // Method to update an existing patient
    public function update(Request $request, $id)
    {
        // Find patient by ID
        $patient = PatientsController::findOrFail($id);

        // Validate request data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'emergency_contact' => 'required',
            'medical_history' => 'nullable',
        ]);

        // Update patient
        $patient->update($validatedData);

        // Return response
        return response()->json(['message' => 'Patient updated successfully', 'data' => $patient]);
    }
}