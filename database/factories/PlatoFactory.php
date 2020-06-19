<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plato;
use Faker\Generator as Faker;

function getJSONIngredientes($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull;
    for ($i = 0; $i < $max; $i++) { 
        $values[] = $faker->sentence(4);
    }
    return $values;
}

$factory->define(Plato::class, function (Faker $faker) {
    return [
        'id_restaurante' => $faker->numberBetween(1, 20),
        'nombre' => $faker->name,
        'precio' => $faker->numberBetween(1, 10, 0.01),
        'ingredientes' => json_encode(getJSONIngredientes($faker)),
        'url_imagen' => $faker->imageUrl 
    ];
});
