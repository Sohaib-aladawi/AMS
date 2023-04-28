<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $letter=['s','j'];
        $s=$letter[array_rand($letter)];
        $generate = $s.random_int(10,99).$s.random_int(100,999999);
        return [
            'student_id' => $generate,
            'student_name' => $this->faker->name,
            'current_CGPA' => $this->faker->randomFloat(2,0,4),
            'EL4SCORE'=> $this->faker->randomFloat(2,0,100),
            'IELTSSCORE'=>$this->faker->randomFloat(1,0,9),
            'created_at' => now(),
            'updated_at' => now(),
            
        ];
    }
}
