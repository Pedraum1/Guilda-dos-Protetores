<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Character extends Model
{
        
    /**
     * Returns the character's profile image object
     *
     * @return HasOne
     */
    public function image(): HasOne {
        return $this->hasOne(Image::class);
    }

}
