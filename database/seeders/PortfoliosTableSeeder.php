<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table("portfolios")->insert([
            [
                'title' => 'Project 1',
                'description' => 'A brief description of Project 1',
                'link' => 'https://example.com/project1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project 2',
                'description' => 'A brief description of Project 2',
                'link' => 'https://example.com/project2',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 3',
                'description' => 'A brief description of Project 3',
                'link' => 'https://example.com/project3',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 4',
                'description' => 'A brief description of Project 4',
                'link' => 'https://example.com/project4',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Project 5',
                'description' => 'A brief description of Project 5',
                'link' => 'https://example.com/project5',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}
