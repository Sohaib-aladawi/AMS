<?php

namespace Database\Seeders;

use App\Models\Advisor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdvisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advisor::insert([
            [
                'advisor_id' =>'e123',
                'advisor_name' =>'Ali',
                'email' =>'Ali@utas.edu.om',
                'password' =>'123',
                'department_id' =>'IT',
                'role' =>'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'advisor_id' =>'e456',
                'advisor_name' =>'Salim',
                'email' =>'Salim@utas.edu.om',
                'password' =>'123',
                'department_id' =>'IT',
                'role' =>'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
