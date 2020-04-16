<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empleado;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 20),
        'id_usuario' => $faker->unique()->numberBetween(1, 10000),
        'nombre'=> $faker->name,
        'apellido' => $faker->lastName,
        'identificacion' => $faker->creditCardNumber,
        'id_rol'  => $faker->randomDigit,
        'foto_url' => $faker->imageUrl
    ];
});
