<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatGuardiaUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_guardia_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('guardia_id');
            $table->foreignId('usuario_id');
            $table->foreign('guardia_id')->references('id')->on('cat_guardias');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('cat_guardia_usuarios');
    }
}
