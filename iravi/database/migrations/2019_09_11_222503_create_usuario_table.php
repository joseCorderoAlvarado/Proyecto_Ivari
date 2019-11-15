<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
           $table->increments('idusuario');
            $table->string('contrasena',200);


            $table->integer('fkpersona')->unsigned();
            $table->foreign('fkpersona')->references('idpersona')->on('persona');

            $table->integer('fkrol')->unsigned();
            $table->foreign('fkrol')->references('idrol')->on('roles');
            $table->engine = "InnoDB";

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
