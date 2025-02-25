<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Difficulty;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToDos>
 */
class ToDosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(3),
            'is_completed' => fake()->boolean(),
            'due_date' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'difficulty_id' => Difficulty::inRandomOrder()->first()->value,
        ];
    }
}
