@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link active"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('modificarUsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
	</div>
	<div class="col-md-6">
        <span><h1>LISTADO DE USUARIOS</h1></span>
		<br><br>
		<table border="1px " class="table">

				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Rol</th>
					<th>Modificar</th>

				</tr>
			@foreach ($tablaUsuarios as $usuarios)
				<tr>
					<td>{{ $usuarios->idpersona }}</td>
					<td>{{ $usuarios->nombrecompleto }}</td>
					<td>{{ $usuarios->correoelectronico }}</td>
					<td>{{ $usuarios->rol }}</td>
					<td><form action="modificarUsuarioAdm" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<input type="hidden" name="id" value={{ $usuarios->idpersona }}>
					<CENTER> <button type="submit" class="btn btn-primary btn-block">Modificar</button>  </CENTER>

	</form></td>
				</tr>
			@endforeach
		</table>
		</div>
	</div>


    </div>

</div>

<br><br>

{{------------------------Productos---------------------------}}
<div class="container">
<div class="row">


</div>
</div>
{{--------------------Fin Productos---------------------------}}


<br><br>


@extends('layouts.footer')
