@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('listadoUsuario')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a style="background: #003366" class="nav-link active"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
	</div>
	<div class="col-md-6">
	<span><h1>PEDIDOS</h1></span>
	</div>
	<div class="col-md-4">
	</div>
    </div>
</div>
<div class="container-fluid">
	<hr>
</div>
<div class="container">
	<div class="row" style="border: 1px gray solid; border-radius: 10px">
		<div class="col-md-3" >
			<center><span>
						<form action="pedidosFiltrados" method="post" enctype="multipart/form-data">
				 {{ csrf_field() }}
				 <input type="hidden" name="estado" value=1>
				  <button type="submit" class="btn btn-primary btn-block">Preparando</button></span></center> </form>



			<center><span><h5><font style="color: gray">	@foreach ($estado1 as $estado)
								{{ $estado->c }} pedidos
						@endforeach
						</font></h5></span></center>
		</div>
		<div class="col-md-3">
			<form action="pedidosFiltrados" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="estado" value=2>
				<button type="submit" class="btn btn-primary btn-block">Listo para enviar</button></span></center> </form>
			<center><span><h5><font style="color: gray">@foreach ($estado2 as $estado)
								{{ $estado->c }} pedidos
							@endforeach</font></h5></span></center>
		</div>
		<div class="col-md-3">
			<form action="pedidosFiltrados" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="estado" value=3>
				<button type="submit" class="btn btn-primary btn-block">En tránsito</button></span></center> </form>			<center><span><h5><font style="color: gray">@foreach ($estado3 as $estado)
								{{ $estado->c }} pedidos
							@endforeach</font></h5></span></center>
		</div>
		<div class="col-md-3">
			<form action="pedidosFiltrados" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="estado" value=4>
				<button type="submit" class="btn btn-primary btn-block">Finalizadas</button></span></center> </form>			<center><span><h5><font style="color: gray">@foreach ($estado4 as $estado)
								{{ $estado->c }} pedidos
							@endforeach</font></h5></span></center>
		</div>
	</div>
	<div class="row" style="height: 3em"><div class="col-md-12"></div></div>
</div>
<div class="container">
	<h3>{{ $header }}</h3>

	</div>
</div>
</div>

<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">

	<hr style="border: 0.5px #ccc solid">
	<div class="row">
		<div class="col-md-2">
			<span class="d-inline-block align-top"><h3>Folio</h3><p> <br></p></span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top"><h3>Cliente</h3></span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top"><h3>Direccion</h3></span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top"><h3>Fecha</h3></span>
		</div>
		<div class="col-md-1">
			<span style="color: gray" class="d-inline-block align-top"><h3>Total</h3></span>
		</div>
		<div class="col-md-1">
			<span style="color: gray" class="d-inline-block align-top"><h3>Estado</h3></span>
		</div>
		<div class="col-md-1">

		</div>
	</div>
	@foreach ($pedidos as $pedidos)

		<div class="row">
		<div class="col-md-2">
			<span class="d-inline-block align-top">{{ $pedidos->foliopedido }}</span><p> <br></p>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">{{ $pedidos->nombre }}</span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">{{ $pedidos->direccion }}</span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">{{ $pedidos->fecha }}</span>
		</div>
		<div class="col-md-1">
			<span style="color: gray" class="d-inline-block align-top">${{ $pedidos->total }}</span>
		</div>
		<div class="col-md-1">
			<span style="color: gray" class="d-inline-block align-top">{{ $pedidos->estadopedido }}</span>
		</div>
		 <div class="col-md-2"><form action="detallePedido" method="post" enctype="multipart/form-data">
				 {{ csrf_field() }}
				 <input type="hidden" name="id" value={{ $pedidos->foliopedido }}>
				 <CENTER> <button type="submit" class="btn btn-primary btn-block">Detalles</button>  </CENTER>

			 </form>
		</div>
		</div>
		@endforeach

	</div>

			
		<div class="row" style="height: 3em"><div class="col-md-12"></div></div>
{{--------------------Inicio de Paginación----------------------}}
<div class="container-fluid">
 <div class="row">
   <div class="col-md-4">
   </div>
   <div class="col-md-4">
    <nav aria-label="Page navigation example">
       <ul class="pagination">
         <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            </a>
         </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
      </ul>
   </nav>
  </div>
  <div class="col-md-4">
  </div>
 </div>
</div>
{{--------------------Fin de Paginación----------------------}}
@extends('layouts.footer')
