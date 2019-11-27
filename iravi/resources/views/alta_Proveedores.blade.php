<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
{{------------------------------Alta Proveedores--------------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
	 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a class="nav-link "  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link " href="{{ url('listadoUsuario')}}">Modificar Usuario</a>
      <a style="background: #003366" class="nav-link active" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
</div>
<div class="col-md-6">
<div class="card">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Alta Proveedores </h4>
	<hr>
		<form action="altaProveedoresGuardar" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input id="nombre" name="nombre" class="form-control" placeholder="Nombre del Proveedor" required pattern="[A-Za-z]+" title="Solo letras" >
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="sucursal" id="sucursal" class="form-control" placeholder="sucursal" required="">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="encargado" id="encargado" class="form-control" placeholder="Encargado" required pattern="[A-Za-z]+" title="Solo letras">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="date" name="fechaI" name="fechaI" class="form-control" required="" placeholder="Fecha de ingreso">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="date" name="fechaE" id="fechaE" class="form-control" required="" placeholder="Fecha de egreso">
	</div>
	</div>
    <div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="sede" id="sede" class="form-control" placeholder="Sede de residencia">
	</div>
	</div>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Registrar</button>
	</div>
	</form>
</article>
</div>
</div>
</div>
{{---------------------------------------Fin de alta proveedores --------------------------------------------------}}
@extends('layouts.footer')
