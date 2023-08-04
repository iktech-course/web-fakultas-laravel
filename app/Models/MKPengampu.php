<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MKPengampu extends Model
{
    use HasFactory;

    protected $table = "mk_pengampu";

    protected $fillable = [
        'id_dosen',
        'id_mk'
    ];

    public function Dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }

    public function MataKuliah(): BelongsTo
    {
        return $this->belongsTo(MataKuliah::class);
    }
}
