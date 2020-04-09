<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'id_categoria' => $faker->numberBetween(1, 500),
        'nombre' => $faker->sentence(3),
        'stock' => $faker->numberBetween(0, 100),
        'precio' => $faker->randomFloat(2),
        'url_imagen' => $faker->imageUrl
    ];
});
