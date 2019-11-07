<?php
namespace App\Http\Controllers;
use App\Http \Controllers\Controller;
use App\usuario;
use App\persona;
use Illuminate\Http\Request;
use DB;


class modificarUsuarioAdm extends Controller
{

	
public function mostrar(Request $data){
    $idPersona=$data->input('id');
    if (session()->has('S_Rol') ) {
	
	if (session('S_Rol')==1 ) {
        $usuario = DB::select('SELECT p.idpersona,u.idusuario,p.nombrepersona,p.apellidopaterno,p.apellidomaterno FROM iravibd.persona p, iravibd.usuario u where u.fkpersona=p.idpersona and u.fkpersona=?',[$idPersona]);

        return view('modificar_UsuarioAdm',['modificar'=>$usuario]);
	}

}	
return redirect ('/');
}
    public function guardar(Request $data)
    {
        $idPersona=$data->input('idp');
        $idUsuario=$data->input('idu');
        $persona=persona::find($idPersona);
        $usuario=usuario::find($idUsuario);

        $persona->nombrepersona=$data->input('nombrepersona');
        $persona->apellidopaterno=$data->input('apellidopaterno');
        $persona->apellidomaterno=$data->input('apellidomaterno');

        if($data->input('contrasena')!=""){
            $usuario->contrasena=$data->input('contrasena');
            $usuario->save();
        }

        $persona->save();


        return redirect('listadoUsuario');
    }


}
?>