<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Balance extends Component
{
    public string $nextCharge = "0.00";
    public string $lastCharge = "0.00";

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.dashboard.balance');
    }
}
