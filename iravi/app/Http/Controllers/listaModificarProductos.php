<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use Illuminate\Http\Request;
use DB;


	class listaModificarProductos extends Controller
	{
				
		public function mostrar(){
			
			if (session()->has('S_Rol') ) {
			if (session('S_Rol')==1 ) {
				$productos = DB::select('select    p.*, f.ruta 
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.idproducto
   
		LIMIT 1
		)
		');
		
			return view('lista_Productos',['productos'=>$productos]);
		}		
			}
		return redirect ('/');
		}	
			

	}
?>
