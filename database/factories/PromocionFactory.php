<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Promocion;
use Faker\Generator as Faker;

$factory->define(Promocion::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'id_fk' => $faker->numberBetween(1, 500),
        'fecha_inicio' => $faker->dateTime,
        'fecha_fin' => $faker->dateTime,
        'precio' => $faker->randomFloat,
        'descuento' => $faker->randomDigit,
        'extra' => '{"postre":"si"}'
    ];
});
