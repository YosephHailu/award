<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'director',
        'producer',
        'genre',
        'production_company',
        'released_date',
        'budget',
        'image',
        'description',
    ];

    /**
     * Get all of the movieVote for the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movieVote(): HasMany
    {
        return $this->hasMany(MovieVote::class);
    }

}
