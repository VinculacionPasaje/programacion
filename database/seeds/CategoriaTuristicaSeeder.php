<?php

use Illuminate\Database\Seeder;
use App\CategoriaTuristica;

class CategoriaTuristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaTuristica::create([
            'categoria'=>'Parroquias',
            'descripcion'=>'<p>Categoria para parroquia</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaTuristica::create([
            'categoria'=>'Iglesias',
            'descripcion'=>'<p>Categoria para iglesias</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaTuristica::create([
            'categoria'=>'Parques y Monumentos',
            'descripcion'=>'<p>Categoria para parques y monumentos</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaTuristica::create([
            'categoria'=>'Rutas Turísticas',
            'descripcion'=>'<p>Categoria para rutas turisticas</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaTuristica::create([
            'categoria'=>'Sitios Tradicionales',
            'descripcion'=>'<p>Categoria para sitios tradicionales</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaTuristica::create([
            'categoria'=>'Manifestaciones Culturales',
            'descripcion'=>'<p>Categoria para manifestaciones culturales</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaTuristica::create([
            'categoria'=>'Sitios Arqueológicos',
            'descripcion'=>'<p>Categoria para sitios arqueológicos</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);

         CategoriaTuristica::create([
            'categoria'=>'Sitios Naturales',
            'descripcion'=>'<p>Categoria para sitios naturales</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);
    }
}
