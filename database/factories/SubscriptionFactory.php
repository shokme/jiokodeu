<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\Laravel\Cashier\Subscription::class, function (Faker $faker) {
    return [
        'name' => 'pay as you go',
        'plan' => 'pay-as-you-go',
        'owner_type' => 'App\User',
        'owner_id' => 1,
        'next_plan' => null,
        'quantity' => 1,
        'tax_percentage' => 0,
        'ends_at' => null,
        'trial_ends_at' => null,
        'cycle_started_at' => now()->subDays(10),
        'cycle_ends_at' => now()->subDays(2)->addMonthNoOverflow(),
        'scheduled_order_item_id' => 1,
        'created_at' => now()->subDays(10),
        'updated_at' => now()->subDays(10)
    ];
});
