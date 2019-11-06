<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use Illuminate\Http\Request;
use DB;


	class listaUsuarios extends Controller
	{
		public function mostrar(){
			$usuarios = DB::select('SELECT p.idpersona,p.correoelectronico, CONCAT(p.nombrepersona, \' \', p.apellidopaterno,\' \',p.apellidomaterno) As nombrecompleto, r.rol FROM iravibd.persona p, iravibd.usuario u, iravibd.roles r where u.fkpersona=p.idpersona and u.fkrol=r.idrol;');
		
			return view('lista_Usuarios',['tablaUsuarios'=>$usuarios]);
		}

	}
?>
