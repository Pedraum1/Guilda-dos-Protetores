<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sheet extends Model
{    
    /**
     * Returns the sheet of the character
     *
     * @return HasOne
     */
    public function character(): HasOne {
        return $this->hasOne(Character::class);
    }
}
