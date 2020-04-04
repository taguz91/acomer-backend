<?php

use Illuminate\Database\Seeder;
use App\Models\EncabezadoFactura;

class EncabezadoFacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EncabezadoFactura::class, 500)->create();
    }
}
