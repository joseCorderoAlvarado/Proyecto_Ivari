<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\producto;
use DB;

class buscarProducto extends Controller
{

    public function mostrar(Request $datos){
    	$paginaActual=1;
    	$busquedaNombre=$datos->input('txtBuscar');
    	$rutaPaginacion="busqueda%nombre%".$busquedaNombre."%pagina%";
		//Para sacar los elementos de la pagina n
		$productosPorPagina=9;
		$inicio=$paginaActual*$productosPorPagina-$productosPorPagina;
		$tablaProductos = DB::select('select    p.*, f.ruta
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.idproducto

		LIMIT 1
		) where p.nombreproducto like ? 
		limit ?,?'
		,["%$busquedaNombre%",$inicio,$productosPorPagina]);
		//Para sacar los elementos de la pagina n


		//Todo esto es para sacar el total de paginas que se haran
		$numeroPaginas = DB::select('select    p.*, f.ruta
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.idproducto

		LIMIT 1
		) where p.nombreproducto like ?  '
		,["%$busquedaNombre%"]);
		

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
				return view('index_Cliente',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);

			}

		}
			return view('index',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);

	}



    public function mostrarPaginacion($busquedaNombre,$paginaActual){
    
    	
    	$rutaPaginacion="busqueda%nombre%".$busquedaNombre."%pagina%";
		//Para sacar los elementos de la pagina n
		$productosPorPagina=9;
		$inicio=$paginaActual*$productosPorPagina-$productosPorPagina;
		$tablaProductos = DB::select('select    p.*, f.ruta
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.idproducto

		LIMIT 1
		) where p.nombreproducto like ? 
		limit ?,?'
		,["%$busquedaNombre%",$inicio,$productosPorPagina]);
		//Para sacar los elementos de la pagina n


		//Todo esto es para sacar el total de paginas que se haran
		$numeroPaginas = DB::select('select    p.*, f.ruta
		from producto p  inner join fotoproducto f on f.idfotoproducto=(
		SELECT idfotoproducto
		FROM fotoproducto AS f2
		WHERE f2.fkproducto = p.idproducto

		LIMIT 1
		) where p.nombreproducto like ?  '
		,["%$busquedaNombre%"]);
		

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
				return view('index_Cliente',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);

			}

		}
			return view('index',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,
						'numeroPaginas'=>$numeroPaginas,'rutaPaginacion'=>$rutaPaginacion]);

	}



}




