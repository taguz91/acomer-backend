<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Administrador;
use Faker\Generator as Faker;

$factory->define(Administrador::class, function (Faker $faker) {
    return [
        'id_rol' => $faker->randomDigit,
        'id_usuario' => $faker->unique()->numberBetween(1, 1000),
    ];
});
