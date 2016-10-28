<?php

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    	//se conecta al modelo user
        factory(App\Role::Class)->create([

        	//'id' 	=> '1'
        	'name'	=>	'admin',
        	'label'	=>	'Administrador'

        	]);

    }
}
