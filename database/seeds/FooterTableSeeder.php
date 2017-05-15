<?php

use Illuminate\Database\Seeder;

use App\Footer;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Footer::create([
            'id'=>1,
            'telefono'=>'(07) 2 915-234 - (07) 2 915-149',
            'fax'=>'(07) 2 913-027',
            'direccion'=> 'Av. Bolívar entre Municipalidad y Juan Montalvo',
            'web'=> 'www.municipiodepasaje.gob.ec',
            'anio'=> '2017',
            'email'=> 'grupoturismopasaje@gmail.com',
            'estado'=> 1,

        ]);
    }
}
