<?php

use Illuminate\Database\Seeder;

class ReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Reporte::class,150)->create();
    }
}

#php artisan db:seed este no funciona

#php artisan db:seed --class=ReporteSeeder este si funciona

