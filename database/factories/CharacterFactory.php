<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
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
            'player' => fake()->numberBetween(1, 20),
            'xp' => fake()->randomNumber(4),
            'nep' => fake()->randomDigitNotZero(),
            'classes' => fake()->randomElements(['mago: 1;', 'gue: 1;', 'fei: 1;', 'dru: 1;', 'ran: 1;', 'pal: 1;'], 2),
            'attributesPointsAvaliable' => fake()->randomDigitNotNull(),
            'skillPointsAvaliable' => fake()->randomDigitNotNull(),
            'featsAvaliable' => fake()->randomDigitNotNull(),
            'pdm' => fake()->boolean(),
            'visibleTo' => fake()->randomDigitNotZero(),
            'controllableBy' => fake()->randomDigitNotZero(),
            'strBase' => fake()->numberBetween(8, 18),
            'dexBase' => fake()->numberBetween(8, 18),
            'conBase' => fake()->numberBetween(8, 18),
            'intBase' => fake()->numberBetween(8, 18),
            'wisBase' => fake()->numberBetween(8, 18),
            'chaBase' => fake()->numberBetween(8, 18),
            'armorClass' => fake()->numberBetween(12, 30),
            'initiative' => fake()->numberBetween(2, 6),
            'maxHp' => fake()->numberBetween(6, 40),
            'currentHp' => fake()->numberBetween(0, 40),
            'temporaryHp' => fake()->numberBetween(2, 20),
            'contusiveDamage' => fake()->numberBetween(0, 80),
            'casterLevel' => fake()->numberBetween(1, 20),
            
            'strLevelBonus' => fake()->numberBetween(1, 4),
            'dexLevelBonus' => fake()->numberBetween(1, 4),
            'conLevelBonus' => fake()->numberBetween(1, 4),
            'intLevelBonus' => fake()->numberBetween(1, 4),
            'wisLevelBonus' => fake()->numberBetween(1, 4),
            'chaLevelBonus' => fake()->numberBetween(1, 4),

            'strRaceBonus' => fake()->numberBetween(1, 2),
            'dexRaceBonus' => fake()->numberBetween(1, 2),
            'conRaceBonus' => fake()->numberBetween(1, 2),
            'intRaceBonus' => fake()->numberBetween(1, 2),
            'wisRaceBonus' => fake()->numberBetween(1, 2),
            'chaRaceBonus' => fake()->numberBetween(1, 2),

            'strModelBonus' => fake()->numberBetween(1, 8),
            'dexModelBonus' => fake()->numberBetween(1, 8),
            'conModelBonus' => fake()->numberBetween(1, 8),
            'intModelBonus' => fake()->numberBetween(1, 8),
            'wisModelBonus' => fake()->numberBetween(1, 8),
            'chaModelBonus' => fake()->numberBetween(1, 8),

            'strItemBonus' => fake()->numberBetween(1, 4),
            'dexItemBonus' => fake()->numberBetween(1, 4),
            'conItemBonus' => fake()->numberBetween(1, 4),
            'intItemBonus' => fake()->numberBetween(1, 4),
            'wisItemBonus' => fake()->numberBetween(1, 4),
            'chaItemBonus' => fake()->numberBetween(1, 4),
            'movement' => fake()->numberBetween(3, 18),
            'pc' => fake()->randomNumber(),
            'pp' => fake()->randomNumber(),
            'po' => fake()->randomNumber(),
            'pl' => fake()->randomNumber(),
            'totalMoney' => fake()->randomNumber(),
            'totalWeight' => fake()->randomNumber(),
        ];
    }
}
