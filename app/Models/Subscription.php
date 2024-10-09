<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subscription extends Model
{    
    /**
     * Returns which mission the subscription is for
     *
     * @return BelongsTo
     */
    public function mission(): BelongsTo{
        return $this->belongsTo(Mission::class);
    }
    
    /**
     * Returns which character made the subscription to certain mission
     *
     * @return HasOne
     */
    public function character():HasOne{
        return $this->hasOne(Character::class);
    }
}
