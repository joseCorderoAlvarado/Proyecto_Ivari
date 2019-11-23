<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class paqueteria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('paqueteria')-> insert(array('idpaqueteria'=>'1',
        	'nombre'=>'DHL',
          'precio'=>'220'
          ));

          DB::table('paqueteria')-> insert(array('idpaqueteria'=>'2',
            'nombre'=>'FEDEX',
          	'precio'=>'150'
            ));
    }
}
