<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Category::create([
            'id' => 1,
            'name' => 'Data Science'
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Network Security'
        ]);

        Category::create([
            'id' => 3,
            'name' => 'Interactive Multimedia'
        ]);

        Category::create([
            'id' => 4,
            'name' => 'Software Engineering'
        ]);

        Course::factory()->create([
            'name' => 'Pattern Software Design'
        ]);

        Course::factory()->create([
            'name' => 'Machine Learning'
        ]);

        Course::factory()->create([
            'name' => 'Human Computer Interaction'
        ]);

        Course::factory()->create([
            'name' => 'Agile Software Development'
        ]);
            
    }
}
