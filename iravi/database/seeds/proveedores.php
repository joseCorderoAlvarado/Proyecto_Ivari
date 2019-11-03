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
        DB::table('proveedores')-> insert(array('nombreproveedor'=>'PulserasFelipe','sucursal'=>'Ixtlan del Rio','encargado'=>'Felipe Carrillo','fechaingreso'=>'2019-10-01 00:00:00','fechaegreso'=>'2020-09-30 00:00:00','sedeprincipal'=>'Ixtlan del Rio'));
        DB::table('proveedores')-> insert(array('nombreproveedor'=>'Kiosco','sucursal'=>'Ixtlan del Rio','encargado'=>'Presidencia Municipal Ixtlan del Rio','fechaingreso'=>'2019-10-01 00:00:00','fechaegreso'=>'2020-09-30 00:00:00','sedeprincipal'=>'Ixtlan del Rio'));
        DB::table('proveedores')-> insert(array('nombreproveedor'=>'EquipalesMexpan','sucursal'=>'Mexpan','encargado'=>'Señor Mexpeño','fechaingreso'=>'2019-10-01 00:00:00','fechaegreso'=>'2020-09-30 00:00:00','sedeprincipal'=>'Mexpan'));
    }
}
