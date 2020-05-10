<?php

Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'dashboard.home');
    Route::livewire('/apikeys', 'dashboard.apikeys');
    Route::get('/logout', function () {
            Auth::logout();
            return redirect('/login');
    });
});

Route::middleware('guest')->group(function () {
    Route::livewire('/login', 'auth.login')->layout('layouts.auth')->name('login');
    Route::livewire('/register', 'auth.register')->layout('layouts.auth');
});
