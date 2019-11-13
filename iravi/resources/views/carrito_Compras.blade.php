@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<?php
$totalCarrito = 0;
 ?>
@foreach($carrito as $carrito2)

<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
		<div class="row">
		<div class="col-md-3">
			<img src="storage{{$carrito2->ruta}}" width="80em" height="80em" class="d-inline-block align-top">
		</div>
		<div class="col-md-3">
			<span style="color: gray" class="d-inline-block align-top">{{$carrito2->nombreproducto}}</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">${{$carrito2->precio}}</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">{{$carrito2->cantidad}}</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">{{$carrito2->precio*$carrito2->cantidad}}</span>
		</div>
		</div>
	</div>
	<?php
  $totalCarrito = $totalCarrito + ($carrito2->precio*$carrito2->cantidad);
	 ?>
@endforeach
<div class="container">
	<div class="row">
		<div class="col-md-4">
			Bonificacion:
			<br>
			Total
		</div>
		<div class="col-md-6">
		</div>
		<div class="col-md-2">
			$xxxx
			<br>
			${{$totalCarrito}}

		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-6">
		<a href="{{ url('confirmacion_Compra')}}">
		<button type="button" class="btn btn-primary" style="background:#003366">Proceder al pago </button>
		</a>
		</div>
		<div class="col-md-2">
			<br>
		</div>
	</div>
</div>
{{--------------------Fin de Paginación----------------------}}
@extends('layouts.footer')
