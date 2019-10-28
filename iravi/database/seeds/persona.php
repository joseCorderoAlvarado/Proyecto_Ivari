<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class persona extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('persona')-> insert(array('nombrepersona'=>'Ramon',
        	'apellidopaterno'=>'Diaz',
        	'apellidomaterno'=>'Espinoza',
        	'fechanacimiento'=>'1995-10-08 00:00:00',
        	'correoelectronico'=>'admi@gmail.com',
        	'telefono'=>'3241061212',
        	'fkgenero'=>'1'));

    }
}
