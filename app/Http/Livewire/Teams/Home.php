<?php

namespace App\Http\Livewire\Teams;

use App\Team;
use App\User;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Home extends Component
{
    public string $teamName = '';
    public string $ownerEmail = '';

    public function switch()
    {
        auth()->user()->currentTeam->switchOwner($this->ownerEmail);
        activity()->log('Owner changed, from '.auth()->user()->email.' to '.$this->ownerEmail);
    }

    public function store()
    {
        $this->validate([
            'teamName' => ['required', 'min:3', 'max:24']
        ]);

        $user = auth()->user();

        $team = Team::create([
            'name' => $this->teamName,
            'owner_id' => $user->id
        ]);

        $user->update(['current_team_id' => $team->id]);
        $user->teams()->attach($team->id);
    }

    public function deleteMember($id)
    {
        Gate::authorize('team-owner');

        $user = User::find($id);
        $user->teams()->detach(auth()->user()->currentTeam->id);
        activity()->log($user->email.' hsa been remove from the team');
    }

    public function render()
    {
        $members = [];
        if(!is_null(auth()->user()->currentTeam)) {
            $members = auth()->user()->currentTeam->users()->select('id', 'name', 'email')->get();
        }

        return view('livewire.teams.home', ['members' => $members]);
    }
}
