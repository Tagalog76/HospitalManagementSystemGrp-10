<?php 
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Appointments;
    
    class AppointmentsController extends Controller
    {
        public function index()
        {
            return Appointments::all();
        }
    
        public function show($id)
        {
            return Appointments::find($id);
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'doctor_id' => 'required|exists:doctors,id',
                'appointment_date' => 'required|date',
                'remarks' => 'nullable|string',
            ]);
    
            return Appointments::create($request->all());
        }
    
        public function update(Request $request, $id)
        {
            $appointment = Appointments::findOrFail($id);
            $appointment->update($request->all());
            return $appointment;
        }
    
        public function destroy($id)
        {
            Appointments::find($id)->delete();
            return response()->json(['message' => 'Appointment deleted successfully']);
        }
    }
    