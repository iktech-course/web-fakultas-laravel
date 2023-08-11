<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berita extends Model
{
    use HasFactory;

    protected $table = "berita";

    protected $fillable = [
        'id_user',
        'judul',
        'foto',
        'isi'
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
