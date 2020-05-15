<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasTeams
{
    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class)->withTimestamps();
    }

    public function currentTeam(): HasOne
    {
        return $this->hasOne(Team::class, 'id', 'current_team_id');
    }

    public function isOwner()
    {
        return ($this->teams()->where('owner_id', $this->getKey())->first()) ? true : false;
    }

    public function isOwnerOfTeam($team)
    {
        $team_id = $this->retrieveTeamId($team);
        return ($this->teams()->where('owner_id', $this->getKey())->where('team_id', $team_id)->first()) ? true : false;
    }

    public function retrieveTeamId($team)
    {
        if(is_object($team)) {
            $team = $team->getKey();
        }
        if(is_array($team) && isset($team['id'])) {
            $team = $team['id'];
        }

        return $team;
    }
}