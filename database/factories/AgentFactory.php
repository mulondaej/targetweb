<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Branch;

/**
 * @extends Factory<Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //create random stuff
            'name' => fake()->name(),
            'skill' => fake()->numberBetween(0, 100),
            'bio' => fake()->realText(400),
            'branch_id' => Branch::inRandomOrder('id')->first()->id, // create random id numbers for this
        ];
    }
}
