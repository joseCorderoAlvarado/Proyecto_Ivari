<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table)
         {
             $table->increments('idproveedores');
             $table->string('nombreproveedor',50);
             $table->string('sucursal',50);
             $table->string('encargado',50);
             $table->datetime('fechaingreso');
             $table->datetime('fechaegreso');
             $table->string('sedeprincipal',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
