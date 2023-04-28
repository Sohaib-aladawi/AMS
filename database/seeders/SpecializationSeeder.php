<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Specialization::count()>0){
            return;
        }
        $spec=[
            [
                'specialization_id' => 'GN',
                'specialization_name' => 'Genaral',
                'version'=> '5',
                'level_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'specialization_id' => 'SE',
                'specialization_name' => 'Software Engineering',
                'version'=> '5',
                'level_id'=>2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'NCS',
                'specialization_name' => 'Network computing & Security',
                'version'=> '5',
                'level_id'=> 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'DS',
                'specialization_name' => 'Data Science & Artificial',
                'version'=> '5',
                'level_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'ADSE',
                'specialization_name' => 'Advance Diploma Software Engineering',
                'version'=> '5',
                'level_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'CI',
                'specialization_name' => 'Cyber & Information',
                'version'=> '5',
                'level_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'NW',
                'specialization_name' => 'Network',
                'version'=> '5',
                'level_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'BTDS',
                'specialization_name' => 'B.tech Data Science & Artificial Intelligence',
                'version'=> '5',
                'level_id'=> 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'CIS',
                'specialization_name' => 'Cyber & Information Security',
                'version'=> '5',
                'level_id'=> 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'BTSE',
                'specialization_name' => 'B.Tech. Software Engineering',
                'version'=> '5',
                'level_id'=> 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'specialization_id' => 'NC',
                'specialization_name' => 'Network computing',
                'version'=> '5',
                'level_id'=> 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Specialization::insert($spec);

    }
}
