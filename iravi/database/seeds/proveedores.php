<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proveedores')-> insert(string('nombreproveedor'=>'PulserasFelipe'));
        DB::table('proveedores')-> insert(string('sucursal'=>'Ixtlan del Rio'));
        DB::table('proveedores')-> insert(string('encargado'=>'Felipe Carrillo'));
        DB::table('proveedores')-> insert(datetime('fechaingreso'=>'2019-10-01 00:00:00'));
        DB::table('proveedores')-> insert(datetime('fechaegreso'=>'2020-09-30 00:00:00'));
        DB::table('proveedores')-> insert(string('sedeprincipal'=>'Ixtlan del Rio'));

        DB::table('proveedores')-> insert(string('nombreproveedor'=>'Kiosco'));
        DB::table('proveedores')-> insert(string('sucursal'=>'Ixtlan del Rio'));
        DB::table('proveedores')-> insert(string('encargado'=>'Presidencia Municipal Ixtlan del Rio'));
        DB::table('proveedores')-> insert(datetime('fechaingreso'=>'2019-10-01 00:00:00'));
        DB::table('proveedores')-> insert(datetime('fechaegreso'=>'2020-09-30 00:00:00'));
        DB::table('proveedores')-> insert(string('sedeprincipal'=>'Ixtlan del Rio'));

        DB::table('proveedores')-> insert(string('nombreproveedor'=>'EquipalesMexpan'));
        DB::table('proveedores')-> insert(string('sucursal'=>'Mexpan'));
        DB::table('proveedores')-> insert(string('encargado'=>'Señor Mexpeño'));
        DB::table('proveedores')-> insert(datetime('fechaingreso'=>'2019-10-01 00:00:00'));
        DB::table('proveedores')-> insert(datetime('fechaegreso'=>'2020-09-30 00:00:00'));
        DB::table('proveedores')-> insert(string('sedeprincipal'=>'Mexpan'));
    }
}
