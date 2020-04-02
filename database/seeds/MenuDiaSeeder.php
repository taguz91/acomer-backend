<?php

use Illuminate\Database\Seeder;

class MenuDiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\MenuDia::class,150)->create();
    }
}
