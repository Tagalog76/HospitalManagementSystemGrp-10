<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Doctors extends Controller
{
    public function index()
    {
        return Doctors::all();
    }

    public function show($id)
    {
        return Doctors::find($id);
    }

    //for adding doctors
    public function add(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'license_number' => 'required|int|mas:10',
            'phone' => 'required|int|max:11',
            'email' => 'required|email|max:255',
        ]);
        return Doctors::create($request->all());
    }
    //for updating doctors
    public function update(Request $request, $id)
    {
        $doctor = Doctors::findOrFail($id);
        $doctor->update($request->all());
        return $doctor;
    }

    //for deleting doctors
    public function delete($id)
    {
        Doctor::find($id)->delete();
        return response()->json(['message' => 'Doctor deleted successfully']);
    }
}
