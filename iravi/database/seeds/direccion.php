<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class direccion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('direccion')-> insert(array('calle'=>'Mercado',
        	'numint'=>'7',
        	'numext'=>'0',
        	'colonia'=>'centro',
        	'municipio'=>'Ixtlan del rio',
        	'ciudad'=>'Ixtlan del rio',
        	'pais'=>'mexico',
        	'codigopostal'=>'63940',
        	'fktipo'=>'1'));
			
			DB::table('direccion')-> insert(array('calle'=>'Ceboruco',
        	'numint'=>'100',
        	'numext'=>'0',
        	'colonia'=>'centro',
        	'municipio'=>'Jala',
        	'ciudad'=>'Jala',
        	'pais'=>'mexico',
        	'codigopostal'=>'63945',
        	'fktipo'=>'1'));
    }
}
