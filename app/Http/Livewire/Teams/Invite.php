<?php

namespace App\Http\Livewire\Teams;

use App\Mail\InviteToTeam;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Invite extends Component
{
    public string $email = '';

    public function invite()
    {
        $user = auth()->user();
        Mail::to($this->email)->queue(new InviteToTeam($this->email, $user->currentTeam));
    }

    public function render()
    {
        return view('livewire.teams.invite');
    }
}
