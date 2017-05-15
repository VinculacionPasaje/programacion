<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('path')->nullable(); //nullable significa que permite valores nulos
             $table->char('estado',1)->default(1);
            $table->integer('id_roles')->unsigned();
            $table->rememberToken();
            $table->foreign('id_roles')
                ->references('id')->on('roles');
           
           
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
