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

class modificarProducto extends Controller
{
	public function mostrar(Request $data)
	{
		if (session()->has('S_Rol') )
		{
			if(session('S_Rol')==1)
			{
				$idProducto=$data->input('id');
				$listaCategoria = DB::select('select idcategoria, descripcion from categoria
					order by idcategoria desc ');
				$listaProveedor = DB::select('select idproveedores, nombreproveedor from proveedores
					order by idproveedores desc ');
				$fotosProducto= DB::select('select idfotoproducto, ruta from fotoproducto where fkproducto=?
					order by idfotoproducto asc ',[$idProducto]);
				$producto = DB::select('select   * from producto where idproducto=?',[$idProducto]);
				return view('modificar_Producto',['listaProveedor'=>$listaProveedor, 'producto'=>$producto,
				'listaCategoria'=>$listaCategoria,'fotosProducto'=>$fotosProducto]
				);
			}
		}
		return redirect ('/');
	}

	public function modificar(subidaFotoRequest $datos)
	{
		$idProducto=$datos->input('id');
		$producto=producto::find($idProducto);

		$producto->nombreproducto=$datos->input('nombreproducto');
		$producto->descripcionproducto=$datos->input('descripcionproducto');
		$producto->fkcategoria=$datos->input('fkcategoria');
		$producto->fkproveedores=$datos->input('fkproveedores');
		$producto->precio=$datos->input('precio');
		$producto->fkestatus=1;
		$producto->save();

		//Ver si se modifico alguna foto
		if ($datos->fotosModificar!=null)
		{
			$i=0;

			foreach ($datos->fotosModificar as $fotoModificar)
			{
				$nombreOriginal = $fotoModificar->getClientOriginalName();
				$fecha = new DateTime();
				$carpeta="/fotoProducto/";
				$nombreCambiado=$carpeta.$fecha->format('Y-m-d_H-i-s')."_".$nombreOriginal;
				Storage::disk('public')->put($nombreCambiado,  File::get($fotoModificar));

				$idfoto=$datos->idfotos[$i];
				$fotoproducto=fotoproducto::find($idfoto);
				$fotoproducto->ruta=$nombreCambiado;
				$fotoproducto->save();

				$i++;
			}
		}

		//Fotos nuevas
		if($datos->fotos !=null)
		{
	       	foreach ($datos->fotos as $photo)
	       	{
	           	$nombreOriginal = $photo->getClientOriginalName();
				$fecha = new DateTime();
				$carpeta="/fotoProducto/";
				$nombreCambiado=$carpeta.$fecha->format('Y-m-d_H-i-s')."_".$nombreOriginal;
				Storage::disk('public')->put($nombreCambiado,  File::get($photo));

	            $fotoproducto = new fotoproducto;
				$fotoproducto->ruta=$nombreCambiado;
				$fotoproducto->fkproducto=$idProducto;
				$fotoproducto->save();

			}
		}
		return redirect('listaModificarProductos-pagina1');
	}
}

?>
