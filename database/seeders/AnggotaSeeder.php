<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anggota::create([
            'nama' => 'Fadillah',
            'nim' => '23101101',
            'alamat' => 'Batam',
            'angkatan' => '2023',
            'no_hp' => '08123456789',
            'divisi_id' => 1
        ]);

        Anggota::create([
            'nama' => 'Aldi',
            'nim' => '23101102',
            'alamat' => 'Makassar',
            'angkatan' => '2023',
            'no_hp' => '08123456780',
            'divisi_id' => 2
        ]);

        Anggota::create([
            'nama' => 'Rizky',
            'nim' => '23101103',
            'alamat' => 'Gowa',
            'angkatan' => '2024',
            'no_hp' => '08123456781',
            'divisi_id' => 3
        ]);
    }
}