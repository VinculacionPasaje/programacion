<?php

use Illuminate\Database\Seeder;
use App\Redes;

class RedesTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Redes::create([
            'id'=> 1,
            'url'=>'https://www.facebook.com/municipiodepasaje',
            'descripcion'=>'Red social para facebook',

        ]);

        Redes::create([
              'id'=> 2,
            'url'=>'https://www.twitter.com',
            'descripcion'=>'Red social para Twitter',

        ]);

        Redes::create([
              'id'=> 3,
            'url'=>'https://www.instagram.com',
            'descripcion'=>'Red social para instagram',

        ]);

        Redes::create([
              'id'=> 4,
            'url'=>'https://www.youtube.com',
            'descripcion'=>'Red social para youtub',

        ]);
    }
}
