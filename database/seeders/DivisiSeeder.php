<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::create([
            'nama_divisi' => 'Divisi Pendidikan dan Pengkaderan',
            'ketua_divisi' => 'Anjar',
            'deskripsi' => 'Divisi yang bertanggung jawab pada bidang pendidikan dan pengkaderan anggota baru.'
        ]);

        Divisi::create([
            'nama_divisi' => 'Divisi Humas',
            'ketua_divisi' => 'Aldi Fikran',
            'deskripsi' => 'Divisi yang bertanggung jawab untuk membangun hubungan baik dengan pihak eksternal.'
        ]);

        Divisi::create([
            'nama_divisi' => 'Divisi Iptek dan PKM',
            'ketua_divisi' => 'Rizky',
            'deskripsi' => 'Divisi yang bertanggung jawab pada bidang IPTEK dan PKM.'
        ]);

        Divisi::create([
            'nama_divisi' => 'Divisi Pendanaan',
            'ketua_divisi' => 'Reski Aulia Rahmadani',
            'deskripsi' => 'Divisi yang bertanggung jawab mengelola keuangan organisasi.'
        ]);

        Divisi::create([
            'nama_divisi' => 'Divisi Kerohanian',
            'ketua_divisi' => 'Alex',
            'deskripsi' => 'Divisi yang bertanggung jawab pada kegiatan sosial dan keagamaan.'
        ]);

        Divisi::create([
            'nama_divisi' => 'Divisi Kesekretariatan',
            'ketua_divisi' => 'Abd. Hakim Darmawan',
            'deskripsi' => 'Divisi yang bertanggung jawab pada administrasi organisasi.'
        ]);
    }
}