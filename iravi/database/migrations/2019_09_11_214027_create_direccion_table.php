<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) 
        {
            $table-> increments('iddireccion');
            $table-> string('calle',50);
            $table-> string('numint',50)->nullable();
            $table-> string('numext',50);
            $table-> string('colonia',50);
            $table-> string('municipio',50);
            $table-> string('ciudad',50);
            $table-> string('pais',50);
            $table-> string('codigopostal',8);
    
            $table-> integer('fktipo')->unsigned();
            $table-> foreign('fktipo')->references('idtipo')->on('tipodireccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion');
    }
}
