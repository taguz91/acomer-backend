<?php

use Illuminate\Database\Seeder;
use App\Models\Favorito;

class FavoritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Favorito::class, 150)->create();
    }
}
