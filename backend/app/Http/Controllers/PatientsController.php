<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Records;

class PatientsController extends Controller
{
    // Method to add a new patient
    public function addPatient(Request $request)
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
        $patient = Patients::create($validatedData);

        // Return response
        return response()->json(['message' => 'Patient created successfully', 'data' => $patient], 201);
    }

    // Method to update an existing patient
    public function updatePatient(Request $request, $id)
    {
        // Find patient by ID
        $patient = Patients::findOrFail($id);

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
        $patient->updatePatient($validatedData);

        // Return response
        return response()->json(['message' => 'Patient updated successfully', 'data' => $patient]);
    }

    public function destroy($id)
    {
        // Find the patient by ID
        $patient = Patients::find($id);

        // Check if the patient exists
        if (!$patient) {
            return response()->json(['message' => 'Patient not found'], 404);
        }

        // Delete the patient
        $patient->delete();

        // Return a response
        return response()->json(['message' => 'Patient deleted successfully'], 200);
    }

    public function records()
    {
        return $this->hasMany(Records::class);
    }
}