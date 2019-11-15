<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table)
        {
            $table-> string('foliopedido',45)->unique();
            $table-> datetime('fecha');
            $table-> double('subtotal',13,2);
            $table-> double('descuento',13,2);
            $table-> integer('fkidusuario')->unsigned();
            $table-> foreign('fkidusuario')->references('idusuario')->on('usuario');

            $table-> integer('fkiddireccion')->unsigned();
            $table-> foreign('fkiddireccion')->references('iddireccion')->on('direccion');

            $table-> integer('fkidpaqueteria')->unsigned();
            $table-> foreign('fkidpaqueteria')->references('idpaqueteria')->on('paqueteria');
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
        Schema::dropIfExists('pedido');
    }
}
