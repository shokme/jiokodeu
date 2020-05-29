<?php

namespace Tests\Feature;

use App\Mail\InviteToTeam;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Tests\TestCase;

class TeamTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function page_exists()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)->get('/teams')->assertSeeLivewire('teams.home');
    }

    /** @test */
    public function can_create_a_team_and_associate_the_user()
    {
        $user = factory(User::class)->create();

        Livewire::actingAs($user)
            ->test('teams.home')
            ->set('teamName', 'Foo Bar Baz')
            ->call('store');

        $user->refresh();

        $this->assertEquals('Foo Bar Baz', $user->currentTeam->name);
        $this->assertEquals($user->id, $user->currentTeam->owner_id);
    }

    /** @test */
    public function the_team_name_is_required()
    {
        $user = factory(User::class)->create();

        Livewire::actingAs($user)
            ->test('teams.home')
            ->call('store')
            ->assertHasErrors(['teamName' => 'required']);
    }

    /** @test */
    public function the_team_name_has_min_characters()
    {
        $user = factory(User::class)->create();

        Livewire::actingAs($user)
            ->test('teams.home')
            ->set('teamName', 'a')
            ->call('store')
            ->assertHasErrors(['teamName' => 'min']);
    }

    /** @test */
    public function the_team_name_has_max_characters()
    {
        $user = factory(User::class)->create();

        Livewire::actingAs($user)
            ->test('teams.home')
            ->set('teamName', Str::random(25))
            ->call('store')
            ->assertHasErrors(['teamName' => 'max']);
    }

    /** @test */
    public function can_invite_an_user_to_join_the_team()
    {
        Mail::fake();
        $user = factory(User::class)->state('hasTeam')->create();
        factory(User::class)->create(['email' => 'john@doe.com']);

        Livewire::actingAs($user)
            ->test('teams.invite')
            ->set('email', 'john@doe.com')
            ->call('invite');

        Mail::assertQueued(InviteToTeam::class);
    }

    /** @test */
    public function a_new_member_is_added_to_the_group_once_he_accept_the_invitation()
    {
        $this->markTestIncomplete('Find a way to pass the request url');
        $user = factory(User::class)->state('hasTeam')->create();
        $url = URL::temporarySignedRoute('inviteToTeam', now()->addMinutes(30), ['req' => Crypt::encrypt(['email' => 'john@doe.com', 'teamId' => $user->currentTeam->id])]);

        Livewire::test('teams.account')
            ->set('name', 'Carlos')
            ->set('password', 'password')
            ->call('complete', [new Request(['req' => 'abc'])]);
    }

    /** @test */
    public function owner_can_remove_team_member()
    {
        $owner = factory(User::class)->state('hasTeam')->create();
        $member = factory(User::class)->create();
        $member->teams()->attach($owner->currentTeam->id);

        Livewire::actingAs($owner)
            ->test('teams.home')
            ->call('deleteMember', $member->id);

        $member->refresh();

        $this->assertCount(0, $member->teams);
    }

    /** @test */
    public function member_is_not_able_to_remove_another_member()
     {
        $owner = factory(User::class)->state('hasTeam')->create();
        $member = factory(User::class)->create();
        $member->teams()->attach($owner->currentTeam->id);
        $memberTryToRemoveMember = factory(User::class)->create(['current_team_id' => $owner->currentTeam->id]);
        $memberTryToRemoveMember->teams()->attach($owner->currentTeam->id);

        Livewire::actingAs($memberTryToRemoveMember)
            ->test('teams.home')
            ->call('deleteMember', $member->id);

        $this->assertCount(1, $member->teams);
    }

    /** @test */
    public function owner_can_switch_to_another_owner()
    {
        $oldOwner = factory(User::class)->state('hasTeam')->create();
        $newOwner = factory(User::class)->create(['email' => 'new@owner.com']);
        $newOwner->teams()->attach($oldOwner->currentTeam->id);

        Livewire::actingAs($oldOwner)
            ->test('teams.home')
            ->set('ownerEmail', 'new@owner.com')
            ->call('switch');

        $this->assertEquals($newOwner->id, $oldOwner->currentTeam->owner_id);
    }
}
