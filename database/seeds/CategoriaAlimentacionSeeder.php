<?php

use Illuminate\Database\Seeder;
use App\CategoriaAlimentacion;

class CategoriaAlimentacionSeeder extends Seeder
{
    
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaAlimentacion::create([
            'categoria'=>'Restaurantes',
            'descripcion'=>'<p>Categoria para restaurantes en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaAlimentacion::create([
            'categoria'=>'Cafeterías',
            'descripcion'=>'<p>Categoria para cafeterias en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

        CategoriaAlimentacion::create([
            'categoria'=>'Fuentes de Soda',
            'descripcion'=>'<p>Categoria para fuentes de soda en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);
    }
}
