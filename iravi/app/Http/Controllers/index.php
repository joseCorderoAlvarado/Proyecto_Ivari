<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class index extends Controller
{
	
public function mostrar(){
if (session()->has('S_Rol') ) {
	
	if (session('S_Rol')==1 ) {
		return view ('index_Admin');
	}else if(session('S_Rol')==3){
		return view ('index_Cliente');
		
	}

}	
return view ('index');
}

}
?>