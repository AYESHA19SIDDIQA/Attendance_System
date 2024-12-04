<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Correctly import the User model

class UserSeeder extends Seeder
{
    public function run()
    {
        // Seeding teacher data
        $teacher = User::create([
            'fullname' => 'John Doe',
            'email' => 'john.doe@example.com',
            'class' => 'Math 101',
            'role' => 'teacher',
        ]);

        // Seeding student data
        User::create([
            'fullname' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'class' => 'Math 101',
            'role' => 'student',
        ]);

        User::create([
            'fullname' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'class' => 'Science 101',
            'role' => 'student',
        ]);
    }
}
