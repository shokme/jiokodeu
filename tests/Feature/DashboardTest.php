<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function page_exists()
    {
        Auth::login(factory(User::class)->create());

        $this->get('/dashboard')->assertSeeLivewire('dashboard.home');
    }

    /** @test */
    public function redirect_to_login_page_if_not_logged_in()
    {
        $this->get('/dashboard')->assertRedirect('/login');
    }
}
