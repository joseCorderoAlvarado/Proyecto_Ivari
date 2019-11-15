<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritotemporalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritotemporal', function (Blueprint $table) {
            //$table->increments('idcarrito');
            $table->integer('cantidad');
            $table->integer('costo');

            $table->integer('fkproducto')->unsigned()->unique();
            $table->foreign('fkproducto')->references('idproducto')->on('producto');

            $table->integer('fkpersona')->unsigned()->unique();
            $table->foreign('fkpersona')->references('idpersona')->on('persona');
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
        Schema::dropIfExists('carritotemporal');
    }
}
