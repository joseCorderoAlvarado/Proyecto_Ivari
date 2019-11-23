<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\direccion;
use App\detallepersonadireccion;
use App\persona;
use App\paqueteria;
use App\pedido;
use App\confirmacioncompra;
use App\carritotemporal;
use App\detallepedido;
use DB;
use DateTime;
class venta extends Controller
{

public function procesarpago(Request $datos){
$cantidad=$datos->input('cantidad');
$precio=$datos->input('precio');
$total=$datos->input('total');
$nombre=$datos->input('nombre');

//Para conseguir el id de la persona//
$correo_Electronico=session('S_identificador');
$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
$idpersona = implode($idpersonaconvert[0]);
	//Fin  conseguir el id de la persona//

$confirmacioncompra = new confirmacioncompra;
$confirmacioncompra->fkidusuario=$idpersona;
$confirmacioncompra->fkiddireccion=$datos->input('direccionSeleccionada');
$confirmacioncompra->fkidpaqueteria=$datos->input('paqueteriaSeleccionada');
$confirmacioncompra->totalProductos=$datos->input('total');
$confirmacioncompra->save();


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

public function realizarpedido() {
	if (session()->has('S_Rol') ) {

		//Para conseguir el id de la persona//
		$correo_Electronico=session('S_identificador');
		$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
		$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
		$idpersona = implode($idpersonaconvert[0]);
			//Fin  conseguir el id de la persona//


			//Conseguimos los productos del carrito temporal para pasarlos al real
			$articuloCarritoCompras = carritotemporal::where('fkpersona', '=', $idpersona)
			                ->get();

			$detallepedido= new detallepedido();









			//Nombre del folio
			$fecha = new DateTime();
			$folio=$fecha->format('Y-m-d_H-i-s')."_".$idpersona;
			//Fin Nombre del folio

			$pedido= new pedido;
			$pedido->foliopedido=$folio;
			$pedido->fecha=	$fecha;
			$pedido->subtotal=	$fecha;
















//			$articuloCarritoCompras = carritotemporal::where('fkproducto', '=', $idProducto)
	//		                ->where('fkpersona', '=', $idpersona)
//			                ->first();
		//	$articuloCarritoCompras->delete();
     }
	}
}

?>
