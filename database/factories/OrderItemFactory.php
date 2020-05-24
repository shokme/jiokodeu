<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\Laravel\Cashier\Order\OrderItem::class, function (Faker $faker) {
    return [
        'process_at' => today()->subDay(),
        'orderable_type' => 'Laravel\Cashier\Subscription',
        'orderable_id' => 1,
        'owner_type' => 'App\User',
        'owner_id' => 1,
        'description' => 'Jiokodeu pay as you go',
        'description_extra_lines' => null,
        'currency' => 'EUR',
        'quantity' => 1,
        'unit_price' => 50,
        'tax_percentage' => 0,
        'order_id' => null,
        'created_at' => today()->subMonth(),
        'updated_at' => today()->subMonth()
    ];
});
