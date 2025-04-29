<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rejestr>
 */
class RejestrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imie_i_nazwisko' => fake()->name(),
            'wejscie' => now(),
            'wyjscie' => now()->addHours(fake()->numberBetween(2, 8)),
        ];
    }
}
