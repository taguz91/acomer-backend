<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Mesa;
use Faker\Generator as Faker;

$factory->define(Mesa::class, function (Faker $faker) {
    return [
        'numero' => $faker->randomDigit, 
        'capacidad' => $faker->randomDigit,
        'descripcion' => $faker->name
    ];
});
