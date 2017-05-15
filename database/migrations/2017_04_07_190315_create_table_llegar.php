<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLlegar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llegar', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->string('titulo',255);
            $table->text('script');
            $table->text('contenido');
            $table->integer('contador_visitas')->nullable(); // el contador de visitas permitira valores nulos por ahora
             $table->char('estado',1)->default(1);
              

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llegar');
    }
}
