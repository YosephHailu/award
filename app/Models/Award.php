<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Award extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'description', 'award_type_id', 'allowed_no_of_votes'
    ];


    /**
     * Get the awardType that owns the Award
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function awardType(): BelongsTo
    {
        return $this->belongsTo(AwardType::class);
    }
}
