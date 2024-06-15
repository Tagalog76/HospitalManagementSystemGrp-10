<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Records;

class PatientsController extends Controller
{
    public function listPatients()
    {
        return Patients::all();
    }

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
        $patient = Patients::create($validatedData);

        // Return response
        return response()->json(['message' => 'Patient created successfully', 'data' => $patient], 201);
    }

    // Method to update an existing patient
    public function update(Request $request, $id)
    {
        // Find patient by ID
        $patient = Patients::findOrFail($id);

        // Validate request data
        $validatedData = $request->validate([
            'first_name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|nullable|string|max:255',
            'date_of_birth' => 'sometimes|nullable|date',
            'gender' => 'sometimes|nullable|string|max:10',
            'address' => 'sometimes|nullable|string|max:255',
            'phone' => 'sometimes|nullable|string|max:15',
            'email' => 'sometimes|nullable|string|email|max:255' . $id,
            'emergency_contact' => 'sometimes|nullable|string|max:255',
            'medical_history' => 'sometimes|nullable|string',
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

    public function getAppointments($id)
{
    $appointments = Appointments::where('patient_id', $id)
        ->join('doctors', 'appointments.doctor_id', '=', 'doctors.doctor_id')
        ->where('status', '!=', 'cancelled')
        ->select('appointments.*', 'doctors.first_name as doctor_name', 'doctors.specialization')
        ->get();

    if ($appointments->isEmpty()) {
        return response()->json(['message' => 'No appointments found.']);
    }

    return response()->json(['appointments' => $appointments], 200);
}

public function getMedicalHistory($id)
    {
        try {
            $medicalHistory = Records::where('patient_id', $id)->get();
            return response()->json(['medicalHistory' => $medicalHistory]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to fetch medical history.'], 500);
        }
    }
}