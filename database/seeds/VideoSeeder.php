<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'id'=>1,
            'titulo'=>'Pasaje, provincia de tesoros escondidos',
            'descripcion'=>'¿Nunca has sentido que te falta algo?. Todos llegamos a ese punto en el que necesitamos algo que nos haga conectar con una parte nueva de nosotros, que aún no conocíamos. Y Pasaje, es el lugar para encontrarlo.',
            'url'=>'https://www.youtube.com/watch?v=SDTZ7iX4vTQ',
            

        ]);

       
    }
}
