<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plato;
use Faker\Generator as Faker;

$factory->define(Plato::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 20),
        'nombre' => $faker->name,
        'precio' => $faker->randomFloat,
        'ingredientes' => '{"name":"arroz", "complement":"pollo"}',
        'url_imagen' => $faker->imageUrl 
    ];
});
