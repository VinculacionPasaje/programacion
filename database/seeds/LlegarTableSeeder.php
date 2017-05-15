<?php

use Illuminate\Database\Seeder;
use App\Llegar;

class LlegarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Llegar::create([
            'id'=> 5000,
            'titulo'=>'este registro no debe ser borrado de la BD',
            'contenido'=>'este registro no debe ser borrado de la BD',
            'script'=>'este registro no debe ser borrado de la BD',
            'contador_visitas'=>0,
            'estado'=>0,

        ]);
    }
}
