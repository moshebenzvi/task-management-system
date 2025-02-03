<?php

namespace Database\Factories;

use App\Models\Project;
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
            'project_id' => Project::inRandomOrder('id')->first()->id,
            'title' => fake()->jobTitle(),
            'description' => fake()->realText(),
            'status' => fake()->randomElement(['To Do', 'Progress', 'Done']),
            'priority' => fake()->randomElement(['Low', 'Medium', 'High']),
            'due_date' => fake()->dateTimeBetween('now', '+10 days'),
            'finish_date' => fake()->dateTimeBetween('now', '+14 days'),
        ];
    }
}
