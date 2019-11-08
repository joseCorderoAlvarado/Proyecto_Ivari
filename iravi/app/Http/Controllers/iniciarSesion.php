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
       echo "$correo_Electronico";
			 echo "$contraseña";
			 exit();
			//echo $correo_Electronico."jajajaja";
			//echo $contraseña."jejeje";


			//$correo_Electronico="javier_agustinrm@hotmail.com";
			//$contraseña="1234";

			//Creamos una varible usuario que se iguala a la tabla usuario
			//con un inner join que hace referencia a las tablas relacionadas y los id y el fk relacionados
			//se hace una consulta donde se consultan los campos correo electrónico de la tabla persona y la contraseña de la tabla usuario
			//se hace la condición del where donde se consultan solo aquellos que posean los datos del correo y contraseña ingresados por el usuario.

	
