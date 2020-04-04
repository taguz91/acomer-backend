<?php

use Illuminate\Database\Seeder;
use App\Models\Restaurante; 

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Restaurante::class, 500)->create();
    }
}
