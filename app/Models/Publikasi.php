<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Publikasi extends Model
{
    use HasFactory;

    protected $table = 'publikasi';

    protected $fillable = [
        'id_dosen',
        'judul',
        'publisher',
        'tahun',
        'link'
    ];

    public function Dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }

}
