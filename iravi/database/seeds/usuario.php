<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuario')-> insert(array('contrasena'=>'Admi1234', 'fkpersona'=>'1', 'fkrol'=>'1'));
		DB::table('usuario')-> insert(array('contrasena'=>'Comprador1', 'fkpersona'=>'2', 'fkrol'=>'3'));
    }
}
