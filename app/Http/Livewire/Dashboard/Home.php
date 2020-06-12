<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        $tokens = auth()->user()->currentTeam->membersTokens(auth()->user()->id);
        return view('livewire.dashboard.home', ['tokens' => $tokens]);
    }
}
