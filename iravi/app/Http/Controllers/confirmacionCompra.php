<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\direccion;
use App\detallepersonadireccion;
use App\persona;
use App\paqueteria;
use DB;

class confirmacionCompra extends Controller
{

public function mostrar(){
if (session()->has('S_Rol') ) {
	if (session('S_Rol')==3){



		//Para conseguir el id de la persona//
		$correo_Electronico=session('S_identificador');
		$tablaPersonaPersonalizada=persona::where('correoelectronico', '=', $correo_Electronico)->first();
		$idpersona=$tablaPersonaPersonalizada->idpersona;
			//Fin  conseguir el id de la persona//


			//Para conseguir los Domicilios de la persona//
			$tablaDetalleDireccion=detallepersonadireccion::select('*')
											->join('direccion','direccion.iddireccion','=','fk_direccion')
			                ->where('fkpersona', '=', $idpersona)
			                ->get();


			//Fin conseguir los Domicilios de la persona//


						//Para conseguir las paqueterias//
						$tablaPaqueteria=paqueteria::select('*')->get();
						//Fin las paqueterias//


//carrito de Hipo
$tablaCarrito=DB::select('select p.*, f.ruta,c.* from producto p INNER JOIN carritotemporal c on
p.idproducto=c.fkproducto inner join fotoproducto f on
f.idfotoproducto=( SELECT idfotoproducto FROM fotoproducto
AS f2 WHERE f2.fkproducto = p.idproducto LIMIT 1 ) WHERE c.fkpersona=?',[$idpersona]);
//fin carrito Hipo

	return view ('confirmacion_Compra',['tablaDetalleDireccion'=>$tablaDetalleDireccion,
'tablaPaqueteria'=>$tablaPaqueteria,'tablaCarrito'=>$tablaCarrito]);
	}

}
return redirect ('/');
}

}
?>
