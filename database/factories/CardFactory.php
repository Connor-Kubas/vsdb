<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

$card = Card::factory()->make([
    'name' => 'arnold',
]);

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    // protected $card = Card::factory()->make();
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'subname' => fake()->name(),
            'type' => fake()->randomElement(['character', 'plot_twist', 'location', 'equipment']),
            'rank' => fake()->numberBetween(1, 11),
            'affiliation' => fake()->word(),
            'attack' => fake()->numberBetween(1, 20),
            'defense' => fake()->numberBetween(1, 20),
            'flight' => fake()->boolean(),
            'range' => fake()->boolean(),
            'power' => fake()->sentence(),
            'publisher' => fake()->randomElement(['Marvel', "DC"]),
            'artist' =>fake()->name(),
            'card_number' => (rand(100, 999) . '-' . rand(100, 999)),
            'flavor_text' => fake()->sentence(),
            'keywords' => fake()->word(),
        ];
    }
}
