<?php

use App\Warning;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/**
 * @var Factory $factory
 */

$factory->define(Warning::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
    ];
});