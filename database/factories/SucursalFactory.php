<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sucursal;
use Faker\Generator as Faker;

$factory->define(Sucursal::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->randomDigit,
        'horario_atencion' => '{"Lunes" : "08h00 - 18h00"}',
        'numero' => $faker->randomDigit,
        'direccion' => $faker->address,
        'latitud' => $faker->latitude,
        'longitud' => $faker->longitude
    ];
});
