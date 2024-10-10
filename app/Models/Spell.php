<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Spell extends Model
{    
    /**
     * Return all characters who knows the spell
     *
     * @return BelongsToMany
     */
    public function characters(): BelongsToMany {
        return $this->belongsToMany(Character::class,'knowledges','character_id','spell_id');
    }
}
