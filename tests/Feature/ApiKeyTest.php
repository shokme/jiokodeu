<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use Tests\TestCase;

class ApiKeyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_generate_an_api_token()
    {
        Auth::login($user = factory(User::class)->create());

        Livewire::test('dashboard.home')
            ->call('generateToken');

        $this->assertCount(1, $user->refresh()->tokens);
    }

    /** @test */
    public function can_view_all_api_tokens()
    {
        Auth::login($user = factory(User::class)->create());

        Livewire::test('dashboard.home')
            ->call('generateToken')
            ->call('generateToken')
            ->assertSee($user->refresh()->tokens->first()->token);

        $this->assertCount(2, $user->refresh()->tokens);
    }

    /** @test */
    public function can_delete_one_token()
    {
        Auth::login($user = factory(User::class)->create());

        Livewire::test('dashboard.home')
            ->call('generateToken')
            ->call('deleteToken', $user->refresh()->tokens->first()->token);

        $this->assertCount(2, $user->refresh()->tokens);
    }
}
