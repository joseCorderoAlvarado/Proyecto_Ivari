<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class seguimientoPedidos extends Controller
{
	
public function mostrar(){
if (session()->has('S_Rol') ) {
	
	if (session('S_Rol')==1 ) {
		return view ('seguimiento_Pedidos');
	}

}	
return redirect ('/');
}

}
?>