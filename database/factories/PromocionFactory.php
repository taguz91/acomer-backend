<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Promocion;
use Faker\Generator as Faker;

function getExtraPromo($faker) {
    return [
        'id_producto' => $faker->numberBetween(1, 500),
        'tipo' => $faker->numberBetween(1, 5),
        'cantidad' => $faker->numberBetween(1, 5),
        'total' => $faker->randomFloat(2)
    ];
}

function getJSONExtraPromo($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull;
    for ($i = 0; $i < $max; $i++) { 
        $values[] = getExtraPromo($faker);
    }
    return $values;
}

$factory->define(Promocion::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 20),
        'id_fk' => $faker->numberBetween(1, 500),
        'tipo_promocion' => $faker->numberBetween(1, 2),
        'fecha_inicio' => $faker->dateTime,
        'fecha_fin' => $faker->dateTime,
        'precio' => $faker->randomFloat,
        'descuento' => $faker->randomDigit,
        'extra' => json_encode(getJSONExtraPromo($faker))
    ];
});
