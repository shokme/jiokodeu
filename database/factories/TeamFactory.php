<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Team::class, function (Faker $faker) {
    return [
        'name' => 'Unknown',
        'owner_id' => $faker->numberBetween(1, 10),
    ];
});
