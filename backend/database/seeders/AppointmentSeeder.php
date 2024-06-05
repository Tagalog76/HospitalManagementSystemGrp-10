<?php

use App\Models\Appointment;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        // Sample appointment data
        $appointments = [
            [
                'patient_id' => 1,
                'doctor_id' => 1,
                'appointment_date' => '2024-06-10 10:00:00',
                'remarks' => 'Follow-up checkup',
            ],
            [
                'patient_id' => 2,
                'doctor_id' => 2,
                'appointment_date' => '2024-06-11 14:30:00',
                'remarks' => 'Initial consultation',
            ],
      
        ];

        // Insert appointment data into the database
        foreach ($appointments as $appointmentData) {
            Appointment::create($appointmentData);
        }
    }
}



