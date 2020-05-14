<?php

namespace App\Http\Livewire\Dashboard;

use App\User;
use Livewire\Component;

class Apikey extends Component
{
    public string $tokenName = '';
    public $user;

    public function generateToken() // TODO: finish test
    {
        $this->user->createToken($this->tokenName)->accessToken->token;
    }

    public function removeToken(int $id) // TODO: finish test
    {
        $this->user->tokens()->where('id', $id)->delete();
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.dashboard.apikey', [
            'tokens' => $this->user->apiKeys()
        ]);
    }
}
