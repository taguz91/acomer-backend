<?php

use App\Models\Sugerencia;
use Illuminate\Database\Seeder;

class SugerenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sugerencia::class, 150)->create();
    }
}
