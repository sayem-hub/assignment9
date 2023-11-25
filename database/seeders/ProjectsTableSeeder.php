<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Project 1',
                'description' => 'A brief description of Project 1',
                'link' => 'https://example.com/project1',
            ],
            [
                'title' => 'Project 2',
                'description' => 'A brief description of Project 2',
                'link' => 'https://example.com/project2',
            ],

            [
                'title' => 'Project 3',
                'description' => 'A brief description of Project 3',
                'link' => 'https://example.com/project3',
            ],

            [
                'title' => 'Project 4',
                'description' => 'A brief description of Project 4',
                'link' => 'https://example.com/project4',
            ],

            [
                'title' => 'Project 5',
                'description' => 'A brief description of Project 5',
                'link' => 'https://example.com/project5',
            ],

        ]);
    }
}
