<?php

namespace App\Http\Livewire\Teams;

use App\Mail\InviteToTeam;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Invite extends Component
{
    public string $email = '';

    public function invite()
    {
        Gate::authorize('team-owner');

        $user = auth()->user();
        Mail::to($this->email)->queue(new InviteToTeam($this->email, $user->currentTeam));
        activity()->log($this->email.' has been invited to the team');
    }

    public function render()
    {
        return view('livewire.teams.invite');
    }
}
