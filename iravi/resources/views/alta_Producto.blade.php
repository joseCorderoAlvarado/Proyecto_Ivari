@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')

{{-------------------------Registro de Productos---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
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
	<h4 class="card-title text-center mb-4 mt-1">Registro de Productos</h4>
	<hr>
	<form action="registroProductoGuardar" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="nombreproducto" class="form-control" placeholder="Nombre Producto" type="text">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<textarea name="descripcionproducto" class="form-control" placeholder="Descripción del Producto"></textarea>
	</div>
	</div>

	<div class="form-group">
	<div class="input-group">
	<div class="input-group-prepend">
	   <select  name="fkcategoria" class="custom-select">
         <option selected>Selecciona una Categoria</option>
		   @foreach ($listaCategoria as $categoria)
         <option value={{ $categoria->idcategoria }}>
		 {{ $categoria->descripcion }} </option>
		  @endforeach
       </select>
    </div>
    </div>
    </div>

		<div class="form-group">
	<div class="input-group">
	<div class="input-group-prepend">
	   <select  name="fkproveedores" class="custom-select">
         <option selected>Selecciona un proveedor</option>
		  @foreach ($listaProveedor as $proveedor)
         <option value={{ $proveedor->idproveedores }}>
		 {{ $proveedor->nombreproveedor }} </option>
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
        <input name="precio" type="text" class="form-control" id="" placeholder="Precio"required>
    </div>
	</div>


	<div class="form-group">
	 <div class="photo">
	 	<div class="input-group">
			<span class="input-group-text">Introduce la(s) imagén(es) del producto	</span>
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
	<button type="submit" class="btn btn-primary btn-block">Registrar producto</button>
	</div>
	</form>
</article>
</div>
</div>
</div>
{{-------------------------Fin de login---------------------------}}
@extends('layouts.footer')
