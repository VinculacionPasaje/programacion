<?php

use Illuminate\Database\Seeder;
use App\CategoriaDiversion;

class CategoriaDiversionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaDiversion::create([
            'categoria'=>'Discotecas',
            'descripcion'=>'<p>Categoria para Discotecas en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaDiversion::create([
            'categoria'=>'Centro de Eventos',
            'descripcion'=>'<p>Categoria para Centro de Eventos en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

        CategoriaDiversion::create([
            'categoria'=>'Bares',
            'descripcion'=>'<p>Categoria para Bares en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

          CategoriaDiversion::create([
            'categoria'=>'Karaokes',
            'descripcion'=>'<p>Categoria para Karaokes en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);
    }
}
