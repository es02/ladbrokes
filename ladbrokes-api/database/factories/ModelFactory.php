<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Competitors::class, function (Faker\Generator $faker) {
    return [
        'races_id' => 1,
        'name' => $faker->name,
        'position' => $faker->randomDigitNotNull,
        'odds' => $faker->biasedNumberBetween($min = 10, $max = 500, $function = 'sqrt'),
    ];
});

$factory->define(App\Models\Races::class, function (Faker\Generator $faker) {
    return [
        'meetings_id' => 1,
        'closeTime' => $faker->dateTimeBetween($startDate = '+1 minutes', $endDate = '+ 1 days', $timezone = 'AEST'),
    ];
});

$factory->define(App\Models\Meetings::class, function (Faker\Generator $faker) {
    $types = App\Models\Meetings::validTypes;
    return [
        'location' => $faker->city,
        'type' => $faker->randomElement($types),
    ];
});
