<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Mesa;
use Faker\Generator as Faker;

$factory->define(Mesa::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'numero' => $faker->numberBetween(1, 30),
        'capacidad' => $faker->numberBetween(1, 12),
        'descripcion' => $faker->name
    ];
});
