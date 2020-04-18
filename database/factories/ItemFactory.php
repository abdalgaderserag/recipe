<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'quantity' => rand(1,6),
        'notes' => $faker->paragraph,
    ];
});
