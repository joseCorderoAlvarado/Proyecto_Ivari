<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class ControladoresAlerta extends Controller
{

	public function AlertaCarrito()
	{
		return view ('registroUsuario');
	}

	public function AlertaCarritoAnadir()
	{
		return view ('registroUsuario');
	}
	
	public function AlertaCarritoAdmin()
	{
		return redirect ('registroUsuario');
	}
}
?>