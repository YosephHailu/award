<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'role',
        'status',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function hasVoted($movie)
    {
        return $this->movieVote->movie_id ?? 0 == $movie->id;
    }
    
    
    public function hasVotedMusic($music)
    {
        return $this->musicVote->music_id ?? 0 == $music->id;
    }

    
    public function hasRole($role)
    {
        return $this->role == $role;
    }

    public function hasAnyRole($expression)
    {
        foreach (explode('|', $expression) as $value) {
            if ($this->hasRole($value)) {
                return true;
            }
        }
        return false;
    }


    /**
     * Get the movieVote associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function movieVote(): HasOne
    {
        return $this->hasOne(MovieVote::class);
    }
    
    /**
     * Get the movieVote associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function musicVote(): HasOne
    {
        return $this->hasOne(MusicVote::class);
    }
}
