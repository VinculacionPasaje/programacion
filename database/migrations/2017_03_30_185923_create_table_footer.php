<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->string('telefono');
            $table->string('fax');
            $table->string('direccion',200);
            $table->string('web',500);
            $table->string('anio');
            $table->string('email');
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
        Schema::dropIfExists('footer');
    }
}
