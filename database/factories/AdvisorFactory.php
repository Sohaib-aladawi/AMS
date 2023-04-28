<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdvisorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $letter=['e','f'];
        $year = ['23','22','21','20','19','18','17','16'];
        $gender = ['1','2'];
        $genrate = $letter[array_rand($letter)].$year[array_rand($year)].$gender[array_rand($gender)].random_int(1000,9999);
        //$dept_id = Department::all('department_id');
        $role = ['admin', 'moderator', 'user'];
        
        return [
            'advisor_id'=>$genrate,
            'advisor_name'=> $this->faker->name,
            'email'=>$genrate.'@utas.edu.om',
            'password'=> $this->faker->password(8),
            //'department_id' => $this->faker->randomElement($dept_id) ,
            'role' => $this->faker->randomElement($role),
            
        ];
    }
}
