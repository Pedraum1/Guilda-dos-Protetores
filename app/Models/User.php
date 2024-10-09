<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
        
    /**
     * Returns the User's profile image object
     *
     * @return HasOne
     */
    public function image(): HasOne {
        return $this->hasOne(Image::class);
    }
    
    /**
     * Returns the User's character object
     *
     * @return HasMany
     */
    public function characters(): HasMany {
        return $this->hasMany(Character::class);
    }
}
