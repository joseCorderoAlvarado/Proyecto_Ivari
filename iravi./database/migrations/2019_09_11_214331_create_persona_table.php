<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) 
        {
            $table-> increments('idpersona');
            $table-> string('nombrepersona',50);
            $table-> string('apellidopaterno',50);
            $table-> string('apellidomaterno',50);
            $table-> datetime('fechanacimiento');
            $table-> string('correoelectronico',100);
            $table-> string('telefono',25);
    
            $table-> integer('fkgenero')->unsigned();
            $table-> foreign('fkgenero')->references('idgenero')->on('genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
