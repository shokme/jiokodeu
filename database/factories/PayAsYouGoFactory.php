<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\PayAsYouGo::class, function (Faker $faker) {
    return [
        'team_id' => null,
        'user_id' => 1,
        'token' => \Illuminate\Support\Str::random(),
        'request_count' => $faker->randomNumber(5),
        'due_date' => today(),
        'timestamp' => now()
    ];
});
