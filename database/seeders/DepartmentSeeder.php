<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        if (Department::count()>0){
            return;
        }
            $depat = [
                [
                'department_id' => 'IT',
                'department_name' => 'Informaion Technology',
                'created_at' => now(),
                'updated_at' => now()
                ],
                [
                    'department_id' => 'ELC',
                    'department_name' => 'English Language Center',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'department_id' => 'BS',
                    'department_name' => 'Business Studies',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'department_id' => 'ENG',
                    'department_name' => 'Engineering',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'department_id' => 'EI',
                    'department_name' => 'Entrepreneurship and Innovation',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ];
        
        Department::insert($depat);
        }
        
}
