<?php

namespace App\Http\Livewire\Dashboard;

use App\User;
use Livewire\Component;

class Apikey extends Component
{
    public string $teamName = '';
    public $user;

    public function generateToken()
    {
        auth()->user()->createToken(auth()->user()->name)->accessToken->token;
        activity()->log('Token generated');
    }

    public function removeToken(int $id)
    {
        auth()->user()->tokens()->where('id', $id)->delete();
        activity()->log('Token deleted');
    }

    public function render()
    {
        $this->user = $user = auth()->user();
        if($user->currentTeam) {
            $this->teamName = $user->currentTeam->name;
        }
        $ownerId = (int) optional($user->currentTeam)->owner_id;
        $data['tokens'] = $user->apiKeys();
        $data['ownerTokens'] = [];
        if($ownerId && $ownerId !== $user->id) {
            $data['ownerTokens'] = User::with('tokens')->find($ownerId)->apiKeys();
        }
        $data['membersTokens'] = optional($user->currentTeam)->apiKeys($user->id);

        return view('livewire.dashboard.apikey', $data);
    }
}
