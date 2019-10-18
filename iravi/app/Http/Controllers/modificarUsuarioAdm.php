<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class modificarUsuarioAdm extends Controller
{
	
public function mostrar(){
if (session()->has('S_Rol') ) {
	
	if (session('S_Rol')==1 ) {
		return view ('modificar_UsuarioAdm');
	}

}	
return redirect ('/');
}

}
?>