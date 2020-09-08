<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Animal;
use Faker\Generator as Faker;

$factory->define(Animal::class, function (Faker $faker) {
    return [
        'owner_id' => factory(\App\Owner::class),
        'name' => $faker->firstName,
        'species' => $faker->randomElement(["Cow", "Bat", "Penguin", "Dog", "Hamster", "Cat", "Pig", "Lizard", "Snake", "Spider", "Horse", "Chicken"]),
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200),
        'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 300),
        'biteyness' => $faker->numberBetween($min = 0, $max = 5),
    ];
});
