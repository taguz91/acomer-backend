<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MenuDia;
use Faker\Generator as Faker;

$factory->define(MenuDia::class, function (Faker $faker) {
    return [
        'menu_dia' => '{"name": "plato1"}',
        'fecha_inicio' => $faker->dateTime, 
        'fecha_fin' => $faker->dateTime,
        
    ];
});
