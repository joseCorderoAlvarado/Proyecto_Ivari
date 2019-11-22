@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<style type="text/css">
	#text{color: #003366;}

	.nav-link.active{
		background-color:#92d050 !important;
		border-color: #92d050 !important;
		border-style:solid;
		font-weight: bold;
	}

</style>
<script type="text/javascript">
</script>
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('compras_Realizadas')}}">Compras realizadas</a>
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('perfil_Usuario')}}">Mi Perfil</a>
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('historia')}}">Acerca de Iravi</a>
			</div>
		</div>


<div class="content">
<!-- Multistep Form -->
<div class="main">
<form action="paypal" class="regform" method="post">
	  {{ csrf_field() }}
<!-- Progressbar -->
<ul id="progressbar">
<li id="active1">Domicilio<span class="Ok" id="ok1">✔</span></li>
<li id="active2">Seleccionar pago<span class="Ok" id="ok2">✔</span></li>
<li id="active3">Env&iacute;o<span class="Ok" id="ok3">✔</span></li>
<li id="active4">Confirmaci&oacute;n<span class="Ok" id="ok4">✔</span></li>

</ul>
<!-- Fieldsets -->
<fieldset id="first">
<h2 class="title">Seleccione Domicilio</h2>
<p class="subtitle">Domicilio de env&iacute;o</p>

<!-- Cosas que se repiten (Domicilio) -->
@foreach ($tablaDetalleDireccion as $direccion)
<div class="radio_btn">
<input type="radio" name="Direccion" value="{{$direccion->iddireccion}}">
<p>Calle: {{$direccion->calle}}  #{{$direccion->numext}}</p>
<p>Interior: {{$direccion->numint}}</p>
<p>Colonia {{$direccion->colonia}}</p>
<p> {{$direccion->ciudad}}, {{$direccion->municipio}}, {{$direccion->codigopostal}}</p>
<p> {{$direccion->pais}}</p>
</div>
<br>
@endforeach
<!-- Fin de las cosas que se repiten -->

<div align="center">
<input id="next_btn1" onclick="next_step1()" type="button" value="Siguiente">
</div>
</fieldset>


<fieldset id="second">
<h2 class="title">Seleccione el metodo de pago</h2>
<p class="subtitle">Metodos de pago disponibles:</p>
<div class="radio_btn_pago">
<input type="radio" name="Pago" value="Pago1"> PayPal </div><br>
<div align="center">
<input id="pre_btn1" onclick="prev_step1()" type="button" value="Anterior">
<input id="next_btn2" name="next" onclick="next_step2()" type="button" value="Siguiente"></div>
</fieldset>

<fieldset id="third">
<h2 class="title">Seleccion la paqueteria</h2>
<p class="subtitle">Paqueterias disponibles</p>
<select class="options" name="paqueteriaSeleccionada">

<!-- Cosas que se repiten (paquetaria) -->
@foreach ($tablaPaqueteria as $paqueteria)
<option value="{{$paqueteria->idpaqueteria}}">
{{$paqueteria->nombre}}
</option>
@endforeach
<!--Fin Cosas que se repiten (paquetaria) -->
</select>
<div align="center">
<input id="pre_btn2" onclick="prev_step2()" type="button" value="Anterior">
<input id="next_btn3" name="next" onclick="next_step3()" type="button" value="Siguiente">
</div>
</fieldset>

<fieldset id="four">
<h2 class="title">Productos que estas comprando</h2>
<p class="subtitle">Verifica que todo este en orden</p>
<!-- Cosas que se repiten (carrito) -->
<?php $granTotal=0 ?>
@foreach ($tablaCarrito as $carrito)
<div align="center"  style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
<p>{{$carrito->nombreproducto}}</p>
<p>Precio:{{$carrito->precio}}</p>
<p>Cantidad:{{$carrito->cantidad}}</p>
<p>Subtotal:{{$carrito->cantidad*$carrito->precio}}</p>
</div>
<?php $granTotal=$granTotal+ ($carrito->cantidad*$carrito->precio) ?>
@endforeach
<!--Fin Cosas que se repiten (carrito) -->
<div align="center">
<input id="pre_btn3" onclick="prev_step3()" type="button" value="Anterior">
<input id="total" type="text" hidden="hidden" name="total" value=<?php echo $granTotal ?>>
	<input id="cantidad" type="text" hidden=hidden name="cantidad" value="
		@foreach ($tablaCarrito as $carrito)
		{{$carrito->cantidad}}
		@endforeach">
		<input id="precio" type="text" hidden=hidden name="precio" value="
			@foreach ($tablaCarrito as $carrito)
			{{$carrito->precio}}
			@endforeach">
	<input id="nombre" type="text" hidden=hidden name="nombre" value="
				@foreach ($tablaCarrito as $carrito)
				{{$carrito->nombreproducto}}
				@endforeach">
<input class="submit_btn" onclick="validation(event)" type="submit" value="Confirmar">
</div>
<div align="center">
<p>Gran Total: </p>
<p> {{$granTotal}} </p>
</div>
</fieldset>
</form>
</div>
</div>
<script src="js/form.js"></script>
@extends('layouts.footer')
