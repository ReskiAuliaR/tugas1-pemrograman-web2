<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'alamat',
        'angkatan',
        'no_hp',
        'divisi_id'
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}