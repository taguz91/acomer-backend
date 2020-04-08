<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MenuDia;
use Faker\Generator as Faker;

function getFechas($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull;
    for ($i = 0; $i < $max; $i++) { 
        $values[] = $faker->unique()->date();
    }
    return $values;
}

function getJSONFechas($faker) {
    return [
        'fechas' => getFechas($faker)
    ];
}

function getExtra($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull;
    for ($i = 0; $i < $max; $i++) { 
        $values[] = $faker->unique()->sentence(3);
    }
    return $values;
}

function getJSONMenuDia($faker) {
    return [
        'descripcion' => $faker->sentence(5),
        'precio' => $faker->randomFloat(2),
        'extra' => getExtra($faker)
    ];
}

$factory->define(MenuDia::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'menu_dia' => json_encode(getJSONMenuDia($faker)),
        'fechas' => json_encode(getJSONFechas($faker))
    ];
});
