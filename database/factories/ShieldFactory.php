<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shield>
 */
class ShieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'description' => fake()->text(),
            'armorClass' => fake()->randomDigitNotZero(),
            'weight' => fake()->numberBetween(500, 5000),
            'price' => fake()->numberBetween(50, 1000),
        ];
    }
}
