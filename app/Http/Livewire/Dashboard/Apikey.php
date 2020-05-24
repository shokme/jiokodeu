<?php

namespace App\Http\Livewire\Dashboard;

use App\Team;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class Apikey extends Component
{
    public function generateToken() // TODO: finish test
    {
        auth()->user()->createToken(auth()->user()->name)->accessToken->token;
        activity()->log('Token generated');
    }

    public function removeToken(int $id) // TODO: finish test
    {
        auth()->user()->tokens()->where('id', $id)->delete();
        activity()->log('Token deleted');
    }

    public function render()
    {
        $user = auth()->user();
        $ownerId = (int) optional($user->currentTeam)->owner_id;
        $data['tokens'] = $user->apiKeys();
        $data['ownerTokens'] = [];
        if($ownerId !== $user->id) {
            $data['ownerTokens'] = User::with('tokens')->find($ownerId)->apiKeys();
        }
        $data['membersTokens'] = optional($user->currentTeam)->apiKeys($user->id);

        return view('livewire.dashboard.apikey', $data);
    }
}
