<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Livewire;
use Tests\TestCase;

class UsageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function store_token_inside_redis()
    {
        $user = factory(User::class)->create();
        $token = $user->createToken("")->accessToken->token;

        Cache::rememberForever($token, function() use ($token) {
            return 0;
        });

        $this->assertTrue(Cache::has($token));
        Cache::increment($token, 20);

        $this->assertEquals(20, Cache::get($token));
    }
}
