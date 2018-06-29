<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'title' => $faker->text(191),
        'description' => $faker->text(191),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});