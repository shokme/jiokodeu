<?php

namespace App\Http\Livewire\Teams;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Account extends Component
{
    public string $name = '';
    public string $password = '';

    public function complete(Request $request)
    {
        $data = Crypt::decrypt($request->query('req'), true);

        $user = User::create([
            'name' => $this->name,
            'email' => $data['email'],
            'current_team_id' =>  $data['teamId'],
            'password' => Hash::make($this->password)
        ]);

        Auth::login($user);
        activity()->log($this->name.' join the team');
        $this->redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.teams.account');
    }
}
