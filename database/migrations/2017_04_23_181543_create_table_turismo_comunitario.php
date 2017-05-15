<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTurismoComunitario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turismo_comunitario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',100);
            $table->text('contenido');
            $table->date('fecha');
            $table->integer('contador_visitas')->nullable(); // el contador de visitas permitira valores nulos por ahora
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turismo_comunitario');
    }
}
