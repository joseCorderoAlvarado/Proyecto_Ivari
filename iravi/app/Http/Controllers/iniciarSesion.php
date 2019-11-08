<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use Illuminate\Http\Request;


	class iniciarSesion extends Controller
	{
		public function mostrar(){
		if (session()->has('S_Rol') ) {
		return redirect ('/');
	}else{

		return view ('login');
	}

}

		public function verificar (Request $datos)
		{

			$usuario_v = new usuario;
			$persona_v = new persona;
			$correo_Electronico = $persona_v->txtUsuario = $datos->input ('txtUsuario');
			$contraseña = $usuario_v->txtContrasena = $datos->input ('txtContrasena');

			//$correo_Electronico="javier_agustinrm@hotmail.com";
			//$contraseña="1234";

			//Creamos una varible usuario que se iguala a la tabla usuario
			//con un inner join que hace referencia a las tablas relacionadas y los id y el fk relacionados
			//se hace una consulta donde se consultan los campos correo electrónico de la tabla persona y la contraseña de la tabla usuario
			//se hace la condición del where donde se consultan solo aquellos que posean los datos del correo y contraseña ingresados por el usuario.

			$resultadoUsuario = usuario::
		    join('persona', 'persona.idpersona', '=', 'usuario.fkpersona')
		    ->select('persona.correoelectronico', 'usuario.contrasena')
		    ->where('persona.correoelectronico', '=', $correo_Electronico)
		    ->where('usuario.contrasena', '=', $contraseña)
		    ->get();

		    //Este es el inner join realizado de una manera cosnulta directa a SQL
			//	select persona.correoelectronico, usuario.contraseña from usuario
			//	inner join persona on usuario.fkpersona = persona.idpersona
			//	where persona.correoelectronico = $correo_Electronico
			//	and usuario.contraseña = $contraseña;

			if ($fila=($resultadoUsuario))
			{
				//buscar esos datos en la base de datos
				$resultadoRol = persona::
			    join('usuario', 'usuario.idusuario', '=', 'persona.idpersona')
			    ->select('usuario.fkrol')
			    ->where('persona.correoelectronico', '=', $correo_Electronico)
				->where('usuario.contrasena', '=', $contraseña)
			    ->get();

				//echo $resultadoRol;

				//Se va a utilizar la sesion global
			   if(strpos($resultadoRol, '3') == true){
				    session(['S_Rol' => '3']);

			       return redirect('/');
			   }

			   elseif  (strpos($resultadoRol, '1') == true){

				   session(['S_Rol' => '1']);

			       return redirect('/');

			   }
			}

				 return redirect('login');


		}


		public function cerrarSesion (Request $datos)
		{
			//Matamos todos los datos de la sesion
			Session()->flush();
			  return redirect('/');
		}
	}
?>
