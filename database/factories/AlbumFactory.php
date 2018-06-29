<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'description' => $faker->text(191)
    ];
});
