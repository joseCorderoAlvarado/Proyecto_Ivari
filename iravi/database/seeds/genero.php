<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genero extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genero')-> insert(array('sexo'=>'Masculino'));
        DB::table('genero')-> insert(array('sexo'=>'Femenino'));
        
    }
}
