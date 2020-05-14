<?php

namespace Tests\Feature;

use App\Mail\InviteToTeam;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
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
            ->set('ownerId', $user->id)
            ->set('name', 'Foo Bar Baz')
            ->call('store');

        $user->refresh();

        $this->assertEquals('Foo Bar Baz', $user->currentTeam->name);
        $this->assertEquals($user->id, $user->currentTeam->owner_id);
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
}
