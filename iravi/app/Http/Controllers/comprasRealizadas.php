<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class comprasRealizadas extends Controller
{
	
public function mostrar(){
if (session()->has('S_Rol') ) {
	if (session('S_Rol')==3){
	return view ('compras_Realizadas');
	}

}	
return redirect ('/');
}

}
?>