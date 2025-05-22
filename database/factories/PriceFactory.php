<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'durasi' => $this->faker->randomElement([
                '12 Jam',
                '24 Jam',
                '36 Jam',
                '48 Jam',
                '60 Jam',
                '72 Jam'
            ]),
            'harga' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
