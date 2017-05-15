<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTraer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traer', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('traer');
    }
}
