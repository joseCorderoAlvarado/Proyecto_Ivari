@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
{{-------------------------Alta Usuarios Administrador---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
	 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a style="background: #003366" class="nav-link active"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('listadoUsuario')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
</div>
<div class="col-md-8">
	<div class="card" style="border-color: #003366">
	  <article class="card-body">
		<h4 class="card-title text-center mb-4 mt-1" style="color: #003366">Registro Usuario </h4>
		<hr style="border-color: #666699">
			<form action="#" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-user"></i> </span>
			</div>
			<input name="nombre" class="form-control" placeholder="Nombre" type="text" style="border-color: #666699">
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="app" class="form-control" placeholder="Apellido Paterno" style="border-color: #666699">
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="apm" class="form-control" placeholder="Apellido Materno" style="border-color: #666699">
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input type="date" name="nacimiento" class="form-control" style="border-color: #666699">
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="calle" class="form-control" placeholder="Calle" style="border-color: #666699">
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="colonia" class="form-control" placeholder="Colonia" style="border-color: #666699">
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="ninterior" class="form-control" placeholder="Numero Interior" style="border-color: #666699">
		</div>
		</div>


		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="nexterior" class="form-control" placeholder="Número Exterior" style="border-color: #666699">
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="pais" class="form-control" placeholder="Pais" style="border-color: #666699">
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="municipio" class="form-control" placeholder="Municipio" style="border-color: #666699">
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="ciudad" class="form-control" placeholder="Ciudad" style="border-color: #666699">
		</div>
		</div>

			<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="cp" class="form-control" placeholder="Codigo Postal" style="border-color: #666699">
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="telefono" class="form-control" placeholder="Teléfono" style="border-color: #666699">
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="correo" class="form-control" placeholder="Correo Electrónico" style="border-color: #666699">
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input name="contraseña" class="form-control" placeholder="Contraseña" style="border-color: #666699">
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
		<select name="genero">
	  <option value="1">Masculino</option>
	  <option value="2">Femenino</option>
	</select>
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
		<select name="tipodireccion">
	  <option value="1">Personal</option>
	  <option value="2">Envio</option>
	  <option value="3">Facturacion</option>

	</select>
		</div>
		</div>

		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block" style="border-color: #003366; background-color: #003366">Registrar</button>
		</div>
		</form>
	</article>
</div>
</div>
</div>
{{-------------------------Fin de alta usuario administrador---------------------------}}
@extends('layouts.footer')
