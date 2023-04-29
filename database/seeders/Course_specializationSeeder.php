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
        Course_specialization::factory(40)->create();
    }
}
