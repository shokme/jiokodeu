<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public string $tokenName = '';

    public function generateToken()
    {
        Auth::user()->createToken($this->tokenName);
    }

    public function removeToken(int $id)
    {
        Auth::user()->tokens()->where('id', $id)->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.home', [
            'tokens' => Auth::user()->apiKeys()
        ]);
    }
}
