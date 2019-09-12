<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallepersonadireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallepersonadireccion', function (Blueprint $table) {
            
            $table->increments('iddetperdir');
    
            $table->integer('fkpersona')->unsigned();
            
            $table->foreign('fkpersona')->references('idpersona')->on('persona');
            
            $table->integer('fk_direccion')->unsigned();
            
            $table->foreign('fk_direccion')->references('iddireccion')->on('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallepersonadireccion');
    }
}
