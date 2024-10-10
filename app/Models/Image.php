<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
        
    /**
     * Returns image related user
     *
     * @return HasOne
     */
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
        
    /**
     * Returns image related character
     *
     * @return HasOne
     */
    public function character(): BelongsTo{
        return $this->belongsTo(Character::class);
    }
    
    /**
     * Returns image related mission
     *
     * @return HasOne
     */
    public function mission(): BelongsTo {
        return $this->belongsTo(Mission::class);
    }
}
