<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = "mata_kuliah";

    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'semester',
        'sks',
        'program_studi'
    ];

    public function MKPengampu(): HasMany
    {
        return $this->hasMany(MKPengampu::class);
    }
}
