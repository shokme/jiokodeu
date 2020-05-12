<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
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
    public function can_subscribe_to_the_pay_as_you_go_services()
    {
        Auth::login($user = factory(User::class)->create());

        Livewire::test('dashboard.billing')
            ->call('subscribe');

        $this->assertTrue($user->subscribed('pay as you go'));
    }
}
