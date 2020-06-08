<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Newsletter::class, static function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
    ];
});
