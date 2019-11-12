@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')			
<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
		<div class="row">
		<div class="col-md-3">
			<img src="images/Iravi.png" width="80em" height="80em" class="d-inline-block align-top">
		</div>
		<div class="col-md-3">
			<span style="color: gray" class="d-inline-block align-top">Nombre Producto</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Precio</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Cantidad</span>
		</div>
		
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">importe</span>
		</div>
		</div>
	</div>
<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
		<div class="row">
		<div class="col-md-3">
			<img src="images/Iravi.png" width="80em" height="80em" class="d-inline-block align-top">
		</div>
		<div class="col-md-3">
			<span style="color: gray" class="d-inline-block align-top">Nombre Producto</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Precio</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Cantidad</span>
		</div>
		
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">importe</span>
		</div>
		</div>
</div>	
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
			$xxxx
		</div>
	</div>
</div>		
<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-6">
		<a href="{{ url('confirmacionCompra')}}">
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