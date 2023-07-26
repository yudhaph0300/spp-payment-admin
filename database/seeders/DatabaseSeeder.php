<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'M Yudha Pamungkas',
            'email' => 'yudhapamungkas0300@gmail.com',
            'username' => 'yudhapamungkas',
            'password' => bcrypt('12345')
        ]);

        Student::factory(15)->create();
    }
}
