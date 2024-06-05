<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            PatientSeeder::class,
            DoctorSeeder::class,
            MedicalRecordSeeder::class,
            AppointmentSeeder::class,
        ]);
    }
}

