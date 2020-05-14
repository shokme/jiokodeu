<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasTeams {
    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class)->withTimestamps();
    }

    public function currentTeam(): HasOne
    {
        return $this->hasOne(Team::class, 'id', 'current_team_id');
    }
}