<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_usuario')->unique();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('identificacion', 20);
            $table->string('telefono', 20)->nullable();
            $table->integer('numero_compras')->default(0);
            $table->timestamp('ultima_compra')->nullable();
            $table->double('total_consumos', 10, 2)->default(0);
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
        Schema::dropIfExists('clientes');
    }
}
