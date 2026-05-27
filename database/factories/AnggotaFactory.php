<?php

namespace Database\Factories;

use App\Models\Divisi;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nim' => fake()->numerify('22####'),
            'alamat' => fake()->address(),
            'angkatan' => fake()->year(),
            'no_hp' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),

            'divisi_id' => Divisi::inRandomOrder()->first()->id,
        ];
    }
}