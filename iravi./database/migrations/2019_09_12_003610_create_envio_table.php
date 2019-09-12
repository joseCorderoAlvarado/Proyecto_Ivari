<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio', function (Blueprint $table) {
            $table->increments('idenvio');
            $table->string('caracteristicas', 500);
            $table->float('costo');
                    
            $table->integer('fkventa')->unsigned();
            $table->foreign('fkventa')->references('idventa')->on('venta');

            $table->integer('fkdireccion')->unsigned();
            $table->foreign('fkdireccion')->references('iddireccion')->on('direccion');

            $table->integer('fkpaqueteria')->unsigned();
            $table->foreign('fkpaqueteria')->references('idpaqueteria')->on('paqueteria');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envio');
    }
}
