<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rewards extends Model
{    
    /**
     * Returns the mission related to the reward
     *
     * @return HasOne
     */
    public function mission(): HasOne{
        return $this->hasOne(Mission::class);
    }
}
