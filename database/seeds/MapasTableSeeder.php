<?php

use Illuminate\Database\Seeder;
use App\Mapas;

class MapasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Mapas::create([
            'id'=> 5000,
            'titulo'=>'mapa para el contador de visitas',
            'descripcion'=>'este registro no debe ser borrado de la BD',
            'contador_visitas'=>0,
            'estado'=>0,

        ]);
    }
}
