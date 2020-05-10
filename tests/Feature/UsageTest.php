<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use Livewire\Livewire;
use Tests\TestCase;

class UsageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function store_token_inside_redis()
    {
        dd(Redis::get('RPQB68JEI60iuMdabTWl78KaJlDhWVSJAoCQ'));
        dd(Cache::get('RPQB68JEI60iuMdabTWl78KaJlDhWVSJAoCQ'));
    }
}
