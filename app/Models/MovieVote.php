<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieVote extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'movie_id',
        'user_id',
    ];
}
