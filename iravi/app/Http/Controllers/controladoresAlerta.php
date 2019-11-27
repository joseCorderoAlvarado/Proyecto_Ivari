<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class ControladoresAlerta extends Controller
{

	public function AlertaCarrito()
	{
		return view ('login');
	} 

	public function AlertaCarrito1()
	{
		return view ('registroUsuario');
	}

	public function AlertaCarritoAnadir()
	{
		return view ('login');
	}
	
	public function AlertaCarritoAdmin()
	{
		return redirect ('login');
	}

	public function anadirProducto()
	{
		return redirect ('login');
	}
	public function anadirProducto1()
	{
		return redirect ('registroUsuario');
	}

	



}

	
?>