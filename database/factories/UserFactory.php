<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Team;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'current_team_id' => null,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->state(User::class, 'hasTeam', function (Faker $faker) {
    return [];
});

$factory->afterCreatingState(User::class, 'hasTeam', function (User $user, Faker $faker) {
    $team = factory(Team::class)->create(['owner_id' => $user->id, 'name' => $faker->words(2, true)]);
    $user->update(['current_team_id' => $team->id]);
    $user->teams()->attach($team->id);
});