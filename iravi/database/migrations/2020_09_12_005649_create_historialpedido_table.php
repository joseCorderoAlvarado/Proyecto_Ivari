<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialpedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialpedido', function (Blueprint $table) {
                 $table-> datetime('fecha');
                 $table->String('fkfoliopedido',45);
                 $table->foreign('fkfoliopedido')->references('foliopedido')->on('pedido');
                 $table->integer('fkestadopedido')->unsigned();
                 $table->foreign('fkestadopedido')->references('idestadopedido')->on('estadopedido');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historialpedido');
    }
}
