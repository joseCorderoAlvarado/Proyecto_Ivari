@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a  style="color: #003366; font-weight:bold;" class="nav-link" href="{{ url('comprasRealizadas')}}">Compras realizadas</a>
				<a  style="color: #003366; font-weight:bold;" class="nav-link" href="{{ url('perfilUsuario')}}">Mi Perfil</a>
				<a  style="color: #003366; font-weight:bold;" class="nav-link" href="{{ url('historia')}}">Acerca de Iravi</a>
			</div>
		</div>
<div class="content">
<!-- Multistep Form -->
<div class="main">
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
<p class="subtitle">Domicilio de env&iacute;o
		<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal"
		 data-whatever="@fat"><img src="images/agregar.png" width="30em" heigth="30em"></button> </p>

		 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva domicilio de Envio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="nuevodomicilio" method="post" enctype="multipart/form-data">
					  {{ csrf_field() }}
          <div class="form-group">
            <input type="text" class="form-control" id="calle"  name="calle" placeholder="calle" pattern="[A-Za-z\s]+"
						title="El nombre de la calle debe llevar solo letras y espacios" required>
          </div>
					<div class="form-group">
            <input type="text" class="form-control" id="ninterior"  name="ninterior" placeholder="Numero Interior"pattern="[0-9]+"
						title="El numero interior solo puede llevar numeros">
          </div>
					<div class="form-group">
            <input type="text" class="form-control" id="nexterior"  name="nexterior" placeholder="Numero Exterior"pattern="[0-9]+"
						title="El numero exterior solo puede llevar numeros" required>
          </div>
					<div class="form-group">
            <input type="text" class="form-control" id="colonia"  name="colonia" placeholder="Colonia"pattern="[A-Za-z\s]+"
						title="El nombre de la colonia debe llevar solo letras y espacios" required>
          </div>
					<div class="form-group">
            <input type="text" class="form-control" id="municipio"  name="municipio" placeholder="Municipio"pattern="[A-Za-z\s]+"
						title="El nombre del municipio debe llevar solo letras y espacios" required>
          </div>
					<div class="form-group">
            <input type="text" class="form-control" id="ciudad"  name="ciudad" placeholder="Ciudad" pattern="[A-Za-z\s]+"
						title="El nombre de la ciudad debe llevar solo letras y espacios" required>
          </div>
					<div class="form-group">
            <input type="text" class="form-control" id="pais"  name="pais" placeholder="Pais" pattern="[A-Za-z\s]+"
						title="El nombre del pais debe llevar solo letras y espacios" required>
          </div>
					<div class="form-group">
            <input type="text" class="form-control" id="cp"  name="cp" placeholder="Codigo Postal" pattern="[0-9]{5}"
						title="El codigo postal debe contener solo numeros y tener una longitud de cinco caracteres" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar domicilo</button>
			</form>
      </div>
    </div>
  </div>
</div>
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
<form action="paypal" class="regform" method="post">
<!-- Cosas que se repiten (Domicilio) -->
@foreach ($tablaDetalleDireccion as $direccion)
<div class="radio_btn">
<input type="radio" name="direccionSeleccionada" value="{{$direccion->iddireccion}}">

<p>Calle: {{$direccion->calle}}  #{{$direccion->numext}}</p>
<p>Interior: {{$direccion->numint}}</p>
<p>Colonia {{$direccion->colonia}}</p>
<p> {{$direccion->ciudad}}, {{$direccion->municipio}}, {{$direccion->codigopostal}}</p>
<p> {{$direccion->pais}}</p>
</div>
<br>
@endforeach
<!-- Fin de las cosas que se repiten -->

	  {{ csrf_field() }}
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
{{$paqueteria->nombre}}, ${{$paqueteria->precio}}
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
<input id="total" type="text" hidden="hidden" name="subtotal" value={{$granTotal}}>

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
<p>Costo del Envio: </p>
<p> xxx </p>
</div>
<div align="center">
<p>Gran Total: </p>
<p> sss </p>
</div>
</fieldset>
</form>
</div>
</div>
<script src="js/form.js"></script>
@extends('layouts.footer')
