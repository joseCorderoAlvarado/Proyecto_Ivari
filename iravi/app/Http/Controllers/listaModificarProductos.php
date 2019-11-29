<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use Illuminate\Http\Request;
use DB;
use App\producto;


	class listaModificarProductos extends Controller
{

		public function mostrar($paginaActual)
		{

			if (session()->has('S_Rol') ) {//Solo si esta registrado puede entra
				if (session('S_Rol')==1 ) {//Solo si es admin puede entrar



					//Para sacar los elementos de la pagina n
					$productosPorPagina=9;
					$inicio=$paginaActual*$productosPorPagina-$productosPorPagina;
					$tablaProductos = DB::select('select    p.*, f.ruta
					from producto p  inner join fotoproducto f on f.idfotoproducto=(
					SELECT idfotoproducto
					FROM fotoproducto AS f2
					WHERE f2.fkproducto = p.idproducto and p.fkestatus=1

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

					return view('lista_Productos',['tablaProductos'=>$tablaProductos,'paginaActual'=>$paginaActual,'numeroPaginas'=>$numeroPaginas]);


			}
		}
		return redirect ('/');
	}

		public function eliminar(Request $data)
		{
			$idProducto=$data->input('id');
			$producto=producto::find($idProducto);
			$producto->fkestatus=2;
			$producto->save();


			return redirect ('/listaModificarProductos-pagina1');
		}

	}

?>
