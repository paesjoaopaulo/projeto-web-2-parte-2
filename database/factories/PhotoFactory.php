<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl(),
        'description' => $faker->text(191)
    ];
});
