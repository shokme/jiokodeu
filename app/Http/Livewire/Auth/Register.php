<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public bool $termOfUse = false;
    public bool $remember = false;

    public function updatedEmail()
    {
        $this->validate(['email' => 'unique:users']);
    }

    public function register()
    {
        $data = $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
            'remember' => ['boolean'],
            'termOfUse' => ['accepted']
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'remember_me' => $data['remember']
        ]);

        auth()->login($user);
        event(new Registered($user));
        return redirect('/dashboard');
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
