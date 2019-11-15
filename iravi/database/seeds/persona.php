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
        DB::table('persona')-> insert(array('nombrepersona'=>'Admin',
        	'apellidopaterno'=>'Contreras',
        	'apellidomaterno'=>'Cruz',
        	'fechanacimiento'=>'1995-10-08 00:00:00',
        	'correoelectronico'=>'admi@gmail.com',
        	'telefono'=>'3241061212',
        	'fkgenero'=>'1'));
			
			    DB::table('persona')-> insert(array('nombrepersona'=>'Usuario',
        	'apellidopaterno'=>'Verdin',
        	'apellidomaterno'=>'Montaña',
        	'fechanacimiento'=>'1996-10-08 00:00:00',
        	'correoelectronico'=>'comprador@gmail.com',
        	'telefono'=>'3241061212',
        	'fkgenero'=>'1'));

    }
}
