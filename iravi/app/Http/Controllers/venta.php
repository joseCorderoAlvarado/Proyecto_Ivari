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
use App\historialpedido;
use DB;
use DateTime;
class venta extends Controller
{

public function procesarpago(Request $datos){

	//Para conseguir el id de la persona//
$correo_Electronico=session('S_identificador');
$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
$idpersona = implode($idpersonaconvert[0]);
	//Fin  conseguir el id de la persona//


$cantidad=$datos->input('cantidad');
$precio=$datos->input('precio');

$subtotal=$datos->input('subtotal');
$nombre=$datos->input('nombre');

$idPaqueteria=$datos->input('paqueteriaSeleccionada');
$costoPaqueteria= paqueteria::where('idpaqueteria', '=', $idPaqueteria)
						->first();

$costoPaqueteria=$costoPaqueteria->precio;

//total ventas
$totalventas=DB::select('SELECT * from pedido where fkidusuario=?',[$idpersona]);
	$totalventas=count($totalventas)+1;
	if($totalventas%6==0){
     $descuento=$subtotal*0.1;
	$total=$subtotal+$costoPaqueteria-$descuento;
	}else{
		$total=$subtotal+$costoPaqueteria;
	}
//ssss







//Guardamos temporalmente esta infomracion para poder usarla despues de paypal
$confirmacioncompra = new confirmacioncompra;
$confirmacioncompra->fkidusuario=$idpersona;
$confirmacioncompra->fkiddireccion=$datos->input('direccionSeleccionada');
$confirmacioncompra->fkidpaqueteria=$datos->input('paqueteriaSeleccionada');
$confirmacioncompra->totalProductos=$datos->input('subtotal');
$confirmacioncompra->save();
//Fin

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


						//Para datos de la confirmacion//
						$confirmacioncompra = confirmacioncompra::where('fkidusuario', '=', $idpersona)
											->latest()->first();

											$idDireccion=$confirmacioncompra->fkiddireccion;
											$idPaqueteria=$confirmacioncompra->fkidpaqueteria;
											$subtotal=$confirmacioncompra->totalProductos;
						//Fin datos//


$totalventas=DB::select('SELECT * from pedido where fkidusuario=?',[$idpersona]);
	$totalventas=count($totalventas)+1;
	if($totalventas%6==0){
     $descuento=$subtotal*0.1;
	}else{
		     $descuento=0;
	}

			//Nombre del folio
			$fecha = new DateTime();
			$folio=$fecha->format('Y-m-d_H-i-s')."_".$idpersona;
			//Fin Nombre del folio


			//Guardamos los datos de la venta
			$pedido= new pedido;
			$pedido->foliopedido=$folio;
			$pedido->fecha=	$fecha;
			$pedido->subtotal=	$subtotal;
			$pedido->descuento=	$descuento;//Modificacme
				$pedido->fkidusuario=$idpersona;
				$pedido->fkiddireccion=$idDireccion;
				$pedido->fkidpaqueteria=$idPaqueteria;
				$pedido->save();
					//Fin de guardar datos de la venta


			//Conseguimos los productos del carrito temporal para pasarlos al detalle de la venta
			$articuloCarritoCompras = carritotemporal::where('fkpersona', '=', $idpersona)
											->get();

			foreach ($articuloCarritoCompras as $articulo ) {
				$detallepedido = new detallepedido();
				$detallepedido->cantidad=$articulo->cantidad;
				$detallepedido->costo=$articulo->costo;
				$detallepedido->fkproducto=$articulo->fkproducto;
				$detallepedido->fkfoliopedido=$folio;
					$detallepedido->save();
			}
			//Fin de transferencia


			//Insertamos en el historial del pedido
			$historialpedido = new historialpedido();
			$historialpedido->fkfoliopedido=$folio;
			$historialpedido->fkestadopedido=1;
			$historialpedido->fecha=$fecha;
			$historialpedido->save();
			//Fin de la insercion en el historial

		//Borramos el carrito Temporal y los datos de confirmacion
			$articuloCarritoCompras->each->delete();
			$confirmacioncompra = confirmacioncompra::where('fkidusuario', '=', $idpersona)
								->get(); //Para borrar todos, en caso de que se hubiera producido errores
				$confirmacioncompra->each->delete();
			//Fin borrado

			return redirect ('/');




     }
	}
}

?>
