<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmacioncompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmacioncompra', function (Blueprint $table) {
          $table->increments('idconfirmacion');

          $table-> integer('fkidusuario')->unsigned();
          $table-> foreign('fkidusuario')->references('idusuario')->on('usuario');

          $table-> integer('fkiddireccion');
          $table-> integer('fkidpaqueteria');
          $table-> float('totalProductos'); //Aqui de una vez guardamos el total, pero solo de los productos, no incluye envio
          $table->timestamp('created_at');
          $table->timestamp('updated_at');
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
        Schema::dropIfExists('confirmacioncompra');
    }
}
