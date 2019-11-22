@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
{{-------------------------Alta Usuarios---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a style="background: #003366" class="nav-link active" href="{{ url('listadoUsuario')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
</div>
<div class="col-md-6">
<div class="card">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Modificar Usuario </h4>
	<hr>
		<form action="guardarCambiosUsuario" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

			<input type="hidden" name="idp" value={{ $modificar[0]->idpersona }}>
		<input type="hidden" name="idu" value={{ $modificar[0]->idusuario }}>


		<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="nombrepersona" class="form-control" placeholder="Nombre" type="text" value="{{ $modificar[0]->nombrepersona }}" pattern="[A-Za-z\s]+"
		title="El nombre debe llevar solo letras y espacios" required>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="apellidopaterno" class="form-control" placeholder="Apellido Paterno" value="{{ $modificar[0]->apellidopaterno }}" pattern="[A-Za-z]+"
		title="El apellido debe llevar solo letras" required>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="apellidomaterno" class="form-control" placeholder="Apellido Materno" value="{{ $modificar[0]->apellidomaterno }}" pattern="[A-Za-z]+"
		title="El apellido debe llevar solo letras" required>
	</div>
	</div>

	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="contrasena" class="form-control" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
		title="La contraseña debe contener por lo menos una mayusucla, una minuscula, un numero y tener por lo menos ocho caracteres" required>
	</div>
	</div>

	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Modificar</button>
	</div>
	</form>
</article>
</div>
</div>
</div>
</div>
{{-------------------------Fin de modificar producto---------------------------}}
@extends('layouts.footer')
