<?php

namespace App\Http\Livewire\Dashboard;

use App\User;
use Livewire\Component;

class Usage extends Component
{
    public array $apiDailyUse = [];
    public array $apiTeamDailyUse = [];
    public int $apiLimit = 0;

    public function mount($tokens)
    {
        /** @var User $user */
        $user = auth()->user();
        $this->apiLimit = $user->daily_limit ?? 0;
        $this->apiDailyUse = $user->apiDailyUse();
        if(!is_null($user->currentTeam)) {
            $this->apiTeamDailyUse = $user->currentTeam->apiDailyUse($tokens);
        }
    }

    public function render()
    {
        return view('livewire.dashboard.usage');
    }
}
