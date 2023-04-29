<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Specialization;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Course_specializationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $Courses = Course::pluck('course_id')->toArray();
        $spe = DB::table('specializations')->pluck('specialization_id')->toArray();
        //$spe = DB::tabel('departments')->pluck('department_id')->toArray();
        return [
            'course_id'=>$Courses[array_rand($Courses)],
            'specialization_id'=>$spe[array_rand($spe)],
            'department_id'=>'IT',
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
