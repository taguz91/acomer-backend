<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empleado;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->name,
        'apellido' => $faker->lastName,
        'identificacion' => $faker->creditCardNumber,
        'id_rol'  => $faker->randomDigit,
        'foto_url' => $faker->imageUrl
    ];
});
