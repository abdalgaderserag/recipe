<?php

use Faker\Generator as Faker;

$factory->define(App\Meal::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'price' => (random_int(5,24)*10) + 0.50,
        'time' => $faker->time(),
        'describe' => $faker->paragraph,
        'image' => ''
    ];
});
