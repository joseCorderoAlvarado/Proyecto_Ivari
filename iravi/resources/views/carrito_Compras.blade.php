@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<?php
$totalCarrito = 0;
 ?>
@foreach($carrito as $carrito2)

<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
		<div class="row">
      	<div class="col-md-2">
          		<img src="storage{{$carrito2->ruta}}" width="80em" height="80em" class="d-inline-block align-top">
          </div>
		<div class="col-md-6">

      <p> Producto: <span style="color: gray" class="d-inline-block align-top">{{$carrito2->nombreproducto}}</span>   </p>

      <p>  Precio: <span style="color: gray" class="d-inline-block align-top">${{$carrito2->precio}}</span></p>
  <form action="modificarCarrito" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
      <p> Cantidad:	  <input style="color: gray" class="d-inline-block align-top" type="number" name="cantidad" value="{{$carrito2->cantidad}}" min="1" max="1000" step="1"/></p>
      <input type="hidden" name="idProducto" value="{{$carrito2->idproducto}}">
      <p>  <button  type="submit" class="btn btn-danger" style="background:#003366">Modificar</button></p>
    </form>
		</div>
    	<div class="col-md-2">

          <p> Subtotal: <span style="color: gray" class="d-inline-block align-top">{{$carrito2->precio*$carrito2->cantidad}}</span></p>
      </div>
    <div class="col-md-2">
    <p>   Eliminar:</p>
    <form action="eliminarCarrito" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <input type="hidden" name="idProducto" value="{{$carrito2->idproducto}}">
      <input type="image" img src="\images\eliminar.png" width="80em" height="80em" class="d-inline-block align-top">
        </form>
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
