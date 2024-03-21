<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class percakapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id_1',
        'user_id_2',
    ];
    public function user_1(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_1');
    }
    public function user_2(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_2');
    }
}
