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
        DB::table('usuario')-> insert(array('contrasena'=>'1234', 'fkpersona'=>'1', 'fkrol'=>'1'));
    }
}
