<?php

use Illuminate\Database\Seeder;
use App\Traer;

class TraerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Traer::create([
            'id'=>1,
            'contenido'=>'<p> Contenido de prueba </p>',
            'fecha'=>'2017-03-17',
            'contador_visitas'=> 0,

        ]);

       
    }
}
