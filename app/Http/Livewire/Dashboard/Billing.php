<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Billing extends Component
{
    public function subscribe()
    {
        /** @var \App\User $user */
        $user = Auth::user();

        $subscription = $user->newSubscription('default', 'pay-as-you-go', ['amount' => ['value' => '0.00', 'currency' => 'EUR']])->create();

        if ($subscription instanceof \Laravel\Cashier\Subscription) {
            return redirect('/dashboard');
        }

        return redirect($subscription->getTargetUrl());
    }

    public function cancel()
    {
        /** @var \App\User $user */
        $user = Auth::user();

        if($user->subscribedToPlan('pay-as-you-go')) {
            $user->subscribedToPlan('pay-as-you-go')->cancel();
        }
    }

    public function render()
    {
        return view('livewire.dashboard.billing');
    }
}
