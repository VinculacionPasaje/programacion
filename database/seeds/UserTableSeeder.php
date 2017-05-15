<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Super',
            'apellido'=>'Admin',
            'email'=> 'jfnando@hotmail.com',
            'password'=> bcrypt('123456'),
            'id_roles'=>'1',


        ]);
       
    }
}
