<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoproductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotoproducto', function (Blueprint $table) {
           $table-> increments('idfotoproducto');
           $table-> string('ruta');


            $table-> integer('fkproducto')->unsigned();
            $table-> foreign('fkproducto')->references('idproducto')->on('producto');
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
        Schema::dropIfExists('fotoproducto');
    }
}
