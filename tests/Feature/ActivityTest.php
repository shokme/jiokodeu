<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use Tests\TestCase;

class ActivityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function page_exists()
    {
        Auth::login(factory(User::class)->create());
        $this->get('dashboard/activities')->assertSeeLivewire('dashboard.activity');
    }

    /** @test */
    public function user_can_see_his_activity()
    {
        $user = factory(User::class)->create();

        Livewire::actingAs($user)
            ->test('dashboard.activity')
            ->assertSee(__('activity.your_activity'));
    }

    /** @test */
    public function owner_can_see_activity_of_all_members()
    {
        $user = factory(User::class)->state('hasTeam')->create();

        Livewire::actingAs($user)
            ->test('dashboard.activity')
            ->assertSee(__('activity.your_activity'))
            ->assertSee(__('activity.team_activity'));
    }

    /** @test */
    public function user_cannot_see_teams_activity()
    {
        $user = factory(User::class)->create();

        Livewire::actingAs($user)
            ->test('dashboard.activity')
            ->assertSee(__('activity.your_activity'))
            ->assertDontSee(__('activity.team_activity'));
    }

    /** @test */
    public function members_cannot_see_teams_activity()
    {
        $user = factory(User::class)->state('hasTeam')->create();
        $member = factory(User::class)->create(['current_team_id' => $user->currentTeam->id]);

        Livewire::actingAs($member)
            ->test('dashboard.activity')
            ->assertSee(__('activity.your_activity'))
            ->assertDontSee(__('activity.team_activity'));
    }
}
