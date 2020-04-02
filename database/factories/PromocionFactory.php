<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Promocion;
use Faker\Generator as Faker;

$factory->define(Promocion::class, function (Faker $faker) {
    return [
        'id_fk' => $faker->randomDigit,
        'fecha_inicio' => $faker->dateTime,
        'fecha_fin' => $faker->dateTime,
        'precio' => $faker->randomFloat,
        'descuento' => $faker->randomDigit,
        'extra' => '{"postre":"si"}'
    ];
});
