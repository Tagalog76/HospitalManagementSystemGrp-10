<?php

namespace App\Http\Controllers;

use App\Models\Records;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    /**
     * Display a listing of the records.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Records::all();
        return response()->json($records);
    }

    /**
     * Store a newly created record in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'visit_date' => 'required|date',
            'diagnosis' => 'required|string|max:255',
            'treatment' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $record = Records::create($request->all());
        return response()->json($record, 201);
    }

    /**
     * Display the specified record.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = Records::find($id);

        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        return response()->json($record);
    }

    /**
     * Update the specified record in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'visit_date' => 'required|date',
            'diagnosis' => 'required|string|max:255',
            'treatment' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $record = Records::find($id);

        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $record->update($request->all());
        return response()->json($record);
    }

    /**
     * Remove the specified record from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Records::find($id);

        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $record->delete();
        return response()->json(['message' => 'Record deleted successfully'], 200);
    }
}