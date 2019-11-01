<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class vistaProducto extends Controller
{

	public function mostrar($d){


		$tablaProductos = DB::select('select   * from producto where idproducto=?',[$d]);
		$tablaFotosProducto= DB::select('select idfotoproducto, ruta from fotoproducto where fkproducto=?
			order by idfotoproducto asc ',[$d]);


		return view ('vista_Producto',['tablaProductos'=>$tablaProductos,'tablaFotosProducto'=>$tablaFotosProducto]);
	}
}
?>
