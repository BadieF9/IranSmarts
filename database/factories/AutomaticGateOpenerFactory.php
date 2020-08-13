<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AutomaticGateOpener;
use Faker\Generator as Faker;

$factory->define(AutomaticGateOpener::class, function (Faker $faker) {
    return [
    'weight' => $faker->sentence,
    'dimensions' => $faker->sentence,
    'casing' => $faker->sentence,
    'maximumLeafLength' => $faker->sentence,
    'maximumLeafWeight' => $faker->sentence,
    'powerSupply' => $faker->sentence,
    'maximumPower' => $faker->sentence,
    'openingTime' => $faker->sentence,
    'maximumTravel' => $faker->sentence,
    'operatingSpeed' => $faker->sentence,
    'maximumThrust' => $faker->sentence,
    'protectionDegree' => $faker->sentence,
    'dutyCycle' => $faker->sentence,
    ];
});
