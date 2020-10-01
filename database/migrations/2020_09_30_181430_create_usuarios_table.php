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
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion');
            $table->string('num_celphone');
            $table->string('cuidad_nac');
            $table->string('pais');
            $table->foreignId('categoria_id');
            $table->foreignId('turno_id');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('turno_id')->references('id')->on('turnos_empleados');
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
