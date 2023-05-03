<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course_specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Course_specializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $core=['core','elective'];
        $type=['University','College','Specialization'];
        $sem =['fall','spring'];
        Course_specialization::insert([
            [
                'course_id'=>'UNEN1102',
                'course_type'=>$type[0],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSDB1102',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSWD1103',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSCM1101',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'MATH1202',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSPG1205',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSCN1104',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'UNEN1203',
                'course_type'=>$type[0],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSOP1207',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSSY1208',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'GN',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSWD2101',
                'course_type'=>$type[1],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSDS2101',
                'course_type'=>$type[2],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSSE2101',
                'course_type'=>$type[2],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'MATH2101',
                'course_type'=>$type[2],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'UNCL2211',
                'course_type'=>$type[0],
                'type'=>$core[1],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSSE2202',
                'course_type'=>$type[2],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'UNEP2109',
                'course_type'=>$type[0],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSSE2203',
                'course_type'=>$type[2],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSSE2204',
                'course_type'=>$type[2],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id'=>'CSSE2205',
                'course_type'=>$type[2],
                'type'=>$core[0],
                'specialization_id'=>'SE',
                'department_id'=>'IT',
                'semester'=>$sem[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
