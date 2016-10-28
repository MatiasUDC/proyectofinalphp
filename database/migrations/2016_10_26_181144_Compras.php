<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('compras', function (Blueprint $table) {
            $table
                ->increments('id');
            $table
                ->integer('id_usuario');
            $table
                ->integer('id_producto');
            $table
                ->integer('id_metodo');
            $table
                ->double('monto');
            $table
                ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::dropIfExists('compras');

    }
}
