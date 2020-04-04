<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Combo;
use Faker\Generator as Faker;

$factory->define(Combo::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'platos' => '{"ids": [12, 13, 14, 15]}',
        'precio_final' => $faker->randomFloat,
        'extra' => '{"bebida": "si"}'
    ];
});
