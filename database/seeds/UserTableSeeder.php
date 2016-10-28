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
    	//se conecta al modelo user
        factory(App\User::Class)->create([
        	'name' => 'administrador',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('curiqueo') 
        	]);

        factory(App\User::Class)->create([
        	'name' => 'usuario',
        	'email' => 'usuario@usuario.com',
        	'password' => bcrypt('curiqueo') 
        	]);

        //crea 10 usuarios mas por defecto
       // factory(App\User::Class, 10)->create();


    }
}
