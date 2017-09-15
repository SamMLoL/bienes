<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModificarUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
        });


        Schema::table('users', function (Blueprint $table) {
            $table->integer('rol')->unsigned()->nullable();
            $table->foreign('rol')->references('id')->on('roles');
            $table->integer('registrar')->unsigned()->nullable();
            $table->integer('modificar')->unsigned()->nullable();
            $table->integer('eliminar')->unsigned()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
