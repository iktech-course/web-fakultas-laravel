<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
    use HasFactory;

    protected $table = "dosen";

    protected $fillable = [
        'nama',
        'nidn',
        'foto',
        'jabatan_fungsional',
        'jabatan_struktural',
        'program_studi',
        'no_wa',
        'deskripsi'
    ];

    public function MKPengampu(): HasMany
    {
        return $this->hasMany(MKPengampu::class);
    }

    public function Publikasi(): HasMany
    {
        return $this->hasMany(Publikasi::class);
    }

}
