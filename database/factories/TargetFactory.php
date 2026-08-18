<?php

namespace Database\Factories;

use App\Models\Target;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Target>
 */
class TargetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'skill' => fake()->numberBetween(0, 100),
            'bio' => fake()->realText(400),
            'branch_id' => Branch::inRandomOrder('id')->first()->id,
        ];
    }
}
