<?php
use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run()
    {
        $patients = [
            [
                'first_name' => 'Zyrell',
                'last_name' => 'Trinidad',
                'date_of_birth' => '2002-01-15',
                'gender' => 'male',
                'address' => '123 Main St, City, Country',
                'phone' => '1234567890',
                'email' => 'zyrell@gmail.com',
                'emergency_contact' => 'Josh Trinidad',
                'medical_history' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
 [
                'first_name' => 'Zyrell',
                'last_name' => 'Trinidad',
                'date_of_birth' => '2002-01-15',
                'gender' => 'male',
                'address' => '123 Main St, City, Country',
                'phone' => '1234567890',
                'email' => 'zyrell@gmail.com',
                'emergency_contact' => 'Josh Trinidad',
                'medical_history' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ]
            
        ];

        foreach ($patients as $patientData) {
            Patient::create($patientData);
        }
    }
}