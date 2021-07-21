<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
