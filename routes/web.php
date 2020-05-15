<?php

use Illuminate\Support\Facades\Auth;

Route::middleware('guest')->group(function () {
    Route::get('/', fn() => view('welcome'));
    Route::get('/contact', fn() => view('contact'));
    Route::get('/compare', fn() => view('compare'));
    Route::get('/privacy', fn() => view('privacy'));
    Route::get('/security', fn() => view('secruity'));
    Route::get('/tos', fn() => view('tos')); //TODO
    Route::livewire('/teams/invite', 'teams.account')->middleware('signed')->name('inviteToTeam');
    Route::livewire('/login', 'auth.login')->layout('layouts.auth')->name('login');
    Route::livewire('/register', 'auth.register')->layout('layouts.auth');
    Route::livewire('/teams/invite/{id}/account-complete', 'teams.account-complete');
});

Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'dashboard.home')->name('dashboard');
    Route::livewire('/teams', 'teams.home')->name('teams');
    Route::livewire('/billings', 'dashboard.billing')->name('billings');
    Route::get('/billings/checkout', function () {
        /** @var \App\User $user */
        $user = Auth::user();
        $subscription = $user->newSubscription('pay as you go', 'pay-as-you-go', [])->quantity(0)->create();
        if($subscription instanceof \Laravel\Cashier\Subscription) {
            return redirect('/dashboard');
        }

        return $subscription;
    });
    Route::get('/logout', function () {
            Auth::logout();
            return redirect('/login');
    });
    Route::get('/billings/stripe', function () {
        \Stripe\Stripe::setApiKey('sk_test_BQokikJOvBiI2HlWgH4olfQ2');
        \Stripe\SubscriptionItem::createUsageRecord('si_HGYf7gkSurlOik', [
            'quantity' => 60,
            'timestamp' => now()->timestamp
        ]);
        return ;
    });
});