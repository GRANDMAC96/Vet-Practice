<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address_1' => $faker->streetAddress,
        'address_2' => $faker->secondaryAddress,
        'town' => $faker->city,
        'postcode' => $faker->postcode,
        'telephone' => $faker->phoneNumber,
    ];
});
