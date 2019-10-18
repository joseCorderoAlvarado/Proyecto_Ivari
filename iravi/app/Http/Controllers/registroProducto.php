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

class registroProducto extends Controller
{
	

public function mostrar(){
		
if (session()->has('S_Rol') ) {

		if(session('S_Rol')==1){
		
			return view('alta_Producto');
		}



}	
return redirect ('/');

}	

	



    public function guardar(subidaFotoRequest $datos)
    {
		
		$producto = new producto;
		$producto->nombreproducto=$datos->input('nombreproducto');
		$producto->descripcionproducto=$datos->input('descripcionproducto');
		$producto->fkcategoria=$datos->input('fkcategoria');
		$producto->fkproveedores=$datos->input('fkproveedores');
		$producto->precio=$datos->input('precio');
		$producto->fkestatus=1;
		$producto->save();
		$ultimoidproducto=$producto->id;	
     
        foreach ($datos->fotos as $photo) {
            $nombreOriginal = $photo->getClientOriginalName();
			$fecha = new DateTime();
			$carpeta="/fotoProducto/";
			$nombreCambiado=$carpeta.$fecha->format('Y-m-d_H-i-s')."_".$nombreOriginal;
			Storage::disk('public')->put($nombreCambiado,  File::get($photo));
			
			
            $fotoproducto = new fotoproducto;
			$fotoproducto->ruta=$nombreCambiado;
			$fotoproducto->fkproducto=$ultimoidproducto;
			$fotoproducto->save();
			
        }
		//echo Storage::disk('fotoProducto')->path("");
        //return 'Upload successful!';
		return redirect('registroProducto');
    }




}	

?>