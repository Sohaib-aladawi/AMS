<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Level;
use App\Models\Course;
use App\Models\Advisor;
use App\Models\Student;
use App\Models\Department;
use App\Models\Student_course;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\LevelSeeder;
use Database\Seeders\CourseSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\AdvisorSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\SpecializationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DepartmentSeeder::class,
            AdvisorSeeder::class,
            UserSeeder::class,
            LevelSeeder::class,
            SpecializationSeeder::class,
            StudentSeeder::class,
            CourseSeeder::class,
            Course_specializationSeeder::class,
            Student_courseSeeder::class
        ]);
        
        // for($i=0;$i<30;$i++){
        //     $dept_id = DB::table('departments')->pluck('department_id');
        //     Advisor::factory()->create([
        //     'department_id'=> $dept_id[random_int(0, $dept_id->count() - 1)]
        //     ]);
        // }
        // for($i=0;$i<100;$i++){
        // $advisor_id= DB::table('advisors')->pluck('advisor_id');
        // $sep=DB::table('specializations')->pluck('specialization_id');
        // Student::factory()->create([
        //     'advisor_id'=> $advisor_id[random_int(0, $dept_id->count() - 1)],
        //     'department_id'=> 'IT',
        //     'specialization_id'=>$sep[random_int(0, $sep->count() - 1)]

        //     ]);
        // }
        
        
        

        
        
        
    }
}
