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
