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
<center>
	<a href="#">
	<div class="toogle toogle2">
		<span>
			Ver Formulario
		</span>
	</div>
	</a>
</center>
<div class="col-md-6">
<div class="card" style="background: transparent;">
  <article class="card-body" >
	<h4 class="card-title text-center mb-4 mt-1">Registro de Productos</h4>
	<hr style="margin-bottom: 40px;">
	<form action="registroProductoGuardar" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
	<div class="form-group" >
	<div class="input-group" style="background: transparent; margin-bottom: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="nombreproducto"  class="form-control formulario_input"  type="text">
		<label class="formulario_label">Nombre del producto</label>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<textarea name="descripcionproducto"  class="form-control formulario_input" ></textarea>
		<label class="formulario_label">Descripción del producto</label>
	</div>
	</div>

	<div class="form-group" >
	<div class="input-group">
	<div class="input-group-prepend">
	   <select  name="fkcategoria" class="custom-select ">
         <option selected>Selecciona una Categoria</option>
		   @foreach ($listaCategoria as $categoria)
         <option value={{ $categoria->idcategoria }}>
		 {{ $categoria->descripcion }} </option>
		  @endforeach
       </select>
    </div>
    </div>
    </div>

		<div class="form-group"style="margin-bottom: 40px;">
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
        <input name="precio" type="text" class="form-control formulario_input" id="" required>
        <label class="formulario_label">Precio</label>
    </div>
	</div>


	<div class="form-group" align="center">
	 <div class="photo">
	 	<div class="input-group">
			<span class="input-group-text">Introduce la(s) imagén(es) del producto	</span>
		<input multiple="multiple"  name="fotos[]" type="file">
        	<div class="container-fluid">
					<img src="images/LogoIravi.png" class="img-rounded">
			</div>
       	</div>
	 </div>

        <div id="form_alert"></div>
</div>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block formulario_btn">Registrar producto</button>
	</div>
	</form>
	<script src="js/form.js"></script>
</article>
</div>
</div>
</div>

{{-------------------------Fin de login---------------------------}}
@extends('layouts.footer')
