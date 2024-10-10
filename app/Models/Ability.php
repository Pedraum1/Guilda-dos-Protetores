<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ability extends Model
{    
    /**
     * Return all characters who knows this ability
     *
     * @return BelongsToMany
     */
    public function character(): BelongsToMany {
        return $this->belongsToMany(Character::class,'knowledges','character_id','');
    }
}
