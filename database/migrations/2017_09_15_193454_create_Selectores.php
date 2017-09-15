<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mig_selectT1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
            $table->timestamps();
        });

        Schema::create('mig_selectT2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
            $table->timestamps();
        });

        Schema::create('mig_selectT21', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
            $table->timestamps();
        });

        Schema::create('mig_selectT22', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
            $table->timestamps();
        });

        Schema::create('mig_selectT23', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT24', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT25', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT26', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT27', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT28', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT31', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT32', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT33', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT34', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT4', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT41', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT5', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT51', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
             $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('mig_selectT5');
            $table->timestamps();
        });

        Schema::create('mig_selectT52', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->integer('codMarca_id')->unsigned();
            $table->foreign('codMarca_id')->references('id')->on('mig_selectT51');
            $table->timestamps();
        });

        Schema::create('mig_selectT6', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT61', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT62', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
            $table->timestamps();
        });

        Schema::create('mig_selectT63', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion');
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
        Schema::dropIfExists('Selectores');
    }
}
