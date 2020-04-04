<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menu;
use Faker\Generator as Faker;

function getRandomNumsFaker($faker) {
    $values = array();
    $max = $faker->randomDigitNotNull; 
    for ($i = 0; $i < $max; $i++) {
        $values[] = $faker->unique()->numberBetween(1 , $max + 10000);
    }
    return $values;
}

function getSeccion($faker) {
    return [
        'seccion' => $faker->company,
        'descripcion' => $faker->sentence,
        'platos' => getRandomNumsFaker($faker),
    ];
}

$factory->define(Menu::class, function (Faker $faker) {
    $menu = [];
    $num = $faker->randomDigitNotNull; 
    for ($i = 0; $i < $num; $i++) { 
        $menu[] = getSeccion($faker);
    }

    return [
        'id_restaurante' => $faker->numberBetween(1, 500),
        'menu' => json_encode($menu)
    ];
});
