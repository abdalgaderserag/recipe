<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'location' => $faker->address,
        'cost' => (random_int(5,24)*10) + 0.50,
    ];
});
