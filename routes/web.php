<?php

use Illuminate\Support\Facades\Auth;

Route::middleware('guest')->group(function () {
    Route::middleware('page-cache')->group(function () {
        Route::get('/', fn() => view('welcome'));
        Route::get('/contact', fn() => view('contact'));
        Route::get('/compare', fn() => view('compare'));
        Route::get('/privacy', fn() => view('privacy'));
        Route::get('/security', fn() => view('secruity'));
        Route::get('/tos', fn() => view('tos')); //TODO
    });
    Route::livewire('/teams/invite', 'teams.account')->middleware('signed')->name('inviteToTeam');
    Route::livewire('/login', 'auth.login')->layout('layouts.auth')->name('login');
    Route::livewire('/register', 'auth.register')->layout('layouts.auth');
    Route::livewire('/teams/invite/{id}/account-complete', 'teams.account-complete');
});

Route::middleware('auth')->group(function () {
    Route::livewire('/dashboard', 'dashboard.home')->name('dashboard');
    Route::livewire('/teams', 'teams.home')->name('teams');
    Route::livewire('/billings', 'dashboard.billing')->name('billings');
    Route::get('/logout', function () {
            Auth::logout();
            return redirect('/login');
    });
});