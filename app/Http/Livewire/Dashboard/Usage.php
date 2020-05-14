<?php

namespace App\Http\Livewire\Dashboard;

use App\User;
use Livewire\Component;

class Usage extends Component
{
    public int $apiCall = 0;
    public int $apiLimit = 0;
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->apiCall = $user->countCalls() ?? 0;
        $this->apiLimit = 5000;
    }

    public function render()
    {
        return view('livewire.dashboard.usage');
    }
}
