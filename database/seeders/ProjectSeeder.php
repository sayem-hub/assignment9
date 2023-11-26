<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Project 1',
                'description' => 'A simple converter program',
                'link' => 'https://github.com/sayem-hub/assignment1.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project 2',
                'description' => 'Finding even number with different loops',
                'link' => 'https://github.com/sayem-hub/assignment2.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 3',
                'description' => 'Working with various string function',
                'link' => 'https://github.com/sayem-hub/assignment3.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 4',
                'description' => 'A project with __construct method',
                'link' => 'https://github.com/sayem-hub/assignment4.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 5',
                'description' => 'Role management project with raw PHP and file operation',
                'link' => 'https://github.com/sayem-hub/assignment5.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 6',
                'description' => 'POS Database Query',
                'link' => 'https://github.com/sayem-hub/sqlquery.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 7',
                'description' => 'A Basic Laravel Application to return Hello World',
                'link' => 'https://github.com/sayem-hub/module-7.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'title' => 'Project 8',
                'description' => 'Another basic laravel program for cookie management',
                'link' => 'https://github.com/sayem-hub/assignment8.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 9',
                'description' => 'A portfolio project of me',
                'link' => 'https://github.com/sayem-hub/assignment9.git',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
