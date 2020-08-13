<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Camera;
use Faker\Generator as Faker;

$factory->define(Camera::class, function (Faker $faker) {
    return [
    'imageSensor' => $faker->sentence,
    'effectivePixels' => $faker->sentence,
    'scanningSystem' => $faker->sentence,
    'electronicShutterSpeed' => $faker->sentence,
    'minimumIllumination' => $faker->sentence,
    'snRatio' => $faker->sentence,
    'irDistance' => $faker->sentence,
    'irOnOffControl' => $faker->sentence,
    'irLEDs' => $faker->sentence,
    'audioIn' => $faker->sentence,
    'lensType' => $faker->sentence,
    'mountType' => $faker->sentence,
    'focalLength' => $faker->sentence,
    'maxAperture' => $faker->sentence,
    'angleOfView' => $faker->sentence,
    'focusControl' => $faker->sentence,
    'closeFocusDistance' => $faker->sentence,
    'rotation' => $faker->sentence,
    'pan' => $faker->sentence,
    'tilt' => $faker->sentence,
    'resolution' => $faker->sentence,
    'frameRate' => $faker->sentence,
    'videoOutput' => $faker->sentence,
    'dayNight' => $faker->sentence,
    'osd' => $faker->sentence,
    'backlightCompensation' => $faker->sentence,
    'wdr' => $faker->sentence,
    'gainControl' => $faker->sentence,
    'noiseReduction' => $faker->sentence,
    'whiteBalance' => $faker->sentence,
    'smartIR' => $faker->sentence,
    'certifications' => $faker->sentence,
    'audioInterface' => $faker->sentence,
    'alarmIO' => $faker->sentence,
    'powerSupply' => $faker->sentence,
    'powerConsumption' => $faker->sentence,
    'operatingConditions' => $faker->sentence,
    'storageConditions' => $faker->sentence,
    'vandalResistance' => $faker->sentence,
    'casing' => $faker->sentence,
    'dimensions' => $faker->sentence,
    'netWeight' => $faker->sentence,
    'grossWeight' => $faker->sentence,
    ];
});
