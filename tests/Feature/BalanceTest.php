<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class BalanceTest extends TestCase
{
    /** @test */
    public function see_balance_at_0()
    {
        Livewire::test('dashboard.balance')
            ->assertSee('Add a payment method')
            ->assertSee('0');
    }
}
