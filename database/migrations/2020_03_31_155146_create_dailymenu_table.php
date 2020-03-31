<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailymenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailymenu', function (Blueprint $table) {
            $table->id();
            $table->json('menu_dia');
            $table->timestamp('fecha_inicio')->default(time());
            $table->timestamp('fecha-fin')->default(time());
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
        Schema::dropIfExists('dailymenu');
    }
}
