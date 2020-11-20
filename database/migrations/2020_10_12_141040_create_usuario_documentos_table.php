<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('documentos_id');
            $table->foreignId('usuarios_id');
            $table->foreign('documentos_id')->references('id')->on('cat_documentos');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('usuario_documentos');
    }
}
