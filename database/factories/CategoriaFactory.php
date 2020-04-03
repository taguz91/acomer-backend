<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'nombre' => $faker->name, 
        'numero_platos' => $faker->randomDigit,
    ];
});
