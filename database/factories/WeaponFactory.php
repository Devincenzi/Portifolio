<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weapon>
 */
class WeaponFactory extends Factory
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
            'category' => fake()->randomElement(['simples', 'comum', 'exóticas']),
            'duasMaos' => fake()->boolean(),
            'usaMunicao' => fake()->boolean(),
            'municao' => fake()->boolean(),
            'amount' => fake()->boolean(),
            'price' => fake()->numberBetween(10, 200),
            'diceAmount' => fake()->numberBetween(1, 2),
            'diceType' => fake()->randomElement(['4', '6', '8', '10', '12']),
            'damageType' => fake()->randomElements(['cortante', 'perfurante', 'concussão']),
            'criticRange' => fake()->numberBetween(15, 20),
            'criticMultiplier' => fake()->numberBetween(1, 4),
            'weight' => fake()->numberBetween(250, 6000),
        ];
    }
}
