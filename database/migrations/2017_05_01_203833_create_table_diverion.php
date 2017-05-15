<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDiverion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diversion', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->string('nombre_lugar',500);
            $table->string('descripcion', 255);
            $table->date('fecha_post');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('path')->nullable();
            $table->text('contenido');
            $table->integer('contador_visitas')->default(0); // el contador de visitas permitira valores nulos por ahora
             $table->char('estado',1)->default(1);
            $table->integer('id_categorias')->unsigned()->nullable();
            $table->foreign('id_categorias')
                ->references('id')->on('categorias_diversion');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diversion');
    }
}
