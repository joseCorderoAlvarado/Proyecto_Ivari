<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;



class comprasRealizadas extends Controller
{
	
public function mostrar(){
if (session()->has('S_Rol') ) {
	if (session('S_Rol')==3){
		$correo_Electronico=session('S_identificador');
		$consultaidusuario = DB::select('select usuario.idusuario from usuario inner join persona on usuario.fkpersona=persona.idpersona where persona.correoelectronico=?',[$correo_Electronico]);
		$idusuarioconvert= json_decode( json_encode($consultaidusuario), true);
		$idusuario = implode($idusuarioconvert[0]);
	
	$consultaSeguimiento=DB::select('select foliopedido,pedido.fecha,descuento,paqueteria.nombre, producto.nombreproducto from pedido 
									inner join detallepedido on pedido.foliopedido=detallepedido.fkfoliopedido 
									inner join paqueteria on pedido.fkidpaqueteria=paqueteria.idpaqueteria 
									inner join producto on detallepedido.fkproducto=producto.idproducto 
									inner join historialpedido on pedido.foliopedido=historialpedido.fkfoliopedido 
									where historialpedido.fkestadopedido=4 and pedido.fkidusuario=?',[$idusuario]); 
	return view ('compras_Realizadas',['consultaSeguimiento'=>$consultaSeguimiento]);
	}

}	
return redirect ('/');
}

}
?>