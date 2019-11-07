<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\usuario;
use App\persona;
use App\detallepersonadireccion;
use App\direccion;
use Illuminate\Http\Request;

class registroUsuario extends Controller
{
	
	public function mostrar()
	{
		if (session()->has('S_Rol') ) 
		{
			return redirect ('/');
		}
		else
		{
			return view ('registroUsuario');
		}
	}	

	public function guardar(Request $datos)
	{
		//dd($datos->all());
		$persona = new persona;
		$persona->nombrepersona=$datos->input('nombre');
		$persona->apellidopaterno=$datos->input('app');
		$persona->apellidomaterno=$datos->input('apm');
		$persona->fechanacimiento=$datos->input('nacimiento');
		$persona->telefono=$datos->input('telefono');
		$persona->correoelectronico=$datos->input('correo');
		$persona->fkgenero=$datos->input('genero');
		$persona->save();
		$ultimoidpersona=$persona->id;
		$usuario = new usuario;
		$usuario->idusuario = $datos->input('idusuario');
		$usuario->contrasena = $datos->input('contraseña');
		$usuario->fkpersona =  $ultimoidpersona;
		$usuario->fkrol = 3;
		$usuario->save();
		$direccion = new direccion;
		$direccion->calle = $datos->input('calle');
		$direccion->numint = $datos->input('ninterior');
		$direccion->numext = $datos->input('nexterior');
		$direccion->colonia = $datos->input('colonia');
		$direccion->municipio = $datos->input('municipio');
		$direccion->ciudad = $datos->input('ciudad');
		$direccion->pais = $datos->input('pais');
		$direccion->codigopostal = $datos->input('cp');
		$direccion->fktipo = $datos->input('tipodireccion');
		$direccion->save();
		$ultimoiddireccion=$direccion->id;
		$detallepersonadireccion= new detallepersonadireccion;
		$detallepersonadireccion->fkpersona=$ultimoidpersona;
		$detallepersonadireccion->fk_direccion=$ultimoiddireccion;
		$detallepersonadireccion->save();
		return redirect('registroUsuario');
	}

	public function mostrarAdmin()
	{
		if (session()->has('S_Rol') ) 
		{
			return redirect ('/');
		}
		else
		{
			return view ('registroUsuarioAdmin');
		}
	}	

	public function guardarAdmin(Request $datos)
	{
		//dd($datos->all());

		$persona = new persona;
		$persona->nombrepersona=$datos->input('nombre');
		$persona->apellidopaterno=$datos->input('app');
		$persona->apellidomaterno=$datos->input('apm');
		$persona->fechanacimiento=$datos->input('nacimiento');
		$persona->telefono=$datos->input('telefono');
		$persona->correoelectronico=$datos->input('correo');
		$persona->fkgenero=$datos->input('genero');
		$persona->save();
		$ultimoidpersona=$persona->id;
		$usuario = new usuario;
		$usuario->idusuario = $datos->input('idusuario');
		$usuario->contrasena = $datos->input('contraseña');

		$datosT= persona::all();
		$usuario->fkpersona =  var_dump($datoT->last());
		$usuario->fkrol = 1;
		$usuario->save();
		$direccion = new direccion;
		$direccion->calle = $datos->input('calle');
		$direccion->numint = $datos->input('ninterior');
		$direccion->numext = $datos->input('nexterior');
		$direccion->colonia = $datos->input('colonia');
		$direccion->municipio = $datos->input('municipio');
		$direccion->ciudad = $datos->input('ciudad');
		$direccion->pais = $datos->input('pais');
		$direccion->codigopostal = $datos->input('cp');
		$direccion->fktipo = $datos->input('tipodireccion');
		$direccion->save();
		$ultimoiddireccion=$direccion->id;
		$detallepersonadireccion= new detallepersonadireccion;

		$detallepersonadireccion->fkpersona=var_dump($datoT->last());
		$detallepersonadireccion->fk_direccion=$ultimoiddireccion;
		$detallepersonadireccion->save();
		return redirect('registroUsuarioAdmin');
	}	
}
?>