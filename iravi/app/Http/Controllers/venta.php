<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\direccion;
use App\detallepersonadireccion;
use App\persona;
use App\paqueteria;
use DB;
class venta extends Controller
{
public function procesarpago(Request $datos){
$cantidad=$datos->input('cantidad');
$precio=$datos->input('precio');
$total=$datos->input('total');
$nombre=$datos->input('nombre');
$paypal_business = "sb-l1ivw619927@business.example.com";
	$paypal_currency = "MXN";
	$paypal_cursymbol = "&mxn";
	$paypal_location = "MX";
	$paypal_returnurl = "http://localhost/Proyecto_Ivari/iravi/public/venta";
	$paypal_returntxt = "Pago Realizado Exitosamente!";
	$paypal_cancelurl = "http://localhost/Proyecto_Ivari/iravi/public/carritoCompras";
$ppurl = "https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_cart";
	$ppurl .= "&business=".$paypal_business;
	$ppurl .= "&no_note=1";
	$ppurl .= "&currency_code=".$paypal_currency;
	$ppurl .= "&charset=utf-8&rm=1&upload=1";
	$ppurl .= "&business=".$paypal_business;
	$ppurl .= "&return=".urlencode($paypal_returnurl);
	$ppurl .= "&cancel_return=".urlencode($paypal_cancelurl);
	$ppurl.="&item_name_1="."productos"."&quantity_1=$total&amount_1="."1"."&item_number_1=";
	$ppurl.= "&tax_cart=0.00";
return redirect ($ppurl);
}
public function realizarpedido(){
	if (session()->has('S_Rol') ) {
		if(session('S_Rol')==3){
			//consulta para obtener el id de la persona
			$correo_Electronico=session('S_identificador');
			$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
			$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
			$idpersona = implode($idpersonaconvert[0]);
			//fin de consulta id de la persona

			//consulta para obtener los id de los productos del carrito
		  $carrito=DB::select('select idproducto from producto p INNER JOIN carritotemporal c on
	    p.idproducto=c.fkproducto inner join fotoproducto f on
	    f.idfotoproducto=( SELECT idfotoproducto FROM fotoproducto
	     AS f2 WHERE f2.fkproducto = p.idproducto LIMIT 1 ) WHERE c.fkpersona=?',[$idpersona]);
			$array_num = count($carrito);
     for ($i = 0; $i < $array_num; ++$i){
		  $idproductoconvert= json_decode( json_encode($carrito[$i]), true);
	 		$idProducto = implode($idproductoconvert);
			//fin de consulta para obtener los id de los productos del carrito
	 		echo "$idProducto";
//			$articuloCarritoCompras = carritotemporal::where('fkproducto', '=', $idProducto)
	//		                ->where('fkpersona', '=', $idpersona)
			                ->first();
		//	$articuloCarritoCompras->delete();
     }
	}
}
}
}
?>
