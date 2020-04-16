<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reserva;
use Faker\Generator as Faker;

function getExtraReserva($faker) {
    return [
        'id_producto' => $faker->numberBetween(1, 500),
        'tipo' => $faker->numberBetween(1, 5),
        'cantidad' => $faker->numberBetween(1, 5),
        'total' => $faker->randomFloat(2)
    ];
}

function getJSONExtraReserva($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull;
    for ($i = 0; $i < $max; $i++) { 
        $values[] = getExtraPromo($faker);
    }
    return $values;
}

function getJSONPlatosReserva($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull; 
    for ($i = 0; $i < $max; $i++) {
        $values[] = [
            'id' => $faker->numberBetween(1 , $max + 500),
            'tipo' => $faker->numberBetween(1 , 2),
            'cantidad' => $faker->numberBetween(1, 5),
            'total' => $faker->randomFloat(2),
            'nota' => $faker->sentence(4)
        ];
    }
    return $values;
}

function getJSONConfiguracion($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull; 
    for ($i = 0; $i < $max; $i++) {
        $values[] = [
            'id' => $faker->numberBetween(1 , $max + 500),
            'tipo' => $faker->numberBetween(1 , 2),
            'configuracion' => $faker->sentences
        ];
    }
    return $values;
}

function getPlatosPedido($faker) {
    return [
        'platos' => getJSONPlatosReserva($faker),
        'extra' => getJSONExtraReserva($faker),
        'configuracion' => getJSONConfiguracion($faker),
        'nota' => $faker->sentence(10)
    ];
}

$factory->define(Reserva::class, function (Faker $faker) {
    return [
        'id_cliente' => $faker->numberBetween(1, 500),
        'id_restaurante' => $faker->numberBetween(1, 20),
        'fecha_reserva' => $faker->dateTime,
        'numero_personas' => $faker->numberBetween(1, 15),
        'platos' => json_encode(getPlatosPedido($faker)),
        'id_mesa' => $faker->numberBetween(0, 500),
        'codigo_qr' => $faker->imageUrl,
        'total' => $faker->randomFloat(2)
    ];
});
