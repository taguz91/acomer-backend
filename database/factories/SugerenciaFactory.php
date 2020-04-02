<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sugerencia;
use Faker\Generator as Faker;

$factory->define(Sugerencia::class, function (Faker $faker) {
    return [
        'id_cliente' => $faker->numberBetween(1, 1000),
        'sugerencia' => $faker->sentence
    ];
});
