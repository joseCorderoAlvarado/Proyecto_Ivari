<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estadopedido extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estadopedido')-> insert(array('nombre_Estado'=>'en preparacion'));
        DB::table('estadopedido')-> insert(array('nombre_Estado'=>'listo para enviar'));
        DB::table('estadopedido')-> insert(array('nombre_Estado'=>'en transito'));
        DB::table('estadopedido')-> insert(array('nombre_Estado'=>'finalizado'));
    }
}
