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
        DB::table('proveedores')-> insert(array('idproveedores'=>'1'));
        DB::table('proveedores')-> insert(array('nombreproveedor'=>'PulserasFelipe'));
        DB::table('proveedores')-> insert(array('sucursal'=>'Ixtlan del Rio'));
        DB::table('proveedores')-> insert(array('encargado'=>'Felipe Carrillo'));
        DB::table('proveedores')-> insert(array('fechaingreso'=>'2019-10-01 00:00:00'));
        DB::table('proveedores')-> insert(array('fechaegreso'=>'2020-09-30 00:00:00'));
        DB::table('proveedores')-> insert(array('sedeprincipal'=>'Ixtlan del Rio'));

        DB::table('proveedores')-> insert(array('idproveedores'=>'2'));
        DB::table('proveedores')-> insert(array('nombreproveedor'=>'Kiosco'));
        DB::table('proveedores')-> insert(array('sucursal'=>'Ixtlan del Rio'));
        DB::table('proveedores')-> insert(array('encargado'=>'Presidencia Municipal Ixtlan del Rio'));
        DB::table('proveedores')-> insert(array('fechaingreso'=>'2019-10-01 00:00:00'));
        DB::table('proveedores')-> insert(array('fechaegreso'=>'2020-09-30 00:00:00'));
        DB::table('proveedores')-> insert(array('sedeprincipal'=>'Ixtlan del Rio'));

        DB::table('proveedores')-> insert(array('idproveedores'=>'3'));
        DB::table('proveedores')-> insert(array('nombreproveedor'=>'EquipalesMexpan'));
        DB::table('proveedores')-> insert(array('sucursal'=>'Mexpan'));
        DB::table('proveedores')-> insert(array('encargado'=>'Señor Mexpeño'));
        DB::table('proveedores')-> insert(array('fechaingreso'=>'2019-10-01 00:00:00'));
        DB::table('proveedores')-> insert(array('fechaegreso'=>'2020-09-30 00:00:00'));
        DB::table('proveedores')-> insert(array('sedeprincipal'=>'Mexpan'));
    }
}
