<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Character extends Model
{
        
    /**
     * Returns the characters profile image object
     *
     * @return HasOne
     */
    public function image(): HasOne {
        return $this->hasOne(Image::class);
    }
    
    /**
     * Returns the characters user
     *
     * @return HasOne
     */
    public function user(): HasOne {
        return $this->hasOne(User::class);
    }
    
    /**
     * Returns the characters subscriptions into missions
     *knowledges
     * @return HasMany
     */
    public function subscriptions(): HasMany {
        return $this->hasMany(Subscription::class);
    }
    
    /**
     * Return characters sheet
     *
     * @return HasOne
     */
    public function sheet(): HasOne {
        return $this->hasOne(Sheet::class);
    }
    
    /**
     * Return all characters spells
     *
     * @return BelongsToMany
     */
    public function spells(): BelongsToMany{
        return $this->belongsToMany(Spell::class,'knowledges','spell_id','character_id');
    }
    
    /**
     * Return all characters abilities
     *
     * @return BelongsToMany
     */
    public function abilities(): BelongsToMany {
        return $this->belongsToMany(Ability::class,'knowledges','ability_id','character_id');
    }

}
