<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'perpustakaan_id' => null,
            'judulBuku' => $this->faker->sentence(3),
            'pengarangBuku' => $this->faker->name(),
            'penerbitBuku' => $this->faker->company(),
            'tahunTerbitBuku' => $this->faker->year(),
        ];
    }
}
