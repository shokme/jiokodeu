<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Livewire\Livewire;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function page_exists()
    {
        $this->get('/register')->assertSeeLivewire('auth.register');
    }

    /** @test */
    public function can_register()
    {
        Livewire::test('auth.register')
            ->set('name', 'John Doe')
            ->set('email', 'john@doe.com')
            ->set('password', 'secret')
            ->set('termOfUse', true)
            ->set('remember', true)
            ->call('register')
            ->assertRedirect('/dashboard');

        $this->assertTrue(User::whereEmail('john@doe.com')->exists());
        $this->assertEquals('john@doe.com', auth()->user()->email);
    }

    /** @test */
    public function email_is_required()
    {
        Livewire::test('auth.register')
            ->set('name', 'John Doe')
            ->set('email', '')
            ->set('password', 'secret')
            ->set('termOfUse', true)
            ->set('remember', true)
            ->call('register')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    public function email_is_valid_email()
    {
        Livewire::test('auth.register')
            ->set('name', 'John Doe')
            ->set('email', 'john')
            ->set('password', 'secret')
            ->set('termOfUse', true)
            ->set('remember', true)
            ->call('register')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    public function email_hasnt_been_taken_already()
    {
        factory(User::class)->create(['email' => 'john@doe.com']);

        Livewire::test('auth.register')
            ->set('name', 'John Doe')
            ->set('email', 'john@doe.com')
            ->set('password', 'secret')
            ->set('termOfUse', true)
            ->set('remember', true)
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    public function see_email_hasnt_already_been_taken_validation_message_as_user_type()
    {
        factory(User::class)->create(['email' => 'john@doe.com']);

        Livewire::test('auth.register')
            ->set('email', 'john@do.com')
            ->assertHasNoErrors()
            ->set('email', 'john@doe.com')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    public function password_is_required()
    {
        Livewire::test('auth.register')
            ->set('name', 'John Doe')
            ->set('email', 'john@doe.com')
            ->set('password', '')
            ->set('termOfUse', true)
            ->set('remember', true)
            ->call('register')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    public function password_is_minimum_of_six_characters()
    {
        Livewire::test('auth.register')
            ->set('name', 'John Doe')
            ->set('email', 'john@doe.com')
            ->set('password', 'secre')
            ->set('termOfUse', true)
            ->set('remember', true)
            ->call('register')
            ->assertHasErrors(['password' => 'min']);
    }

    /** @test */
    public function term_of_use_is_accepted()
    {
        Livewire::test('auth.register')
            ->set('name', 'John Doe')
            ->set('email', 'john@doe.com')
            ->set('password', 'secret')
            ->set('termOfUse', false)
            ->set('remember', true)
            ->call('register')
            ->assertHasErrors(['termOfUse' => 'accepted']);
    }

    /** @test */
    public function user_get_an_email_to_thank_him_for_his_registration()
    {
        Event::fake();

        Livewire::test('auth.register')
            ->set('name', 'John Doe')
            ->set('email', 'john@doe.com')
            ->set('password', 'secret')
            ->set('termOfUse', true)
            ->set('remember', true)
            ->call('register')
            ->assertRedirect('/dashboard');

        Event::assertDispatched(Registered::class);
    }
}
