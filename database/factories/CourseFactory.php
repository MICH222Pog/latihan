<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'default',
            'content' => $this->faker->paragraph(mt_rand(1,3)),
            'writer_id' => mt_rand(1,10),
            'category_id' => mt_rand(1,4)
        ];
    }
}
