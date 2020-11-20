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
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('curp');
            $table->string('nombre_usuario');
            $table->string('cedula');
            $table->string('contrasena');
            $table->string('perfil');
            $table->string('credencial');
            $table->string('rfc');
            $table->time('horario_entrada');
            $table->time('horario_salida');
            $table->string('cedula_especialidad');
            $table->string('email');
            $table->integer('numero_telefono');
            $table->foreignId('especialidad_id');
            $table->foreignId('categoria_id');
            $table->foreignId('areas_id');
            $table->foreignId('departamento_id');
            $table->foreignId('turnos_id');
            $table->foreign('especialidad_id')->references('id')->on('cat_especialidades');
            $table->foreign('categoria_id')->references('id')->on('cat_categorias');
            $table->foreign('areas_id')->references('id')->on('cat_areas');
            $table->foreign('departamento_id')->references('id')->on('cat_departamentos');
            $table->foreign('turnos_id')->references('id')->on('cat_turnos');
            $table->timestamps();
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
