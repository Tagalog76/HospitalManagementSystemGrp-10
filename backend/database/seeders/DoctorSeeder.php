<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("doctors")->insert([
            [
                
                "first_name" => "John",
                "last_name" => "Doe",
                "specialization" => "Dermatology",
                "license_number" => 123456,
                "phone" => 1234567891,
                "email" => "john@gmail.com"
                
            ],

            [
                "first_name" => "Jane",
                "last_name" => "Smith",
                "specialization" => "Cardiology",
                "license_number" => 987654,
                "phone" => 1234567891,
                "email" => "jane@gmail.com"
            ],

            [
                "first_name" => "Olivia",
                "last_name" => "Williams",
                "specialization" => "Pediatrics",
                "license_number" => 345678,
                "phone" => 1234567891,
                "email" => "olivia@gmail.com"
            ],

            [
                "first_name" => "Noah",
                "last_name" => "Miller",
                "specialization" => "Neurology",
                "license_number" => 654321,
                "phone" => 1234567891,
                "email" => "noah@gmail.com"
            ],

            [
                "first_name" => "Sophia",
                "last_name" =>  "Garcia",
                "specialization" =>  "Orthopedics",
                "license_number" =>  219870,
                "phone" =>  1234567891,
                "email" =>  "sophia@gmail.com"
            ]

        ]);
    }
}
