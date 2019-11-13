<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipodireccion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
  
        DB::table('tipodireccion')-> insert(array('tipo'=>'Envio'));
       
    }
}