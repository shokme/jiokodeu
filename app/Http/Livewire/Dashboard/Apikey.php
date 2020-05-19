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
        $ownerId = $this->user->currentTeam->owner_id;
        $teamUsers = $this->user->currentTeam->users;
        $membersTokens = $teamUsers->maps(fn($user) => $user->apiKeys());

        return view('livewire.dashboard.apikey', [
            'tokens' => $this->user->apiKeys(),
            'ownerTokens' => User::find($ownerId)->apiKeys(),
            'membersTokens' => $membersTokens
        ]);
    }
}
