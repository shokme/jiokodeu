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
        $this->apiCall = $this->user->countCalls() ?? 0;
        $this->apiLimit = 5000;
    }

    public function render()
    {
        return view('livewire.dashboard.usage');
    }
}
