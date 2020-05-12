<?php

use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'dashboard.home');
    Route::livewire('/apikeys', 'dashboard.apikeys');
    Route::livewire('/billings', 'dashboard.billing');
    Route::get('/billings/checkout', function () {
        /** @var \App\User $user */
        $user = Auth::user();
        $subscription = $user->newSubscription('pay as you go', 'pay-as-you-go', [])->create();
        if($subscription instanceof \Laravel\Cashier\Subscription) {
            return redirect('/dashboard');
        }

        return $subscription;
    });
    Route::get('/logout', function () {
            Auth::logout();
            return redirect('/login');
    });
});

Route::middleware('guest')->group(function () {
    Route::livewire('/login', 'auth.login')->layout('layouts.auth')->name('login');
    Route::livewire('/register', 'auth.register')->layout('layouts.auth');
});
