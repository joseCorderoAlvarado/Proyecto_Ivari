<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallepedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('detallepedido', function (Blueprint $table) {
          $table->increments('iddetallepedido');
          $table->integer('cantidad');
          $table->integer('costo');
          $table->integer('fkproducto')->unsigned();
          $table->foreign('fkproducto')->references('idproducto')->on('producto');
          $table->String('fkfoliopedido',45);
          $table->foreign('fkfoliopedido')->references('foliopedido')->on('pedido');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallepedido');
    }
}
