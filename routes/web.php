<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'dashboard.home');
    Route::livewire('/apikeys', 'dashboard.apikeys');
    Route::livewire('/billings', 'dashboard.billing');
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

Route::middleware('guest')->group(function () {
    Route::livewire('/login', 'auth.login')->layout('layouts.auth')->name('login');
    Route::livewire('/register', 'auth.register')->layout('layouts.auth');
});
