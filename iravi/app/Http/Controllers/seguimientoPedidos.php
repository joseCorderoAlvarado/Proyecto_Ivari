<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;



class seguimientoPedidos extends Controller
{
	
public function mostrar(){
if (session()->has('S_Rol') ) {
	
	if (session('S_Rol')==1 ) {
	    $header="Todos los pedidos";
	    $estado1= DB::select('SELECT count(h.fecha) as c FROM historialpedido h, pedido p where fkestadopedido=1 and fkestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) and p.foliopedido=h.fkfoliopedido;');
        $estado2= DB::select('SELECT count(h.fecha) as c FROM historialpedido h, pedido p where fkestadopedido=2 and fkestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) and p.foliopedido=h.fkfoliopedido;');
        $estado3= DB::select('SELECT count(h.fecha) as c FROM historialpedido h, pedido p where fkestadopedido=3 and fkestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) and p.foliopedido=h.fkfoliopedido;');
        $estado4= DB::select('SELECT count(h.fecha) as c FROM historialpedido h, pedido p where fkestadopedido=4 and fkestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) and p.foliopedido=h.fkfoliopedido;');
        $pedidos = DB::select('SELECT p.foliopedido,concat(pe.nombrepersona," ",pe.apellidopaterno," ",pe.apellidomaterno) as nombre,concat(d.calle," #",d.numint, ", ", d.ciudad,", ", d.pais,", ",d.codigopostal)as direccion ,p.fecha, (p.subtotal-p.descuento) as total, e.nombre_Estado as estadopedido from pedido p, paqueteria pa, persona pe, usuario u, direccion d, estadopedido e where p.fkidpaqueteria=pa.idpaqueteria and u.fkpersona=pe.idpersona and p.fkidusuario=u.idusuario and p.fkiddireccion=d.iddireccion and e.idestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) order by fecha desc;');
		return view ('seguimiento_Pedidos',['pedidos'=>$pedidos,'header'=>$header,'estado1'=>$estado1,'estado2'=>$estado2,'estado3'=>$estado3,'estado4'=>$estado4]  );
	}

}

return redirect ('/');
}

public function filtrar(Request $data){
    $estado=$data->input('estado');
        if (session()->has('S_Rol') ) {

            if (session('S_Rol')==1 ) {
                $header="Todos los pedidos";
                $estado1= DB::select('SELECT count(h.fecha) as c FROM historialpedido h, pedido p where fkestadopedido=1 and fkestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) and p.foliopedido=h.fkfoliopedido;');
                $estado2= DB::select('SELECT count(h.fecha) as c FROM historialpedido h, pedido p where fkestadopedido=2 and fkestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) and p.foliopedido=h.fkfoliopedido;');
                $estado3= DB::select('SELECT count(h.fecha) as c FROM historialpedido h, pedido p where fkestadopedido=3 and fkestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) and p.foliopedido=h.fkfoliopedido;');
                $estado4= DB::select('SELECT count(h.fecha) as c FROM historialpedido h, pedido p where fkestadopedido=4 and fkestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc) and p.foliopedido=h.fkfoliopedido;');
                $pedidos = DB::select('SELECT p.foliopedido,concat(pe.nombrepersona," ",pe.apellidopaterno," ",pe.apellidomaterno) as nombre,concat(d.calle," #",d.numint, ", ", d.ciudad,", ", d.pais,", ",d.codigopostal)as direccion ,p.fecha, (p.subtotal-p.descuento) as total, e.nombre_Estado as estadopedido from pedido p, paqueteria pa, persona pe, usuario u, direccion d, estadopedido e where p.fkidpaqueteria=pa.idpaqueteria and u.fkpersona=pe.idpersona and p.fkidusuario=u.idusuario and p.fkiddireccion=d.iddireccion and e.idestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc)and e.nombre_Estado=? order by fecha desc;',[$estado]);
                switch($estado1){
                    case 1:$header="Pedidos en preparación";break;
                    case 2:$header="Pedidos listo para enviar";break;
                    case 3:$header="Pedidos en tránsito";break;
                    case 4:$header="Pedidos finalizados";break;
                    default:break;
                }


                return view ('seguimiento_Pedidos',['pedidos'=>$pedidos,'header'=>$header,'estado1'=>$estado1,'estado2'=>$estado2,'estado3'=>$estado3,'estado4'=>$estado4]  );
            }

        }

        return redirect ('/');
    }


}
?>