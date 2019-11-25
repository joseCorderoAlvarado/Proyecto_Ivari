<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\carritotemporal;
use App\producto;
use DB;
class controlador_carritoCompras extends Controller
{
	public function mostrar(){
if (session()->has('S_Rol') ) {
	if(session('S_Rol')==3){
		$correo_Electronico=session('S_identificador');
		$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
		$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
		$idpersona = implode($idpersonaconvert[0]);
	$carrito=DB::select('select p.*, f.ruta,c.* from producto p INNER JOIN carritotemporal c on
 p.idproducto=c.fkproducto inner join fotoproducto f on
f.idfotoproducto=( SELECT idfotoproducto FROM fotoproducto
 AS f2 WHERE f2.fkproducto = p.idproducto LIMIT 1 ) WHERE c.fkpersona=?',[$idpersona]);
	$totalventas=DB::select('SELECT * from pedido where fkidusuario=?',[$idpersona]);
	$totalventas=count($totalventas)+1;
	if($totalventas%6==0){
      $descuento="true";
	}else{
		$descuento="false";
	}
	return view('carrito_Compras',['carrito'=>$carrito,'descuento'=>$descuento]);

}
}
return redirect ('/');

}

public function guardarcarrito(Request $datos) {
	//Para conseguir el id de la persona//
	$correo_Electronico=session('S_identificador');
	$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
	$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
	$idpersona = implode($idpersonaconvert[0]);
		//Fin  conseguir el id de la persona//

//Para conseguir el precio del producto//
	$idProducto=$datos->input('idProducto');
	$producto=producto::find($idProducto);
	$costo=$producto->precio;
//Fin de conseguir el precio//
$carritoCompras = carritotemporal::where('fkproducto', '=', $idProducto)
                ->where('fkpersona', '=', $idpersona)
                ->first();

	if($carritoCompras==null)			{
		
$carritoCompras = new carritotemporal;
$carritoCompras->fkpersona=$idpersona;
$carritoCompras->fkproducto=$idProducto;
$carritoCompras->costo=$costo;
$carritoCompras->cantidad=$datos->input('cantidad');
$carritoCompras->save();

}else{

	$cantidadActual=$carritoCompras->cantidad;

	$carritoCompras->fkproducto=$idProducto;
	$carritoCompras->costo=$costo;
	$carritoCompras->cantidad=$cantidadActual+$datos->input('cantidad');
	$carritoCompras->save();
}

return redirect('carritoCompras	');
}


public function modificarCarrito (Request $datos){
	//Para conseguir el id de la persona//
	$correo_Electronico=session('S_identificador');
	$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
	$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
	$idpersona = implode($idpersonaconvert[0]);
		//Fin  conseguir el id de la persona//

//Para conseguir el precio del producto//
	$idProducto=$datos->input('idProducto');
	$producto=producto::find($idProducto);
	$costo=$producto->precio;
//Fin de conseguir el precio//


$articuloCarritoCompras = carritotemporal::where('fkproducto', '=', $idProducto)
                ->where('fkpersona', '=', $idpersona)
                ->first();

$articuloCarritoCompras->fkproducto=$idProducto;
$articuloCarritoCompras->costo=$costo;
$articuloCarritoCompras->cantidad=$datos->input('cantidad');
$articuloCarritoCompras->save();
return redirect('carritoCompras');
}

public function eliminarCarrito (Request $datos){
	//Para conseguir el id de la persona//
	$correo_Electronico=session('S_identificador');
	$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
	$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
	$idpersona = implode($idpersonaconvert[0]);
		//Fin  conseguir el id de la persona//
	$idProducto=$datos->input('idProducto');
$articuloCarritoCompras = carritotemporal::where('fkproducto', '=', $idProducto)
                ->where('fkpersona', '=', $idpersona)
                ->first();
$articuloCarritoCompras->delete();
return redirect('carritoCompras');

}
}
?>
