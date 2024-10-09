<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mission extends Model
{        
    /**
     * Returns mission's banner image
     *
     * @return HasOne
     */
    public function image(): HasOne{
        return $this->hasOne(Image::class);
    }
    
    /**
     * Returns all subscriptions of that mission
     *
     * @return HasMany
     */
    public function subscriptions():HasMany {
        return $this->hasMany(Subscription::class);
    }
    
    /**
     * Returns the reward of the mission
     *
     * @return hasOne
     */
    public function reward():hasOne{
        return $this->hasOne(Mission::class);
    }
}
