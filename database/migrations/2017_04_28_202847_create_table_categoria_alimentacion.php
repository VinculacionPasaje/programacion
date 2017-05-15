<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoriaAlimentacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_alimentacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categoria');
            $table->text('descripcion');
             $table->integer('contador_visitas')->nullable(); // el contador de visitas permitira valores nulos por ahora
            $table->string('estado',1)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_alimentacion');
    }
}
