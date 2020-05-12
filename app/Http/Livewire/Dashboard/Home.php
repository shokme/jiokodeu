<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public string $tokenName = '';
    public int $apiCall = 0;
    public int $apiLimit = 0;

    public function generateToken() // TODO: finish test
    {
        Auth::user()->createToken($this->tokenName)->accessToken->token;
    }

    public function removeToken(int $id) // TODO: finish test
    {
        Auth::user()->tokens()->where('id', $id)->delete();
    }

    public function mount()
    {
        $this->apiCall = Auth::user()->countCalls() ?? 0;
        $this->apiLimit = 5000;
    }

    public function render()
    {
        return view('livewire.dashboard.home', [
            'tokens' => Auth::user()->apiKeys()
        ]);
    }
}
