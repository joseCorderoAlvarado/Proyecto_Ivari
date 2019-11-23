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


<div class="col-md-2">
			<span  style="color:blue" class="d-inline-block align-top" ><h3>Pedidos</h3></span>
		</div>
<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">


		<div class="row">
		<div class="col-md-1">
			<span  style="color: gray" class="d-inline-block align-top"><h3>Folio</h3></span>
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
		</div>
	@foreach ($pedido as $pedido)
	<div class="row">
		<div class="col-md-1">
			<span  style="color: gray" class="d-inline-block align-top">{{ $pedido->foliopedido }}</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">{{ $pedido->nombre }}</span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">{{ $pedido->direccion }}</span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">{{ $pedido->fecha }}</span>
		</div>
		<div class="col-md-1">
			<span style="color: gray" class="d-inline-block align-top">{{ $pedido->total }}</span>
		</div>
		<div class="col-md-2">
			<form action="actualizarPedido" method="post" enctype="multipart/form-data">

			<select name="estado">
				<option value="1"<?php if($pedido->idestadopedido == 1): ?> selected="selected"<?php endif; ?>>En preparación</option>
				<option value="2"<?php if($pedido->idestadopedido == 2): ?> selected="selected"<?php endif; ?>>Listo para enviar</option>
				<option value="3"<?php if($pedido->idestadopedido == 3): ?> selected="selected"<?php endif; ?>>En tránsito</option>
				<option value="4"<?php if($pedido->idestadopedido == 4): ?> selected="selected"<?php endif; ?>>Finalizado</option>
			</select>
		</div>
		<div class="col-md-2">
			<input type="hidden" name="id" value={{ $pedido->foliopedido }}>
			{{ csrf_field() }}
				<CENTER> <button type="submit" class="btn btn-primary btn-block">Actualizar</button>  </CENTER>

			</form>
		</div>
	</div>
		@endforeach


</div>
			<span  style="color:blue" class="d-inline-block align-top" ><h2>Productos en el pedido</h2></span>
	<hr style="border: 1px #ccc solid">
		<div class="row">
	   <div class="col-md-4">
			<span  style="color: gray" class="d-inline-block align-top"><h3>Id</h3></span>
		</div>
		<div class="col-md-4">
			<span  style="color: gray" class="d-inline-block align-top"><h3>Nombre del producto</h3></span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top"><h3>Precio</h3></span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top"><h3>Cantidad</h3></span>
		</div>
		</div>
@foreach ($productos as $productos)
<div class="row">
	<div class="col-md-4">
		<span  style="color: gray" class="d-inline-block align-top">{{ $productos->idproducto }}</span>
	</div>
	<div class="col-md-4">
		<span  style="color: gray" class="d-inline-block align-top">{{ $productos->nombreproducto }}</span>
	</div>
	<div class="col-md-2">
		<span style="color: gray" class="d-inline-block align-top">${{ $productos->costo }}</span>
	</div>

	<div class="col-md-2">
		<span style="color: gray" class="d-inline-block align-top">{{ $productos->cantidad }}</span>
	</div>
</div>
@endforeach
			<span  style="color:blue" class="d-inline-block align-top" ><h2>Historial del pedido</h2></span>
		<div class="row">
		
	</div>
		<div class="row">
		<div class="col-md-4">
			<span style="color: gray" class="d-inline-block align-top"><h3>Fecha</h3></span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top"><h3>Estado</h3></span>
		</div>
		</div>
@foreach ($historial as $historial)

		<div class="row">
	<div class="col-md-4">
		<span style="color: gray" class="d-inline-block align-top">{{ $historial->fecha }}</span>
	</div>
	<div class="col-md-2">
		<span style="color: gray" class="d-inline-block align-top">{{ $historial->nombre_Estado }}</span>
	</div>
</div>
		@endforeach


	</div>
		<div class="row" style="height: 3em"><div class="col-md-12"></div></div>

@extends('layouts.footer')

