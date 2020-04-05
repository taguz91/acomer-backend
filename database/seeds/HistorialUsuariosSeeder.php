<?php

use Illuminate\Database\Seeder;
use App\Models\HistorialUsuario;

class HistorialUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HistorialUsuario::class, 500)->create();
    }
}
