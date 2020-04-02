<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncabezadoFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encabezado_facturas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cliente');
            $table->bigInteger('id_pedido');
            $table->double('total', 10, 2);
            $table->timestamp('fecha');
            $table->string('nombre', 50);
            $table->string('direccion', 50);
            $table->string('telefono', 50);
            $table->string('identificacion', 50);
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
        Schema::dropIfExists('encabezado_facturas');
    }
}
