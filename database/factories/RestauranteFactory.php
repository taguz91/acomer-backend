<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Restaurante;
use Faker\Generator as Faker;

$factory->define(Restaurante::class, function (Faker $faker) {
    return [
        'nombre_comercial' => $faker->name, 
        'nombre_fiscal' => $faker->company,
        'inicio_suscripcion' => $faker->dateTime,
        'ultimo_pago' => $faker->dateTime,
        'fecha_proximo_pago' => $faker->dateTime,
    ];
});
