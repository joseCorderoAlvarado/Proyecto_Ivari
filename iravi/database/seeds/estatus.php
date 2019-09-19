<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatus')-> insert(array('descripcion'=>'Activo'));
        DB::table('estatus')-> insert(array('descripcion'=>'Inactivo'));

		
	}
}
