<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\producto;
use App\fotoproducto;
use App\persona;
use DB;

use Illuminate\Http\Request;

class indexMostrar extends Controller
{



	public function mostrar(){
		$rutaPaginacion="paginaD%";
		//Para sacar los elementos de la primera pagina
		$inicio=0;
		$paginaActual=1;
		$productosPorPagina=9;
		$tablaProductos = DB::select('select    p.*, f.ruta
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.idproducto and p.fkestatus=1
		LIMIT 1
		) limit ?,?'
		,[$inicio,$productosPorPagina]);
			//Para sacar los elementos de la primera pagina


		//Todo esto es para sacar el total de paginas que se haran
		$numeroPaginas = DB::select('select    p.*, f.ruta
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.idproducto and p.fkestatus=1

		LIMIT 1
		)');

		$numeroPaginas= count($numeroPaginas);
		$numeroPaginas= ceil($numeroPaginas/$productosPorPagina);
		////Todo esto es para sacar el total de paginas que se haran

		if (session()->has('S_Rol') )
		{

			if (session('S_Rol')==1 )
			{

					return view('index_Admin',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);
			}
			else if(session('S_Rol')==2)
			{
				return view('index_Editor',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);


			}
			else if(session('S_Rol')==3)
			{
				return view('indexMostrar',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);

			}

		}
			return view('index',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);
	}



	//Por mientas, luego se pueden funcionar las dos funciones
	public function mostrarPaginacion($paginaActual){
		$rutaPaginacion="paginaD%";
		//Para sacar los elementos de la pagina n
		$productosPorPagina=9;
		$inicio=$paginaActual*$productosPorPagina-$productosPorPagina;
		$tablaProductos = DB::select('select    p.*, f.ruta
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.fkcategoria and p.fkestatus=1
		LIMIT 1
		) limit ?,?'
		,[$inicio,$productosPorPagina]);
		//Para sacar los elementos de la pagina n


		//Todo esto es para sacar el total de paginas que se haran
		$numeroPaginas = DB::select('select    p.*, f.ruta
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.idproducto and p.fkestatus=1

		LIMIT 1
		)');

		$numeroPaginas= count($numeroPaginas);
		$numeroPaginas= ceil($numeroPaginas/$productosPorPagina);
		////Todo esto es para sacar el total de paginas que se haran


		if (session()->has('S_Rol') )
		{

			if (session('S_Rol')==1 )
			{

					return view('index_Admin',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);
			}
			else if(session('S_Rol')==2)
			{
				return view('index_Editor',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);


			}
			else if(session('S_Rol')==3)
			{
				return view('indexMostrar',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);

			}

		}
			return view('index',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);

	}


}


?>
