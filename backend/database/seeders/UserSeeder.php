<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => null,
                'password' => 'admin',
                'role' => 'admin'
            ],
            [
                'name' => 'John',
                'email' => 'john@gmail.com',
                'email_verified_at' => null,
                'password' => 'patient',
                'role' => 'patient'
            ],
            [
                'name' => 'Doe',
                'email' => 'doe@gmail.com',
                'email_verified_at' => null,
                'password' => 'doctor',
                'role' => 'doctor'
            ],
        ]);
    }
}
