<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Personas.
 *
 * @author  The scaffold-interface created at 2016-10-22 06:54:42pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('personas',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('dni');
        
        $table->String('apellido');
        
        $table->String('nombre');
        
        $table->date('fecha_nac');
        
        $table->String('genero');
        
        $table->String('telefono');
        
        $table->integer('id_pais');
        
        $table->String('direccion');
        
        $table->boolean('estado');
        
        /**
         * Foreignkeys section
         */
        
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('personas');
    }
}
