<?php

namespace App\Http\Livewire\Dashboard;

use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Exceptions\InvalidMandateException;
use Laravel\Cashier\Exceptions\PlanNotFoundException;
use Livewire\Component;

class Billing extends Component
{
    public function subscribe()
    {
        /** @var User $user */
        $user = Auth::user();

        try {
            return redirect('/billings/checkout');
        } catch (\Throwable $exception) {
            // TODO: dispatch alert
            dd($exception);
        }
    }

    public function render()
    {
        return view('livewire.dashboard.billing');
    }
}
