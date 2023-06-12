<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'advisor_code' =>'e123',
                'advisor_name' =>'Ali',
                'email' =>'Ali@utas.edu.om',
                'password' =>bcrypt('123'),
                'department_id' =>'IT',
                'role' =>'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'advisor_code' =>'e456',
                'advisor_name' =>'Salim',
                'email' =>'Salim@utas.edu.om',
                'password' =>bcrypt('123'),
                'department_id' =>'IT',
                'role' =>'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'advisor_code' =>'e111',
                'advisor_name' =>'Sami mostafa',
                'email' =>'Sami@utas.edu.om',
                'password' =>bcrypt('321'),
                'department_id' =>'IT',
                'role' =>'admain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
