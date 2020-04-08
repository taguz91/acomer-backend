<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Combo;
use Faker\Generator as Faker;

function getExtraCombo($faker) {
    return [
        'id_producto' => $faker->numberBetween(1, 500),
        'tipo' => $faker->numberBetween(1, 5),
        'cantidad' => $faker->numberBetween(1, 5),
        'total' => $faker->randomFloat(2)
    ];
}

function getJSONExtraCombo($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull;
    for ($i = 0; $i < $max; $i++) { 
        $values[] = getExtraCombo($faker);
    }
    return $values;
}

function getJSONPlatos($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull; 
    for ($i = 0; $i < $max; $i++) {
        $values[] = [
            'id' => $faker->unique()->numberBetween(1 , $max + 10000),
            'tipo' => $faker->numberBetween(1 , 2)
        ];
    }
    return $values;
}

$factory->define(Combo::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'platos' => json_encode(getJSONPlatos($faker)),
        'precio_final' => $faker->randomFloat,
        'extra' => json_encode(getJSONExtraCombo($faker))
    ];
});
