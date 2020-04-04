<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'id_usuario' => $faker->unique()->numberBetween(1, 1000),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'identificacion' => $faker->creditCardNumber,
        'telefono' => '00000',
        'numero_compras' => $faker->randomDigit,
        'ultima_compra' => $faker->dateTime,
        'total_consumos' => $faker->randomFloat     
    ];
});
