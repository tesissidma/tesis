<?php

use Faker\Generator as Faker;

$factory->define(sidma\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->sentence
    ];
});
