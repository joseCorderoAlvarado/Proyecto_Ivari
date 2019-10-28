<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use App\producto;
use App\fotoproducto;
use Illuminate\Http\Request;
use DB;


	class index_Cliente_Consulta extends Controller
	{
				
		public function mostrar()
		{	
			if (session()->has('S_Rol') ) 
			{
				if (session('S_Rol')==3 ) 
				{
					$productos = DB::select('select    p.*, f.ruta
					from producto p  inner join fotoproducto f on f.idfotoproducto=(
					SELECT idfotoproducto 
					FROM fotoproducto AS f2 
					WHERE f2.fkproducto = p.idproducto 
					order by idfotoproducto asc 
					LIMIT 1
					)
					order by idproducto desc 
					');
					return view('index_Cliente',['productos'=>$productos]);
				}		
			}
			return redirect ('/');
		}	
	}
?>
