<?php

namespace Database\Seeders;

use App\Models\Student_course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Course_specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Student_courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $se = Course_specialization::with('specializations')->select('course_id')->pluck('course_id')->toArray();
        //dd($se);
        $status = ['pass','study','pending'];
        for($i=0;$i<sizeof($se)-1;$i++){
            Student_course::insert([
                [
                    'student_id'=>'s76s198',
                    'course_id'=>$se[$i],
                    'status'=>$status[2],
                    'version'=>5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
        for($i=0;$i<sizeof($se)-1;$i++){
            Student_course::insert([
                [
                    'student_id'=>'s76s123',
                    'course_id'=>$se[$i],
                    'status'=>$status[2],
                    'version'=>5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
        
        // Student_course::insert([
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'UNEN1102',
        //         'status'=>$status[0],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'CSDB1102',
        //         'status'=>$status[0],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'CSWD1103',
        //         'status'=>$status[0],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'CSCM1101',
        //         'status'=>$status[0],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'MATH1202',
        //         'status'=>$status[0],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'CSPG1205',
        //         'status'=>$status[1],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'CSCN1104',
        //         'status'=>$status[1],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'UNEN1203',
        //         'status'=>$status[1],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'CSOP1207',
        //         'status'=>$status[1],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'student_id'=>'s76s198',
        //         'course_id'=>'CSSY1208',
        //         'status'=>$status[1],
        //         'version'=>5,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}
