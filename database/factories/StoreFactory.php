<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'slug' => \Str::slug($faker->sentence()),
        'image' => $faker->imageUrl($width = 200, $height = 200),
        'description' => $faker->paragraph(6),
        'price' => $faker->numberBetween($min = 20000, $max = 160000),
        'stock' => $faker->numberBetween($min = 0, $max = 100),
    ];
});
