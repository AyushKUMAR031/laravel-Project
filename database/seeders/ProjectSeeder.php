<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Web Design',
                'description' => 'Professional web design services to create stunning, responsive, and user-friendly websites.',
                'image' => 'img/project-1.jpg',
            ],
            [
                'title' => 'Cyber Security',
                'description' => 'Comprehensive cybersecurity solutions to protect your business from digital threats.',
                'image' => 'img/project-2.jpg',
            ],
            [
                'title' => 'Mobile Info',
                'description' => 'Up-to-date information on upcoming mobile technologies and trends.',
                'image' => 'img/project-3.jpg',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
