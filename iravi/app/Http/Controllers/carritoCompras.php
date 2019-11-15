<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\persona;
use DB;
class carritoCompras extends Controller
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
	return view('carrito_Compras',['carrito'=>$carrito]);
}
}
return redirect ('/');
}

public function guardarcarrito(Request $data){
$consultaidproducto = DB::table('producto')->get('idproducto')->toArray();
$consultaprecio = DB::table('producto')->get('precio')->toArray();
$cantidad=$data->input('cantidad');
$idproductoconvert =json_decode( json_encode($consultaidproducto), true);
$idproducto=implode($idproductoconvert[0]);
$precioconvert=json_decode( json_encode($consultaprecio), true);
$precio=implode($precioconvert[0]);
$correo_Electronico=session('S_identificador');
$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
$idpersona = implode($idpersonaconvert[0]);
$guardardatosCarrito=DB::table('carritotemporal')->insert(
['cantidad'=>$cantidad,'costo'=> $precio ,'fkproducto'=> $idproducto , 'fkpersona'=> $idpersona]
	 );
return redirect('/');
}

public function guardarcarrito(Request $data){
$consultaidproducto = DB::table('producto')->get('idproducto')->toArray();
$consultaprecio = DB::table('producto')->get('precio')->toArray();
$cantidad=$data->input('cantidad');
$idproductoconvert =json_decode( json_encode($consultaidproducto), true);
$idproducto=implode($idproductoconvert[0]);
$precioconvert=json_decode( json_encode($consultaprecio), true);
$precio=implode($precioconvert[0]);
$correo_Electronico=session('S_identificador');
$consultaidpersona = DB::select('select idpersona from persona where correoelectronico=?',[$correo_Electronico]);
$idpersonaconvert= json_decode( json_encode($consultaidpersona), true);
$idpersona = implode($idpersonaconvert[0]);
$guardardatosCarrito=DB::table('carritotemporal')->insert(
['cantidad'=>$cantidad,'costo'=> $precio ,'fkproducto'=> $idproducto , 'fkpersona'=> $idpersona]
	 );
return redirect('/');
}

}
?>
