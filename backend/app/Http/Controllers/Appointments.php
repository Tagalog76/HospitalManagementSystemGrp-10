<?php 
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Appointment;
    
    class AppointmentController extends Controller
    {
        public function index()
        {
            return Appointment::all();
        }
    
        public function show($id)
        {
            return Appointment::find($id);
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'doctor_id' => 'required|exists:doctors,id',
                'appointment_date' => 'required|date',
                'remarks' => 'nullable|string',
            ]);
    
            return Appointment::create($request->all());
        }
    
        public function update(Request $request, $id)
        {
            $appointment = Appointment::findOrFail($id);
            $appointment->update($request->all());
            return $appointment;
        }
    
        public function destroy($id)
        {
            Appointment::find($id)->delete();
            return response()->json(['message' => 'Appointment deleted successfully']);
        }
    }
    