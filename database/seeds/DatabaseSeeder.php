<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolTableSeeder::class);
        $this->call(UserTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(MaterialTableSeeder::class);
         $this->call(TraerTableSeeder::class);
          $this->call(RedesTableSeeder::class);
           $this->call(VideoSeeder::class);
             $this->call(FooterTableSeeder::class);
             $this->call(MapasTableSeeder::class);
              $this->call(LlegarTableSeeder::class);
                $this->call(CategoriaActividadesSeeder::class);
             $this->call(CategoriaTuristicaSeeder::class);
               $this->call(CategoriaHospedajeSeeder::class);
             $this->call(TurismoTableSeeder::class);
              $this->call(CategoriaAlimentacionSeeder::class);
              $this->call(CategoriaDiversionSeeder::class);
    }
}
