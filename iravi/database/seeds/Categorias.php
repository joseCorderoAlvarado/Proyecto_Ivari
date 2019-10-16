<?php

use Illuminate\Database\Seeder;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')-> insert(array('descripcion'=>'Accesorios'));
        DB::table('categoria')-> insert(array('descripcion'=>'Muebles'));
        DB::table('categoria')-> insert(array('descripcion'=>'Dulces'));

    }
}
