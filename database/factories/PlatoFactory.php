<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plato;
use Faker\Generator as Faker;

$factory->define(Plato::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'precio' => $faker->randomFloat,
        'ingredientes' => '{"name":"arroz", "complement":"pollo"}',
        'url_imagen' => $faker->imageUrl 
    ];
});
