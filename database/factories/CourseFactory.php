<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coures>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['Un','Co','Sp','El'];
        $ver = [3,5];
        $sep=DB::table('specializations')->pluck('specialization_id');
        $genrate = $type[array_rand($type)].$sep[random_int(0, $sep->count() - 1)].random_int(1000,4000);
        $ids = DB::table('courses')->pluck('course_id')->toArray(); 
        if (in_array($genrate,$ids)){
            return;
        }
        return [
                'course_id'=> $genrate,
                'course_name' => $this->faker->name,
                'course_type' => $type[array_rand($type)],
                'course_version' => $ver[array_rand($ver)],
                'passing_mark' => random_int(50,67),
                'credit_hours' => random_int(2,4),
                'created_at' => now(),
                'updated_at' => now(),
                
                
        ];
    }
}
