<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->firstname,
        'clave' => $faker->password,
        'correo' => $faker->unique()->email,
        'tipo_usuario' => $faker->numberBetween(1, 4),
        'ultimo_login' => $faker->dateTime,
        'ultimo_cambio_clave' => $faker->dateTime,
        'intentos_login' => $faker->randomDigit,
        'numero_logins' => $faker->randomDigit   
    ];
});
