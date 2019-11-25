@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')

<?php
$totalCarrito = 0;
 ?>
 <div class="container-fluid">
   <div class="row">
    <br><br><div class="alert alert-info" role="alert" align="center">Recuerda que Iravi cuenta con un sistema de bonificaciones que se aplica cada sexta compra con un 10% de regalo.</div><br><br>
   </div>
 </div>
<div class="container-fluid" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
   <div class="row">
      <div class="col-2">
        <h5 >Imagén</h5>
      </div>
      <div class="col-2">
        <h5 style="text-align:center;">Nombre Producto</h5>
      </div>
      <div class="col-2">
        <h5 style="text-align:center;">Precio Unitario</h5>
      </div>
      <div class="col-2">
        <h5 style="text-align:center;">Cantidad</h5>
      </div>
      <div class="col-2">
        <h5 style="text-align:center;">Subtotal</h5>
      </div>
   </div>
</div>
@foreach($carrito as $carrito2)
<div class="container-fluid" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
    <div class="row">
      	<div class="col-2 my-auto">
          		<img src="storage{{$carrito2->ruta}}" width="80em" height="80em" class="d-inline-block align-top">
          </div>
		<div class="col-2 my-auto">
      <p> Producto: <span style="color: gray" class="d-inline-block align-top">{{$carrito2->nombreproducto}}</span>   </p>
    </div>
    	<div class="col-2 my-auto">
      <p>  Precio: <span style="color: gray" class="d-inline-block align-top">${{$carrito2->precio}}</span></p>
      </div>
      <div class="col-2 my-auto">
      <form action="modificarCarrito" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
      <p> Cantidad:	  <input style="color: gray" class="d-inline-block align-top" type="number" name="cantidad" value="{{$carrito2->cantidad}}" min="1" max="1000" step="1"/></p>
      <input type="hidden" name="idProducto" value="{{$carrito2->idproducto}}">
      <p> <button  type="submit" class="btn btn-danger" style="background:#003366">Modificar</button></p>
    </form>
     </div>
    	<div class="col-md-2 my-auto">
          <p> Subtotal: <span style="color: gray" class="d-inline-block align-top">${{$carrito2->precio*$carrito2->cantidad}}</span></p>
      </div>
    <div class="col-md-2 my-auto">
    <form action="eliminarCarrito" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <input type="hidden" name="idProducto" value="{{$carrito2->idproducto}}">
      <input type="image" src="images/eliminar.png" width="80em" height="80em" class="class="formulario_btn">
        </form>
	   </div>
		</div>
	</div>
	<?php
  $totalCarrito = $totalCarrito + ($carrito2->precio*$carrito2->cantidad);
	 ?>
@endforeach
<div class="container-fluid">
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
		<div class="col-md-4" style="text-align:center;">
		<a href="{{ url('confirmacionCompra')}}">
		<button type="button" class="formulario_btn" style="background:#003366;">Proceder al pago </button>
		</a>
		</div>
		<div class="col-md-2">
			<br>
		</div>
	</div>
</div>
{{--------------------Fin de Paginación----------------------}}
@extends('layouts.footer')
