<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Home extends Component
{
    public string $tokenName = '';
    public int $apiCall = 0;
    public int $apiLimit = 0;

    public function generateToken() // TODO: finish test
    {
        $token = Auth::user()->createToken($this->tokenName)->accessToken->token;
        Cache::add($token, 0);
    }

    public function removeToken(int $id) // TODO: finish test
    {
        Auth::user()->tokens()->where('id', $id)->delete();
    }

    public function increase() // TODO: remove
    {
        Auth::user()->tokens->each(function ($token) {
            Cache::increment($token->token);
        });
    }

    public function mount()
    {
        // TODO: store in database number of call a days
        $this->apiCall = Auth::user()->tokens->map(function ($token) {
            return Cache::get($token->token);
        })->sum();
        $this->apiLimit = 5000;
    }
    public function render()
    {
        return view('livewire.dashboard.home', [
            'tokens' => Auth::user()->apiKeys()
        ]);
    }
}
