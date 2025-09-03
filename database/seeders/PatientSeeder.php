<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        Patient::insert([
            [
                'first_name' => 'Ahmed',
                'last_name' => 'Ali',
                'gender' => 'male',
                'birth_date' => '1990-05-12',
                'phone' => '01012345678',
                'email' => 'ahmed.ali@example.com',
                'address' => 'Cairo, Egypt',
                'blood_type' => 'A+',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Mona',
                'last_name' => 'Hassan',
                'gender' => 'female',
                'birth_date' => '1988-08-20',
                'phone' => '01098765432',
                'email' => 'mona.hassan@example.com',
                'address' => 'Alexandria, Egypt',
                'blood_type' => 'B+',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Omar',
                'last_name' => 'Youssef',
                'gender' => 'male',
                'birth_date' => '1995-02-15',
                'phone' => '01122334455',
                'email' => 'omar.youssef@example.com',
                'address' => 'Giza, Egypt',
                'blood_type' => 'O-',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Sara',
                'last_name' => 'Mahmoud',
                'gender' => 'female',
                'birth_date' => '1992-11-30',
                'phone' => '01233445566',
                'email' => 'sara.mahmoud@example.com',
                'address' => 'Mansoura, Egypt',
                'blood_type' => 'AB+',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Yasmin',
                'last_name' => 'Fathy',
                'gender' => 'female',
                'birth_date' => '1999-07-07',
                'phone' => '01555667788',
                'email' => 'yasmin.fathy@example.com',
                'address' => 'Tanta, Egypt',
                'blood_type' => 'A-',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
