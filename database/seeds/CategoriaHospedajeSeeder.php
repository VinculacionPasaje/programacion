<?php

use Illuminate\Database\Seeder;
use App\CategoriaHospedaje;
class CategoriaHospedajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaHospedaje::create([
            'categoria'=>'Hoteles',
            'descripcion'=>'<p>Categoria para hoteles en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaHospedaje::create([
            'categoria'=>'Hostales',
            'descripcion'=>'<p>Categoria para hostales en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

        CategoriaHospedaje::create([
            'categoria'=>'Hosterias',
            'descripcion'=>'<p>Categoria para hosterias en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);
    }
}
