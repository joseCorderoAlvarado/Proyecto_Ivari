@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a style="background: #003366" class="nav-link active" href="{{ url('listadoUsuario')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
	</div>
	<div class="col-md-10">
        <span><h1>LISTADO DE USUARIOS</h1></span>
		<br><br>
		<div class="container">

				<div class="row">
					<div class="col-md-0">Id</div>
					<div class="col-md-2">Nombre</div>
					<div class="col-md-3">Correo</div>
					<div class="col-md-3">Rol</div>
					<div class="col-3">Modificar</div>

				</div>
			@foreach ($tablaUsuarios as $usuarios)
				<div class="row">
					<div class="col-md-0">{{ $usuarios->idpersona }}</div>
					<div class="col-md-2">{{ $usuarios->nombrecompleto }}</div>
					<div class="col-md-3">{{ $usuarios->correoelectronico }}</div>
					<div class="col-md-3">{{ $usuarios->rol }}</div>
					<div class="col-3"><form action="modificarUsuarioAdm" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<input type="hidden" name="id" value={{ $usuarios->idpersona }}>
					<CENTER> <button type="submit" class="btn btn-primary btn-block">Modificar</button>  </CENTER>

	</form></div>
				</div>
			@endforeach
		</div>
		</div>
	</div>


    </div>

</div>

<br><br>


{{--------------------Fin Productos---------------------------}}


<br><br>


@extends('layouts.footer')
