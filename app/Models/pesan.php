<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pesan extends Model
{
    use HasFactory;
    protected $fillable = [
        'percakapan_id',
        'user_id_pengirim',
        'user_id_penerima',
        'pesan',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function percakapan(): BelongsTo
    {
        return $this->belongsTo(percakapan::class);
    }
}
