<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word ,
        'price' => rand(500000, 10000000),
        'discountedPrice' => rand(100000, 500000),
        'remainingNumber' => rand(10, 100),
        'slug' => $faker->slug,
        'description' => $faker->sentence,
        'images' => $faker->sentence,
    ];
});
