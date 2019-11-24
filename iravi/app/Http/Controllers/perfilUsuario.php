<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use App\detallepersonadireccion;
use App\direccion;
use Illuminate\Http\Request;
use DB;

class perfilUsuario extends Controller
{
	
	public function mostrar()
	{

		if (session()->has('S_Rol') ) 
		{
			if (session('S_Rol')==3)
			{
				$correo_Electronico = session('S_identificador');

				$consultaid = DB::select('SELECT usuario.idusuario from usuario inner join persona on usuario.fkpersona = persona.idpersona where persona.correoelectronico=?',[$correo_Electronico]);
				$idConversion = json_decode(json_encode($consultaid),true);
				$idusuario = implode($idConversion[0]);

				$tipoDireccion = DB::select('SELECT idtipo, tipo from tipodireccion');

				$direcciones = DB::select('SELECT direccion.calle, direccion.numint, direccion.numext, direccion.colonia, direccion.municipio, direccion.ciudad, direccion.pais, direccion.codigopostal, tipodireccion.tipo, detallepersonadireccion.fkpersona, detallepersonadireccion.fk_direccion 
					from detallepersonadireccion 
					inner join direccion 
					on detallepersonadireccion.fk_direccion = direccion.iddireccion 
					inner join tipodireccion 
					on tipodireccion.idtipo = direccion.fktipo 
					where detallepersonadireccion.fkpersona = ?',[$idusuario]);

				$usuarioDatos = DB::select('SELECT persona.idpersona, persona.nombrepersona, persona.apellidopaterno, persona.apellidomaterno, persona.correoelectronico, usuario.contrasena 
					FROM iravibd.usuario 
					inner join persona on usuario.fkpersona = persona.idpersona 
					where idusuario=?',[$idusuario]);

				return view ('perfil_Usuario',['usuarioDatos'=>$usuarioDatos, 'tipoDireccion'=>$tipoDireccion, 'direcciones'=>$direcciones]);
			}
		}	
		return redirect ('/');
	}

	public function guardarNombre(Request $datos)
	{
		$idPersona=$datos->input('txtidPersona');

		$persona=persona::find($idPersona);

		$persona->nombrepersona=$datos->input('txtNombreEditar');
		$persona->save();

		return redirect ('perfilUsuario');
	}

	public function guardarApellidoP(Request $datos)
	{
		$idPersona=$datos->input('txtidPersona');

		$persona=persona::find($idPersona);

		$persona->apellidopaterno=$datos->input('txtApellidoPEditar');
		$persona->save();

		return redirect ('perfilUsuario');
	}

	public function guardarApellidoM(Request $datos)
	{
		$idPersona=$datos->input('txtidPersona');

		$persona=persona::find($idPersona);

		$persona->apellidomaterno=$datos->input('txtApellidoMEditar');
		$persona->save();

		return redirect ('perfilUsuario');
	}

	public function guardarCorreo(Request $datos)
	{
		$idPersona=$datos->input('txtidPersona');

		$persona=persona::find($idPersona);

		$persona->correoelectronico=$datos->input('txtCorreoEditar');
		$persona->save();


		$consultaid = DB::select('SELECT usuario.idusuario from usuario inner join persona on usuario.fkpersona = persona.idpersona where persona.correoelectronico=?',[$persona->correoelectronico=$datos->input('txtCorreoEditar')]);
		$idConversion = json_decode(json_encode($consultaid),true);
		$idusuario = implode($idConversion[0]);

		$tipoDireccion = DB::select('SELECT idtipo, tipo from tipodireccion');

		$direcciones = DB::select('SELECT direccion.calle, direccion.numint, direccion.numext, direccion.colonia, direccion.municipio, direccion.ciudad, direccion.pais, direccion.codigopostal, tipodireccion.tipo, detallepersonadireccion.fkpersona, detallepersonadireccion.fk_direccion 
			from detallepersonadireccion 
			inner join direccion 
			on detallepersonadireccion.fk_direccion = direccion.iddireccion 
			inner join tipodireccion 
			on tipodireccion.idtipo = direccion.fktipo 
			where detallepersonadireccion.fkpersona = ?',[$idusuario]);

		$usuarioDatos = DB::select('SELECT persona.idpersona, persona.nombrepersona, persona.apellidopaterno, persona.apellidomaterno, persona.correoelectronico, usuario.contrasena 
			FROM iravibd.usuario 
			inner join persona on usuario.fkpersona = persona.idpersona 
			where idusuario=?',[$idusuario]);


		return view ('perfil_Usuario',['usuarioDatos'=>$usuarioDatos, 'tipoDireccion'=>$tipoDireccion, 'direcciones'=>$direcciones]);

	}

	public function guardarContraseña(Request $datos)
	{

		$correo_Electronico = session('S_identificador');

		$consultaid = DB::select('SELECT usuario.idusuario from usuario inner join persona on usuario.fkpersona = persona.idpersona where persona.correoelectronico=?',[$correo_Electronico]);
		$idConversion = json_decode(json_encode($consultaid),true);
		$idusuario = implode($idConversion[0]);

		$usuario=usuario::find($idusuario);

		$usuario->contrasena=$datos->input('txtContraseñaEditar');
		$usuario->save();


		return redirect ('perfilUsuario');
	}

	public function agregarDireccion(Request $datos)
	{
		$idPersona=$datos->input('txtidPersona');

		$direccion = new direccion;
		$direccion->calle = $datos->input('txtCalleAgregar');
		$direccion->numint = $datos->input('txtNumIntAgregar');
		$direccion->numext = $datos->input('txtNumExtAgregar');
		$direccion->colonia = $datos->input('txtColoniaAgregar');
		$direccion->municipio = $datos->input('txtMunicipioAgregar');
		$direccion->ciudad = $datos->input('txtCiudadAgregar');
		$direccion->pais = $datos->input('txtPaisAgregar');
		$direccion->codigopostal = $datos->input('txtCodigoPAgregar');
		$direccion->fktipo = $datos->input('txtTipoDireccion');
		$direccion->save();

		$ultimoiddireccion=$direccion->id;

		$detallepersonadireccion= new detallepersonadireccion;
		$detallepersonadireccion->fkpersona=$idPersona;
		$detallepersonadireccion->fk_direccion=$ultimoiddireccion;
		$detallepersonadireccion->save();

		return redirect ('perfilUsuario');
	}

	public function modificarDireccion(Request $datos)
	{
		$idPersona=$datos->input('txtidPersona1');
		$persona=persona::find($idPersona);

		$fkdireccion=$datos->input('txtfkdireccion');

		direccion::where('iddireccion',$fkdireccion)->update(array('calle'=>$datos->input('txtCalle')));
		direccion::where('iddireccion',$fkdireccion)->update(array('numint'=>$datos->input('txtNumeroInt')));
		direccion::where('iddireccion',$fkdireccion)->update(array('numext'=>$datos->input('txtNumeroExt')));
		direccion::where('iddireccion',$fkdireccion)->update(array('colonia'=>$datos->input('txtColonia')));
		direccion::where('iddireccion',$fkdireccion)->update(array('municipio'=>$datos->input('txtMunicipio')));
		direccion::where('iddireccion',$fkdireccion)->update(array('ciudad'=>$datos->input('txtCiudad')));
		direccion::where('iddireccion',$fkdireccion)->update(array('pais'=>$datos->input('txtPais')));
		direccion::where('iddireccion',$fkdireccion)->update(array('codigopostal'=>$datos->input('txtCodigoP')));
		direccion::where('iddireccion',$fkdireccion)->update(array('fktipo'=>$datos->input('txtTipoDireccion')));

		return redirect ('perfilUsuario');
	}
}
?>