<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'email',
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