<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
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
            'dv' => fake()->randomElement(['4', '6', '8', '10', '12']),
            'caster' => fake()->randomElement([0.25, 0.5, 0.75, 1]),
            'bba' => fake()->randomElement([0.5, 0.75, 1]),
            'fortitude' => fake()->randomElement([0.3, 0.5]),
            'reflexos' => fake()->randomElement([0.3, 0.5]),
            'vontade' => fake()->randomElement([0.3, 0.5]),
            'skillPoints' => fake()->randomNumber(2),
            'strIsPrimary' => fake()->boolean(),
            'dexIsPrimary' => fake()->boolean(),
            'conIsPrimary' => fake()->boolean(),
            'intIsPrimary' => fake()->boolean(),
            'wisIsPrimary' => fake()->boolean(),
            'chaIsPrimary' => fake()->boolean(),
        ];
    }
}
