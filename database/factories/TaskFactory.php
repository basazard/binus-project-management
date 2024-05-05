<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => rand(1, 10),
            'user_id' => rand(1, 11),
            'name' => fake()->words(3, true),
            'description' => fake()->sentence(3, true),
            'start_date' => fake()->dateTimeBetween('-1 years', '-3 months'),
            'end_date' => fake()->dateTimeBetween('-1 months', '-1 week'),
            'status' => fake()->randomElement(['Not Started', 'In Progress', 'Completed']),
        ];
    }
}
