<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Calificacion;
use Faker\Generator as Faker;

$factory->define(Calificacion::class, function (Faker $faker) {
    return [
        'id_fk' => $faker->randomDigit, 
        'id_cliente' => $faker->numberBetween(1, 500),
        'calificacion' => $faker->numberBetween(1, 10),
        'tipo_calificacion' => $faker->numberBetween(1, 4),
    ];
});
