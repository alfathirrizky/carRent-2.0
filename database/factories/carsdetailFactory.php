<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class carsdetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_mobil'=> fake()->sentence(),
            'durasi'=> fake()->sentence(),
            'harga'=> fake()->sentence(),
            'bahan_bakar'=> fake()->sentence(),
            'tipe'=> fake()->sentence(),
            'seater'=> fake()->sentence(),
            'kategori'=> fake()->sentence(),
        ];
    }
}
