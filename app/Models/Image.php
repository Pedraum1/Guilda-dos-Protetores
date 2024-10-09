<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
        
    /**
     * Returns image related user
     *
     * @return HasOne
     */
    public function user(): HasOne{
        return $this->hasOne(User::class);
    }
        
    /**
     * Returns image related character
     *
     * @return HasOne
     */
    public function character(): HasOne{
        return $this->hasOne(Character::class);
    }
    
    /**
     * Returns image related mission
     *
     * @return HasOne
     */
    public function mission(): HasOne {
        return $this->hasOne(Mission::class);
    }
}
