<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DivisiFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_divisi' => fake()->randomElement([
                'Humas',
                'Pendidikan dan Pengkaderan',
                'Divisi Iptek dan PKM',
                'Divisi Pendanaan',
                'Divisi Kerohanian',
                'Divisi Kesekretariatan'
            ])
        ];
    }
}