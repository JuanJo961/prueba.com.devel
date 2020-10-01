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
            $table->bigIncrements('id');
            $table->string('nombre', 80);
            $table->string('apellido_p',80);
            $table->string('apellido_m',80);
            $table->date('fecha_nacimiento');
            $table->string('direccion',100);
            $table->string('numero_tel',100);
            $table->string('email',100);
            $table->string('cod_post',100);
            $table->foreignId('categoria_id');
            $table->foreignId('turno_id');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('turno_id')->references('id')->on('turnos');
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
