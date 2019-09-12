<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) 
        {
            $table-> increments('idproducto');
            $table-> string('nombreproducto',100);
            $table-> string('descripcionproducto',200);
            $table-> double('precio',8,5);
            $table-> binary('imagen');
            
            
            $table-> integer('fkcategoria');
            $table-> foreign('fkcategoria')->references('idcategoria')->on('categoria');

            $table-> integer('fkproveedores');
            $table-> foreign('fkproveedores')->references('idproveedores')->on('proveedores');

            $table-> integer('fkestatus');
            $table-> foreign('fkestatus')->references('idestatus')->on('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
