<?php

namespace App\Http\Livewire\Dashboard;

use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Exceptions\InvalidMandateException;
use Laravel\Cashier\Exceptions\PlanNotFoundException;
use Laravel\Cashier\SubscriptionBuilder\RedirectToCheckoutResponse;
use Livewire\Component;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

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

    public function render()
    {
        return view('livewire.dashboard.billing');
    }
}
