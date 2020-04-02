<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reporte;
use Faker\Generator as Faker;

$factory->define(Reporte::class, function (Faker $faker) {
    return [
        'reporte' => '{"names": "reporte1"}', 
        'fecha' => $faker->dateTime,
        'nombre' => $faker->name,
    ];
});

/*

	
php artisan make:factory ProfessionFactory
*/
