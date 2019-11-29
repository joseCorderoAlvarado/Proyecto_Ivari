@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a style="background: #003366" class="nav-link active"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('listadoUsuario')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
	</div>
	<div class="col-md-6">
	<span><h1>LISTADO DE PRODUCTOS</h1></span>
	</div>
    </div>
</div>
{{------------------------Productos---------------------------}}
<div class="container">
	{{------------------------Cosas que se repiten---------------------------}}
@foreach ($tablaProductos as $producto)
		<div class="row">

		<div class="col-md-2">
	<CENTER><span><h5>{{ $producto->idproducto }}</h5></span></CENTER>
</div>
<div class="col-md-2">
	<img src="storage{{$producto->ruta}}" width="50em" height="50em" class="d-inline-block align-top">
</div>
<div class="col-md-2">
	<CENTER>
		<span class="d-inline-block align-top"><h3>{{ $producto->nombreproducto }}</h3></span>
	</CENTER>
</div>
<div class="col-md-2">
	<form action="modificarProducto" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	 <input type="hidden" name="id" value={{ $producto->idproducto }}>
	<CENTER> <button type="submit" class="btn btn-primary btn-block">Modificar</button>  </CENTER>

	</form>
</div>
			<div class="col-md-2">
				<form action="eliminarProducto" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="id" value={{ $producto->idproducto }}>
					<CENTER> <button type="submit" class="btn btn-primary btn-block">Eliminar</button>  </CENTER>

				</form>
			</div>
		</div>


	@endforeach
	{{------------------------Fin de Cosas que se repiten---------------------------}}

</div>
{{--------------------Fin Productos---------------------------}}


<br><br>


{{--------------------Inicio de Paginación----------------------}}
<div class="container-fluid">
 <div class="row">
   <div class="col-md-4">
   </div>
   <div class="col-md-4">
    <nav aria-label="Page navigation example">
       <ul class="pagination">
	{{------------------------Cosas que se repiten---------------------------}}
@for ($i=1;$i<=$numeroPaginas;$i++)

	 		@if ($i==1)
				@if ($paginaActual==1)
        <li class="page-item disabled">
					<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					</a>
			 </li>
      	@else
				<li class="page-item">
					<a class="page-link" href="listaModificarProductos-pagina{{$paginaActual-1}}" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					</a>
			 </li>
			@endif
  	@endif

		@if ($i==$paginaActual)
		<li class="page-item active"><a class="page-link">{{$i}}</a></li>
		@else
		<li class="page-item"><a class="page-link" href="listaModificarProductos-pagina{{$i}}">{{$i}}</a></li>
    @endif



				@if ($i==$numeroPaginas)
						@if ($paginaActual==$numeroPaginas)
			        <li class="page-item disabled">
								<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								</a>
						 </li>
			      @else
							<li class="page-item">
								<a class="page-link" href="listaModificarProductos-pagina{{$paginaActual+1}}" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								</a>
						 </li>
						@endif
			 @endif


@endfor
{{------------------------Fin de Cosas que se repiten---------------------------}}
      </ul>
   </nav>
  </div>

  <div class="col-md-4">
  </div>
 </div>
</div>
{{--------------------Fin de Paginación----------------------}}

@extends('layouts.footer')
