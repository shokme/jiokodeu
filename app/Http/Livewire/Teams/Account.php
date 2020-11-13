<?php

namespace App\Http\Livewire\Teams;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Account extends Component
{
    public string $name = '';
    public string $password = '';
    public bool $termOfUse = false;

    public function complete(Request $request)
    {
        $teamId = Crypt::decrypt($request->query('team_id'), true);
        $email = Crypt::decrypt($request->query('email'), true);

        try {
            $user = User::create(
                [
                    'name' => $this->name,
                    'email' => $email,
                    'current_team_id' => $teamId,
                    'password' => Hash::make($this->password)
                ]
            );
        } catch (QueryException $e) {
            activity()->log('user already registered with this email.');
            $user = User::where('email', $email)->first();
            // TODO: Better exception handling, return a notification like "The user already exist with this email".
        }

        Auth::login($user);
        activity()->log($this->name.' join the team');
        $this->redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.teams.account');
    }
}
