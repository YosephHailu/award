<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'singer_name',
        'producer',
        'genre',
        'songwriter',
        'released_year',
        'image',
        'description',
    ];
    
    /**
     * Get all of the movieVote for the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function musicVote(): HasMany
    {
        return $this->hasMany(MusicVote::class);
    }
}
