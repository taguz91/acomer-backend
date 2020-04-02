<?php

use Illuminate\Database\Seeder;
class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Calificacion::class, 150)->create();
    }
}
