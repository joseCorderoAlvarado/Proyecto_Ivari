<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\producto;
use App\fotoproducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DateTime;
use App\Http\Requests\subidaFotoRequest;
use DB;

class detallePedido extends Controller
{
	public function mostrar(Request $data)
	{	
		if (session()->has('S_Rol') ) 
		{
			if(session('S_Rol')==1)
			{
				return view('estatus_Pedido');
			}
		}	
		return redirect ('/');
	}	

}

?>