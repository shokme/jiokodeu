<?php

namespace Tests\Feature;

use App\PayAsYouGo;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class UsageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_see_his_usage()
    {
        $user = factory(User::class)->create();
        $tokenA = $user->createToken('')->plainTextToken;
        $tokenB = $user->createToken('')->plainTextToken;
        factory(PayAsYouGo::class)->create(['token' => $tokenA, 'request_count' => 50]);
        factory(PayAsYouGo::class)->create(['token' => $tokenB, 'request_count' => 150]);

        Livewire::actingAs($user)
            ->test('dashboard.usage')
            ->assertSee('200 / 2500');
    }

    /** @test */
    public function member_can_see_team_usage()
    {
        $owner = factory(User::class)->state('hasTeam')->create();
        $member = factory(User::class)->create(['current_team_id' => $owner->currentTeam->id]);
        $member->teams()->attach($owner->currentTeam->id);
        $memberB = factory(User::class)->create(['current_team_id' => $owner->currentTeam->id]);
        $memberB->teams()->attach($owner->currentTeam->id);

        $tokenA = $owner->createToken('')->plainTextToken;
        $tokenB = $member->createToken('')->plainTextToken;
        $tokenC = $member->createToken('')->plainTextToken;
        $tokenD = $memberB->createToken('')->plainTextToken;

        factory(PayAsYouGo::class)->create(['token' => $tokenA, 'request_count' => 50]);
        factory(PayAsYouGo::class)->create(['token' => $tokenB, 'request_count' => 150]);
        factory(PayAsYouGo::class)->create(['token' => $tokenC, 'request_count' => 400, 'timestamp' => Carbon::yesterday()]);
        factory(PayAsYouGo::class)->create(['token' => $tokenD, 'request_count' => 550]);

        Livewire::actingAs($member)
            ->test('dashboard.usage')
            ->assertSee('600');
    }
}
