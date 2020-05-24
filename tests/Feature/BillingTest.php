<?php

namespace Tests\Feature;

use App\Jobs\Metered;
use App\PayAsYouGo;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Queue;
use Laravel\Cashier\Order\Order;
use Laravel\Cashier\Order\OrderItem;
use Laravel\Cashier\Subscription;
use Livewire\Livewire;
use Mollie\Laravel\Facades\Mollie;
use Money\Money;
use Tests\TestCase;

class BillingTest extends TestCase
{
   use RefreshDatabase;

    /** @test */
    public function page_exists()
    {
        Auth::login($user = factory(User::class)->create());

        $this->get('/billings')->assertSeeLivewire('dashboard.billing');
    }

    /** @test */
    public function job_process_the_billing()
    {
        $unitPrice = 50;
        $requestCount = 7500;
        $freeCalls = \App\Metered::FREE_CALLS;
        $moneyOwed = Money::EUR((($requestCount - $freeCalls) / 1000) * $unitPrice);

        $user = factory(User::class)->create(['mollie_customer_id' => env('MANDATED_CUSTOMER_DIRECTDEBIT'), 'mollie_mandate_id' => env('MANDATED_CUSTOMER_DIRECTDEBIT_MANDATE_ID')]);
        factory(PayAsYouGo::class)->create([
            'user_id' => $user->id,
            'token' => 'api-key-token',
            'request_count' => $requestCount,
            'timestamp' => today()->subDay()
        ]);
        factory(Subscription::class)->create(['owner_id' => $user->id]);
        factory(OrderItem::class)->create(['owner_id' => $user->id]);

        $this->artisan('cashier:run');

        $paymentId = Order::first()->mollie_payment_id;
        $mollie = Mollie::api()->payments()->get($paymentId);

        $this->assertEquals('paid', $mollie->status);
        $this->assertEquals(money_to_decimal($moneyOwed), $mollie->amount->value);
    }

    /** @test */
    public function when_request_tier_is_passed_by_one_add_the_next_tier_to_the_billing()
    {
        $unitPrice = 50;
        $requestCount = 2501;

        $user = factory(User::class)->create(['mollie_customer_id' => env('MANDATED_CUSTOMER_DIRECTDEBIT'), 'mollie_mandate_id' => env('MANDATED_CUSTOMER_DIRECTDEBIT_MANDATE_ID')]);
        factory(PayAsYouGo::class)->create([
            'user_id' => $user->id,
            'token' => 'api-key-token',
            'request_count' => $requestCount,
            'timestamp' => today()->subDay()
        ]);
        factory(Subscription::class)->create(['owner_id' => $user->id]);
        factory(OrderItem::class)->create(['owner_id' => $user->id]);

        $this->artisan('cashier:run');

        $paymentId = Order::first()->mollie_payment_id;
        $mollie = Mollie::api()->payments()->get($paymentId);

        $this->assertEquals('paid', $mollie->status);
        $this->assertEquals(money_to_decimal(Money::EUR($unitPrice)), $mollie->amount->value);
    }

    /** @test */
    public function get_all_teams_request_usage_to_make_the_billing()
    {
        $unitPrice = 50;
        $requestCount = 2501;

        $user = factory(User::class)->state('hasTeam')->create(['mollie_customer_id' => env('MANDATED_CUSTOMER_DIRECTDEBIT'), 'mollie_mandate_id' => env('MANDATED_CUSTOMER_DIRECTDEBIT_MANDATE_ID')]);
        $member = factory(User::class)->create(['current_team_id' => $user->currentTeam->id]);
        $member->teams()->attach($user->currentTeam->id);

        factory(PayAsYouGo::class)->create([
            'user_id' => $user->id,
            'team_id' => $user->currentTeam->id,
            'token' => 'api-key-token',
            'request_count' => $requestCount,
            'due_date' => today()->subDay()
        ]);

        factory(PayAsYouGo::class)->create([
            'user_id' => $member->id,
            'team_id' => $member->currentTeam->id,
            'token' => 'api-key-token-member',
            'request_count' => 1337,
            'due_date' => today()->subDay()
        ]);

        factory(PayAsYouGo::class)->create([
            'user_id' => $member->id,
            'team_id' => $member->currentTeam->id,
            'token' => 'api-key-token-member',
            'request_count' => 3,
            'due_date' => today()->subDays(2)
        ]);
        factory(Subscription::class)->create(['owner_id' => $user->id]);
        factory(OrderItem::class)->create(['owner_id' => $user->id]);

        $this->artisan('cashier:run');

        $paymentId = Order::first()->mollie_payment_id;
        $mollie = Mollie::api()->payments()->get($paymentId);

        $this->assertEquals('paid', $mollie->status);
        $this->assertEquals(money_to_decimal(Money::EUR(100)), $mollie->amount->value);
    }

    /** @test */
    public function subscription_can_be_canceled()
    {
    }
}
