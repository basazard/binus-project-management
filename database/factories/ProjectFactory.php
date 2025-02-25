<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 11),
            'name' => fake()->name(),
            'description' => fake()->sentences(3, true),
            'start_date' => fake()->dateTimeBetween('-1 years', '-3 months'),
            'end_date' => fake()->dateTimeBetween('-1 months', '-1 week'),
        ];
    }
}
