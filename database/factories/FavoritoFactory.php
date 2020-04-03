<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Favorito;
use Faker\Generator as Faker;

$factory->define(Favorito::class, function (Faker $faker) {
    return [
        'id_plato' => $faker->numberBetween(1, 500),
        'id_cliente' => $faker->numberBetween(1, 500),
    ];
});
