<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EncabezadoFactura;
use Faker\Generator as Faker;

$factory->define(EncabezadoFactura::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'id_cliente' => $faker->randomDigit,
        'id_pedido' => $faker->randomDigit,
        'total' => $faker->randomFloat,
        'fecha' => $faker->dateTime,
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'identificacion' => $faker->creditCardNumber
    ];
});
