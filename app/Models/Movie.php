<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}