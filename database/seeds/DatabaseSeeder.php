<?php

use MenuSeeder;
use MesaSeeder;
use ComboSeeder;
use PlatoSeeder;
use PedidoSeeder;
use ClienteSeeder;
use MenuDiaSeeder;
use ReporteSeeder;
use UsuarioSeeder;
use EmpleadoSeeder;
use FavoritoSeeder;
use SucursalSeeder;
use CategoriaSeeder;
use PromocionSeeder;
use SugerenciaSeeder;
use RestauranteSeeder;
use CalificacionSeeder;
use EncabezadoFacturaSeeder;
use HistorialUsuariosSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CalificacionSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ComboSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(EncabezadoFacturaSeeder::class);
        $this->call(FavoritoSeeder::class);
        $this->call(HistorialUsuariosSeeder::class);
        $this->call(MenuDiaSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(MesaSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(PlatoSeeder::class);
        $this->call(PromocionSeeder::class);
        $this->call(ReporteSeeder::class);
        $this->call(RestauranteSeeder::class);
        $this->call(SucursalSeeder::class);
        $this->call(SugerenciaSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
