<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\HistorialUsuario;

$factory->define(HistorialUsuario::class, function (Faker $faker) {
    return [
        'id_usuario' => $faker->numberBetween(1, 500),
        'accion' => $faker->url,
        'plataforma' => $faker->numberBetween(1, 3),
    ];
});
