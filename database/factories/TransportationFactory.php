<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transportation>
 */
class TransportationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_transportation' => $this->faker->word,
            'picture_transportation' => $this->faker->imageUrl,
            'price' => $this->faker->randomNumber(2),
            'details_description' => $this->faker->sentence,
        ];
    }
}
