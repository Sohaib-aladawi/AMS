<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Models\Course_specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Student_courseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $std = DB::table('students')->pluck('student_id')->toArray();
        //$course = DB::table('Course_specializations')->pluck('course_id')->toArray();
        $status = ['Pass','Study','Pending'];
        $ver =[3,5];
        $student_id = $std[array_rand($std)];
        $ssid = DB::table('students')->select(['specialization_id'])->where('student_id','=',$student_id)->value('specialization_id');
        $course_id = Course_specialization::select('course_id')->where('specialization_id','=',"$ssid")
        ->pluck('course_id')->toArray();
        //$course_id =$course_id->toArray();
        // if ($course_id->count() == 0) {
        //     return  [];
        // }
        //DD($course_id);
        return [
            'student_id' => $student_id,
            'course_id' => $course_id[array_rand($course_id)],
            'status' => $status[random_int(0,2)],
            'version' => $ver[random_int(0,1)],
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
