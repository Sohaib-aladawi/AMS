<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Level::count()>0){
            return;
        }
        $level=[
            [
                'level_name' => 'Deploma first year',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level_name' => 'Deploma second year',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level_name' => 'Advance Deploma',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'level_name' => 'B-tech',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        Level::insert($level);
    }
}
