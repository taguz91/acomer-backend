<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuDiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_dia', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_restaurante');
            $table->string('descripcion', 255);
            $table->double('precio', 10, 2);
            $table->json('menu_dia');
            $table->json('fechas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_dia');
    }
}
