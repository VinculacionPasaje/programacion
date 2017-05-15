<?php

use Illuminate\Database\Seeder;
use App\TurismoComunitario;

class TurismoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         TurismoComunitario::create([
            'id'=>1,
            'titulo'=>'titulo de prueba',
            'contenido'=>'<p> Contenido de prueba </p>',
            'fecha'=>'2017-03-17',
            'contador_visitas'=> 0,

        ]);
    }
}
