<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            [
                'student_id' => 's76s198',
                'student_name' => 'Sohaib al-adawi',
                'current_CGPA' => 3.6,
                'advisor_id'=> 1,
                'department_id'=> 'IT',
                'specialization_id'=> 'GN',
                'EL4SCORE'=> 98,
                'IELTSSCORE'=>null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 's76s123',
                'student_name' => 'Salim Al-Toubi',
                'current_CGPA' => 3.9,
                'advisor_id'=> 1,
                'department_id'=> 'IT',
                'specialization_id'=> 'SE',
                'EL4SCORE'=> 98,
                'IELTSSCORE'=>null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 's12s123',
                'student_name' => 'Almuhanned Al-Toubi',
                'current_CGPA' => 3.5,
                'advisor_id'=> 2,
                'department_id'=> 'IT',
                'specialization_id'=> 'SE',
                'EL4SCORE'=> 98,
                'IELTSSCORE'=>null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
