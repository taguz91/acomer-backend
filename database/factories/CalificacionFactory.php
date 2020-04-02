<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Calificacion;
use Faker\Generator as Faker;

$factory->define(Calificacion::class, function (Faker $faker) {
    return [
        'id_fk' => $faker->randomDigit, 
        'id_cliente' => $faker->randomDigit,
        'calificacion' => $faker->randomDigit,
        'tipo_calificacion' => $faker->randomDigit,
       
    ];
});
