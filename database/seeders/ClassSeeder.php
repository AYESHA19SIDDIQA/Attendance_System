<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classes;

class ClassSeeder extends Seeder
{
    public function run()
    {
        // Make sure a teacher exists (id = 1, seeded from UserSeeder)
        Classes::create([
            'id' => 1,
            'teacherid' => 1, // Teacher with id = 1
            'starttime' => '09:00:00',
            'endtime' => '10:30:00',
            'credit_hours' => 3,
        ]);

        Classes::create([
            'id' => 2,
            'teacherid' => 1, // Teacher with id = 1
            'starttime' => '11:00:00',
            'endtime' => '12:30:00',
            'credit_hours' => 3,
        ]);
    }
}
