<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\proveedores;
class altaProveedores extends Controller
{
    public function mostrar(){
		
if (session()->has('S_Rol') ) {

		if(session('S_Rol')==1){
		
			return view('alta_Proveedores');
		}



}	
return redirect ('/');

}


public function guardarProveedor(Request $datos){
//dd($datos->all());
$proveedores = new proveedores;
$proveedores->nombreproveedor=$datos->input('nombre');
$proveedores->sucursal=$datos->input('sucursal');
$proveedores->encargado=$datos->input('encargado');
$proveedores->fechaingreso=$datos->input('fechaI');
$proveedores->fechaegreso=$datos->input('fechaE');
$proveedores->sedeprincipal=$datos->input('sede');

$proveedores->save();
return redirect('altaProveedores');
}		

}
