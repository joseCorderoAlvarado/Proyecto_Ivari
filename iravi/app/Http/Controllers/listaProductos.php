<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use Illuminate\Http\Request;
use DB;


	class listaProductos extends Controller
	{
		public function mostrar(){
			$productos = DB::select('select p.*, f.ruta from producto p inner join fotoproducto f on f.idfotoproducto=( SELECT idfotoproducto FROM fotoproducto AS f2 WHERE f2.fkproducto = p.idproducto and p.fkestatus=1 LIMIT 1)');
		
			return view('lista_Productos',['productos'=>$productos]);
		}

	}
?>
