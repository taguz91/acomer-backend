<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    return [
        'id_empleado' => $faker->randomDigit, 
        'id_mesa' => $faker->randomDigit,
        'platos' => '{"name": "plato1"}',
        'notas' => $faker->name,
    ];
});
