<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanAkademik extends Model
{
    use HasFactory;

    protected $table = "kegiatan_akademik";

    protected $fillable = [
        'nama_kegiatan',
        'deskripsi',
        'tanggal',
        'waktu',
        'lokasi',
        'pelaksana'
    ];
}
