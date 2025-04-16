<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perpustakaan>
 */
class PerpustakaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namaPerpus' => $this->faker->company(),
            'alamatPerpus' => $this->faker->address(),
            'noTelpPerpus' => $this->faker->phoneNumber(),
            'emailPerpus' => $this->faker->unique()->safeEmail(),
        ];
    }
}
