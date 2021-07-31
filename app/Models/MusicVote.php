<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MusicVote extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'music_id',
        'user_id',
    ];
    
    /**
     * Get the music that owns the MovieVote
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function music(): BelongsTo
    {
        return $this->belongsTo(Music::class);
    }

    /**
     * Get the user that owns the MovieVote
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
