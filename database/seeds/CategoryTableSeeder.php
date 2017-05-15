<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre'=>'Deportes',
            'descripcion'=>'Categoria para las noticias de deportes en Pasaje',
            'estado'=>'1',

        ]);

         Categoria::create([
            'nombre'=>'Culturales',
            'descripcion'=>'Categoria para las noticias culturales en Pasaje',
            'estado'=>'1',

        ]);

         Categoria::create([
            'nombre'=>'Sociales',
            'descripcion'=>'Categoria para las noticias sociales en Pasaje',
            'estado'=>'1',

        ]);
    }
}
