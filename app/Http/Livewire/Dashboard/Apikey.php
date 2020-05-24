<?php

namespace App\Http\Livewire\Dashboard;

use App\Team;
use App\User;
use Livewire\Component;

class Apikey extends Component
{
    public string $tokenName = '';
    public $user;

    public function generateToken() // TODO: finish test
    {
        $this->user->createToken($this->tokenName)->accessToken->token;
        activity()->log('Token generated');
    }

    public function removeToken(int $id) // TODO: finish test
    {
        $this->user->tokens()->where('id', $id)->delete();
        activity()->log('Token deleted');
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        $ownerId = optional($this->user->currentTeam)->owner_id;
        $data = [
            'tokens' => $this->user->apiKeys(),
            'ownerTokens' => optional(User::find($ownerId))->apiKeys() ?? []
        ];

        $teamUsers = optional($this->user->currentTeam)->users;
        $membersTokens = ['membersTokens' => optional($teamUsers)->maps(fn($user) => $user->apiKeys()) ?? []];

        return view('livewire.dashboard.apikey', array_merge($data, $membersTokens));
    }
}
