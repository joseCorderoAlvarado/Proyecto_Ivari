<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) 
        {
            $table-> increments('idventa');
            $table-> string('folio',45);
            $table-> integer('cantidad');
            $table-> double('costo',8,5);
            $table-> datetime('fecha');
            
            $table-> integer('fkbonificacion');
            $table-> foreign('fkbonificacion')->references('idbonificacion')->on('bonificacion');

            $table-> integer('fkproducto');
            $table-> foreign('fkproducto')->references('idproducto')->on('producto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
