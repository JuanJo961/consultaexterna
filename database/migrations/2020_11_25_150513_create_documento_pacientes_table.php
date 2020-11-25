<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ruta_documento_fisico');
            $table->foreignId('orden_id');
            $table->foreignId('paciente_id');
            $table->foreign('orden_id')->references('id')->on('cat_orden_documento_pacientes');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
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
        Schema::dropIfExists('documento_pacientes');
    }
}
