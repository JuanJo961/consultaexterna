<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('curp');
            $table->string('nombre');
            $table->string('apellido_parterno');
            $table->string('apellido_materno');
            $table->datetime('fecha_nacimiento');
            $table->string('nacio_extranjero');
            $table->string('pais_origen');
            $table->string('entidad_nacimiento');
            $table->string('clave_edad');
            $table->string('gratuidad');
            $table->integer('numero_afiliacion');
            $table->string('digito_verificador');
            $table->string('sabe_leer_escribir');
            $table->string('habla_lengua_indigena');
            $table->string('paciente_discapacidad');
            $table->string('no_expediente');
            $table->datetime('fecha_registro');
            $table->integer('telefono');
            $table->string('reside_extranjero');
            $table->string('entidad_residencia');
            $table->string('municipio_residencia');
            $table->string('localidad_residencia');
            $table->string('otra_localidad');
            $table->string('codigo_postal');
            $table->string('se_ignora_cp');
            $table->string('nombre_vialidad');
            $table->string('numero_exterior_numerico');
            $table->string('numero_exterior_alfabetico');
            $table->string('numero_interior');
            $table->string('nombre_asentamiento');
            $table->string('fk_paciente_tipo_vialidad');
            $table->string('fk_paciente_tipo_asentamiento');
            $table->string('fk_paciente_usuario');
            $table->string('fk_paciente_discapacidad');
            $table->string('fk_paciente_cual_lengua');
            $table->string('fk_paciente_escolaridad');
            $table->string('fk_paciente_afiliacion');
            $table->string('fk_paciente_sexo');
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
        Schema::dropIfExists('pacientes');
    }
}
