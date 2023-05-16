<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\subject;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Department::create([
        //     'name'=>'Information System',
        //     'code'=>'IS'
        // ]);

        // Department::create([
        //     'name'=>'Information Technology',
        //     'code'=>'IT'
        // ]);


        // Department::create([
        //     'name'=>'Computer Science',
        //     'code'=>'CS'
        // ]);

        subject::factory(100)->create();
    }
}
