<?php

namespace App\Http\Livewire\Teams;

use App\Team;
use Livewire\Component;

class Home extends Component
{
    public ?int $ownerId = null;
    public string $name = '';

    public function store()
    {
        $team = Team::create([
            'name' => $this->name,
            'owner_id' => $this->ownerId
        ]);

        auth()->user()->update(['current_team_id' => $team->id]);
        auth()->user()->teams()->attach($team->id);
    }

    public function render()
    {
        return view('livewire.teams.home');
    }
}
