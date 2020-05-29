<?php

namespace App\Http\Livewire\Dashboard;

use App\User;
use Livewire\Component;

class Usage extends Component
{
    public int $apiCall = 0;
    public int $apiLimit = 0;
    /** @var User */
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
        if($this->user->currentTeam) {
//            $this->apiCall = $this->user->currentTeam->countCalls() ?? 0; TODO: count number of team calls have been made
            $this->user->currentTeam->call_limit;
        } else {
            $this->apiCall = $this->user->countCalls() ?? 0;
            $this->apiLimit = $this->user->call_limit;
        }
    }

    public function render()
    {
        return view('livewire.dashboard.usage');
    }
}
