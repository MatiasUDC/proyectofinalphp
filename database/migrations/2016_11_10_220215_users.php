<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100)->nullable();
            $table->string('apellido', 100)->nullable();;
            $table->string('email')->unique();
            $table->string('user', 50)->unique();
            $table->string('password', 60);
            $table->enum('type', ['user', 'admin']);
            $table->boolean('activo');
            $table->text('direccion')->nullable();;
            $table->string('telefono')->nullable();;
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
