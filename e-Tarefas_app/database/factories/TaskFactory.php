<?php

namespace Database\Factories;

use App\Helpers\TaskStatusGenerator;
use App\Models\User;
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
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(200),
            'due_date' => $this->faker->dateTimeBetween('now', now()->addDays(30)->format('Y-m-d')),
            'status' => TaskStatusGenerator::getRandomStatus()
        ];
    }
}
