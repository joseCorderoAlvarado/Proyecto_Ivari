<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use Illuminate\Http\Request;
use DB;

class perfilUsuario extends Controller
{
	
	public function mostrar()
	{
		$idusuario = session()->get('idusuario');

		if (session()->has('S_Rol') ) 
		{
			if (session('S_Rol')==3)
			{
				$usuarioDatos = DB::select('SELECT persona.idpersona, persona.nombrepersona, persona.apellidopaterno, persona.apellidomaterno, persona.correoelectronico, usuario.contrasena FROM iravibd.usuario inner join persona on usuario.fkpersona = persona.idpersona where idusuario=?',[$idusuario]);

				return view ('perfil_Usuario',['usuarioDatos'=>$usuarioDatos]);
			}
		}	
		return redirect ('/');
	}
}
?>