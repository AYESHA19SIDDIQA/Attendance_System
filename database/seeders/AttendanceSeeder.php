<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;

class AttendanceSeeder extends Seeder
{
    public function run()
    {
        Attendance::create([
            'classid' => 1,
            'studentid' => 2, // Student Jane Smith
            'isPresent' => 1,
            'comments' => 'Present',
        ]);

        Attendance::create([
            'classid' => 1,
            'studentid' => 3, // Student Bob Johnson
            'isPresent' => 0,
            'comments' => 'Absent',
        ]);
    }
}
