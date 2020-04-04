<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50)->unique();
            $table->string('clave', 50);
            $table->string('correo', 100)->unique();
            $table->integer('tipo_usuario');
            $table->timestamp('ultimo_login');
            $table->timestamp('ultimo_cambio_clave');
            $table->integer('intentos_login');
            $table->integer('numero_logins');
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
        Schema::dropIfExists('usuarios');
    }
}
