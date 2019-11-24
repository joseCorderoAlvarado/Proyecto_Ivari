<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use App\detallepersonadireccion;
use App\direccion;
use Illuminate\Http\Request;
use DB;

class editarDireccion extends Controller
{
	
	public function mostrar(Request $datos)
	{

		if (session()->has('S_Rol') ) 
		{
			if (session('S_Rol')==3)
			{
				$idPersona=$datos->input('txtidPersona1');
				$fkdireccion=$datos->input('txtfkdireccion');

				$tipoDireccion = DB::select('SELECT idtipo, tipo from tipodireccion');

				$direcciones = DB::select('SELECT direccion.calle, direccion.numint, direccion.numext, direccion.colonia, direccion.municipio, direccion.ciudad, direccion.pais, direccion.codigopostal, tipodireccion.tipo, detallepersonadireccion.fkpersona, detallepersonadireccion.fk_direccion , direccion.iddireccion 
					from detallepersonadireccion 
					inner join direccion 
					on detallepersonadireccion.fk_direccion = direccion.iddireccion 
					inner join tipodireccion 
					on tipodireccion.idtipo = direccion.fktipo 
					where detallepersonadireccion.fkpersona = ? and detallepersonadireccion.fk_direccion=?',[$idPersona,$fkdireccion]);

				return view ('editar_Direccion',['direcciones'=>$direcciones, 'tipoDireccion'=>$tipoDireccion, 'idPersona'=>$idPersona]);
			}
		}	
	}
}
?>