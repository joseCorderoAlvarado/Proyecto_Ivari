<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\producto;
use App\fotoproducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DateTime;
use App\Http\Requests\subidaFotoRequest;
use DB;
use App\historialpedido;
use Carbon\Carbon;

class detallePedido extends Controller
{
	public function mostrar(Request $data)
	{	
		if (session()->has('S_Rol') ) 
		{
            if(session('S_Rol')==1)
			{
                $folio=$data->input('id');
                $pedido = DB::select('SELECT p.foliopedido,concat(pe.nombrepersona," ",pe.apellidopaterno," ",pe.apellidomaterno) as nombre,concat(d.calle," #",d.numint, ", ", d.ciudad,", ", d.pais,", ",d.codigopostal)as direccion ,p.fecha, (p.subtotal-p.descuento) as total, e.idestadopedido from pedido p, paqueteria pa, persona pe, usuario u, direccion d, estadopedido e where p.fkidpaqueteria=pa.idpaqueteria and u.fkpersona=pe.idpersona and p.fkidusuario=u.idusuario and p.fkiddireccion=d.iddireccion and e.idestadopedido in(select max(fkestadopedido) from historialpedido where fkfoliopedido=p.foliopedido order by fecha desc)and p.foliopedido=? order by fecha desc;',[$folio]);
                $productos = DB::select('SELECT p.idproducto, p.nombreproducto,d.costo,d.cantidad FROM detallepedido d, producto p where d.fkproducto=idproducto and d.fkfoliopedido=? ;',[$folio]);
                $historial = DB::select('SELECT h.fecha,e.nombre_Estado FROM historialpedido h, estadopedido e where h.fkfoliopedido=? and h.fkestadopedido=e.idestadopedido order by fecha desc;',[$folio]);
                return view('estatus_Pedido',['pedido'=>$pedido,'productos'=>$productos,'historial'=>$historial]);

			}
		}	
		return redirect ('/');
	}

    public function actualizar(Request $data)
    {
        $folio=$data->input('id');
        $estado=$data->input('estado');
        $historialpedido = new historialpedido;
        $historialpedido->fecha=Carbon::now();
        $historialpedido->fkfoliopedido=$folio;
        $historialpedido->fkestadopedido=$estado;
        $historialpedido->save();
        return redirect ('/seguimientoPedidos   ');

    }
    }

?>