@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')

{{-------------------------Modificar Productos---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a style="background: #003366" class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link active"  href="{{ url('listaModificarProductos')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('modificarUsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
</div> 
<div class="col-md-6"> 
<div class="card">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Modificar Productos</h4>
	<hr>
	<form action="modificarProductoGuardar" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
	
	<input type="hidden" name="id" value={{ $producto[0]->idproducto }}>
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input  name="nombreproducto" class="form-control" placeholder="Nombre Producto" type="text" required value="{{ $producto[0]->nombreproducto }}" >
	</div> 
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<textarea  name="descripcionproducto" class="form-control" placeholder="Descripción del Producto" required
		>{{ $producto[0]->descripcionproducto }}</textarea>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
	<div class="input-group-prepend">
	     <select  name="fkcategoria" class="custom-select">
		  @foreach ($listaCategoria as $categoria)
			@if ($categoria->idcategoria == $producto[0]->fkcategoria)
				<option selected value={{ $categoria->idcategoria }}>
					{{ $categoria->descripcion }} </option>
			@else
				<option  value={{ $categoria->idcategoria }}>
					{{ $categoria->descripcion }} </option>
			@endif
		  @endforeach
       </select>
    </div>
    </div>
    </div>
	
	
		<div class="form-group">
	<div class="input-group">
	<div class="input-group-prepend">
	   <select  name="fkproveedores" class="custom-select">
       
		  @foreach ($listaProveedor as $proveedor)
			@if ($proveedor->idproveedores == $producto[0]->fkproveedores)
				<option selected value={{ $proveedor->idproveedores }}>
					{{ $proveedor->nombreproveedor }} </option>
			@else
				<option  value={{ $proveedor->idproveedores }}>
					{{ $proveedor->nombreproveedor }} </option>
			@endif
		  @endforeach
       </select>
	   
    </div>
    </div>
    </div>
	
	<div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">$</span>
        </div>
        <input name="precio" type="text" class="form-control" id="" placeholder="Precio" pattern="[0-9\.]+" maxlength="14" required
		value={{ $producto[0]->precio }} >
    </div>
	</div>
	
<?php $i=1?>
	@foreach($fotosProducto as $foto)
	
	<div class="form-group">
	 <div class="photo">
	 <h4> Foto {{$i}} </h4>
	 	<div class="input-group">
			<span class="input-group-text">Cambiar foto	</span>
		<input type="file" class="form-control" name="fotosModificar[]" id="fotosModificar" >
		<input type="hidden" class="form-control" name="idfotos[]" id="idfotos" value="{{$foto->idfotoproducto}}">
	
        	<div class="container-fluid">
					<img class="img-rounded" src="storage{{$foto->ruta}}" >
			</div>
		
       	</div>
	 </div>  
	  <div id="form_alert"></div>
</div>
<?php  $i++?>
@endforeach
	<input type="hidden" class="form-control" name="totalfotos" id="totalfotos" value="{{$i}}">

	<div class="form-group">
	 <div class="photo">
	  <h4> Agregar más </h4>
	 	<div class="input-group">
			<span class="input-group-text">Agregar </span>
		<input multiple="multiple" name="fotos[]" type="file">
        	<div class="container-fluid">
					<img src="images/LogoIravi.png" class="img-rounded">
			</div>
       	</div>
	 </div>
        
        <div id="form_alert"></div>
</div>


	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Modificar producto</button>
	</div>
	</form>
</article>
</div>
</div>
</div>
{{-------------------------Fin de modificar producto---------------------------}}
@extends('layouts.footer')