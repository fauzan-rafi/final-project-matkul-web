<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'image' => $faker->imageUrl($width = 150, $height = 100),
        'position' => $faker->jobTitle(),
        'birthday' => $faker->dateTimeThisDecade(),
        'address' => $faker->address(),
    ];
});
