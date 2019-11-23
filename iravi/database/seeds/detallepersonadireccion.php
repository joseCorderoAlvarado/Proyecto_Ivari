<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detallepersonadireccion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detallepersonadireccion')-> insert(array('fkpersona'=>'1',
        	'fk_direccion'=>'1'
          ));

          DB::table('detallepersonadireccion')-> insert(array('fkpersona'=>'2',
          	'fk_direccion'=>'2'
            ));
    }
}
