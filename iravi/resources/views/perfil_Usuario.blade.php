@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<style type="text/css">
	input
	{
		border: none;
		background-color: transparent;
		color: #9FA5AB;
	}
	#text {
		color: #003366;
	}
	#button{
		background-color: #003366;
		border-color: #003366;

		border-style:solid;
	}

	.nav-link.active{
		background-color:#92d050 !important;
		border-color: #92d050 !important;
		border-style:solid;
		font-weight: bold;
	}

	.card-body{
		border-color: #003366;
		border-style:solid;
	}



</style>
<br><br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div  class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a  style="color: #003366; font-weight:bold;" class="nav-link" href="{{ url('comprasRealizadas')}}">
				<a  style="color: 92d050; font-weight:bold;" class="nav-link letra" href="{{ url('comprasRealizadas')}}">
					Compras realizadas
				</a>
				<a  class="nav-link active" href="{{ url('perfilUsuario')}}">
					Mi Perfil
				</a>
				<a  style="color: #003366; font-weight:bold;" class="nav-link" href="{{ url('historia')}}">
				<a  style="color: 92d050; font-weight:bold;" class="nav-link letra" href="{{ url('historia')}}">
					Acerca de Iravi
				</a>
			</div>
		</div>

		<div class="col-md-6" >
			<center>
				<div class="mensaje2">
					<h2>
					Bienvenido {{$usuarioDatos[0]->nombrepersona}} {{$usuarioDatos[0]->apellidopaterno}} {{$usuarioDatos[0]->apellidomaterno}}
					</h2>
				</div>
			</center>

			<br>
			<br>
			<div style="background: transparent;"
  				<article class="card-body" >
					<h4 class="card-title text-center mb-4 mt-1">Mi perfil</h4>
					<hr style="margin-bottom: 40px;">
						<div class="form-title">
							<h5 id="text">Datos personales</h5>
						</div>

						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-4">
									<label id="text">Nombre:</label>
								</div>

								<div class="col-7">
									<input id="nombre" type="text" name="txtNombre" readonly="true" style="width: 400px; border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->nombrepersona}}" onkeypress="return soloLetras(event)">
								</div>
								<div class="col-1">
									<a href="#editarNombre" role="button" class="btn btn-large btn-primary" data-toggle="modal">&rarr;</a>
								</div>
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text">Apellido Paterno:</label>
								</div>

								<div class="col-7">
									<input id="apellidopaterno" type="text" readonly="true" name="txtApellidoP" contenteditable="false" style="width: 400px;  border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->apellidopaterno}}" onkeypress="return soloLetras(event)">
								</div>
								<div class="col-1">
									<a href="#editarApellidoP" role="button" class="btn btn-large btn-primary" data-toggle="modal">&rarr;</a>
								</div>
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text">Apellido Materno:</label>
								</div>

								<div class="col-7">
									<input id="apellidomaterno" type="text" readonly="true" name="txtApellidoM"  contenteditable="false" style="width: 400px; border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->apellidomaterno}}" onkeypress="return checkSoloLetras(event)">
								</div>
								<div class="col-1">
									<a href="#editarApellidoM" role="button" class="btn btn-large btn-primary" data-toggle="modal">&rarr;</a>
								</div>
							</div>
						</div>

						<div class="form-title">
							<br>
							<br>
							<h5 id="text">Datos de domicilios</h5>
						</div>

						<?php
						$i=-1;
						?>
						@foreach ($direcciones as $direccion)
						<?php
						$i=$i+1;
						?>
						<form action="editarDireccion" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-2">
									<label id="text">Calle:</label>
								</div>
								<div class="col-4">
									<input id="calle" type="text" readonly="true" name="txtCalle" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->calle}}" onkeypress="return domicilio(event)">
								</div>
								<div class="col-2">
									<label id="text" >N&uacute;mero:</label>
								</div>
								<div class="col-2">
									<input id="numint" type="text" readonly="true" name="txtNumero" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->numext}}" onkeypress="return checkNumeros(event)">

								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Colonia:</label>
								</div>
								<div class="col-4">
									<input id="colonia" type="text" readonly="true" name="txtColonia" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->colonia}}" onkeypress="return domicilio(event)">

								</div>
								<div class="col-2">
									<label id="text" >C&oacute;digo P&oacute;stal:</label>
								</div>
								<div class="col-2">
									<input id="codigopostal" type="text" readonly="true" name="txtCodigoP" contenteditable="false"  style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->codigopostal}}" onkeypress="return checkNumeros(event)">

								</div>
							</div>
							<div class="row">

							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Municipio:</label>
								</div>
								<div class="col-4">
									<input id="municipio" type="text" readonly="true" name="txtMunicipio" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->municipio}}" onkeypress="return checkSoloLetras(event)">

								</div>
								<div class="col-2">
									<label id="text">Ciudad:</label>
								</div>
								<div class="col-2">
									<input id="ciudad" type="text" readonly="true" name="txtEstado" contenteditable="false" style="width:200px;  border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->ciudad}}" onkeypress="return checkSoloLetras(event)">

								</div>

							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Tipo de dirección:</label>
								</div>
								<div class="col-4">
									<input id="text" type="text" readonly="true" name="txtTipo" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->tipo}}">

								</div>
								<div class="col-12" align="right">
									<br>
									<input type="hidden" name="txtidPersona1" " value="{{$usuarioDatos[0]->idpersona}}">
									<input type="hidden" name="txtfkdireccion" value="{{$direcciones[$i]->fk_direccion}}">
									<button role="button" class="btn btn-large btn-primary" data-toggle="modal">Modificar direcci&oacute;n</button>
								</div>
							</div>
						</div>
						</form>
						@endforeach
						<?php
						$i=-1;
						?>
						<div class="form-title" style="color: blue">
							<a href="#agregarDireccion" role="button" class="btn btn-large btn-primary" data-toggle="modal">Agregar otra dirección</a>
						</div>

						<div class="form-title">
							<br>
							<br>
							<h5 id="text">Datos de usuario</h5>
						</div>

						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-2">
									<label id="correoelectronico">Correo electr&oacute;nico:</label>
								</div>
								<div class="col-9">
									<input id="text" type="text" readonly="true" name="txtCorreoE" contenteditable="false" style="width: 500px; border: none; background-color: transparent; color: #9FA5AB;"   value="{{$usuarioDatos[0]->correoelectronico}}">

								</div>
								<div class="col-1">
									<a href="#editarCorreo" role="button" class="btn btn-large btn-primary" data-toggle="modal">&rarr;</a>
								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Contrase&ntilde;a:</label>
								</div>
								<div class="col-9">
									<input id="contrasena" type="password" readonly="true" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->contrasena}}" onkeypress="return domicilio(event)">
								</div>
								<div class="col-1">
									<a href="#editarContraseña" role="button" class="btn btn-large btn-primary" data-toggle="modal">&rarr;</a>
								</div>
							</div>
						</div>
					</hr>
				</article>
			</div>

		</div>
	</div>
</div>


<!-- Modal / Ventana / Overlay en HTML -->
<div id="editarNombre" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Editar Nombre</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

           	<form  action="perfilUsuarioNombre" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

           		<div class="modal-body">
	            	<input type="hidden" name="txtidPersona" value="{{$usuarioDatos[0]->idpersona}}">
	            	<input id="nombre"type="text" name="txtNombreEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->nombrepersona}}" autofocus="value"   pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50" onkeypress="return soloLetras(event)">
	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>

	        	<div class="modal-footer">
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
				</div>
	        </form>
        </div>
    </div>
</div>


<div id="editarApellidoP" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Editar Apellido Paterno</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

           	<form  action="perfilUsuarioApellidoP" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

           		<div class="modal-body">
	            	<input type="hidden" name="txtidPersona" value="{{$usuarioDatos[0]->idpersona}}">
	            	<input id="apellidopaterno"type="text" name="txtApellidoPEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->apellidopaterno}}" autofocus="value" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50" onkeypress="return soloLetras(event)">
	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>

	        	<div class="modal-footer">
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
				</div>
	        </form>
        </div>
    </div>
</div>

<div id="editarApellidoM" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Editar Apellido Materno</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

           	<form  action="perfilUsuarioApellidoM" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

           		<div class="modal-body">
	            	<input type="hidden" name="txtidPersona" value="{{$usuarioDatos[0]->idpersona}}">
	            	<input id="apellidomaterno"type="text" name="txtApellidoMEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->apellidomaterno}}" autofocus="value"  pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50" onkeypress="return soloLetras(event)">
	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>

	        	<div class="modal-footer">
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
				</div>
	        </form>
        </div>
    </div>
</div>

<div id="editarCorreo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Editar Correo Electr&oacute;nico</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

           	<form  action="perfilUsuarioCorreo" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

           		<div class="modal-body">
	            	<input type="hidden" name="txtidPersona" value="{{$usuarioDatos[0]->idpersona}}">
	            	<input id="text"type="email" name="txtCorreoEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->correoelectronico}}" autofocus="value" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required="" maxlength="100" onkeypress="return correo(event)">
	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>

	        	<div class="modal-footer">
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
				</div>
	        </form>
        </div>
    </div>
</div>

<div id="editarContraseña" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Editar Contraseña</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

           	<form  action="perfilUsuarioContra" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

           		<div class="modal-body">
	            	<input type="hidden" name="txtidPersona" value="{{$usuarioDatos[0]->idpersona}}">
	            	<input id="contrasena"type="text" name="txtContraseñaEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->contrasena}}" autofocus="value" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="200" required=""  onkeypress="return domicilio(event)">
	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>

	        	<div class="modal-footer">
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
				</div>
	        </form>
        </div>
    </div>
</div>


<div id="agregarDireccion" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Agregar Direcci&oacute;n</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

           	<form  action="agregarDirecciones" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

           		<div class="modal-body">
	            	<div class="row">
						<div class="col-2">
							<label id="text">Calle:</label>
						</div>

						<div class="col-5">
							<input id="calle"type="text" name="txtCalleAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50" onkeypress="return soloLetras(event)">
						</div>

					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Número Interior:</label>
						</div>

						<div class="col-5">
							<input id="numint"type="text" name="txtNumIntAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="^{1,}[ a-zA-ZÁÉÍÓÚñáéíóú][\s]*" required="" maxlength="50" onkeypress="return domicilio(event)">
						</div>

					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Número Exterior:</label>
						</div>

						<div class="col-5">
							<input id="numint"type="text" name="txtNumExtAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="^{1,}[ a-zA-ZÁÉÍÓÚñáéíóú][\s]*"  maxlength="50" onkeypress="return domicilio(event)">
						</div>

					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Colonia:</label>
						</div>

						<div class="col-5">
							<input id="colonia"type="text" name="txtColoniaAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50" onkeypress="return soloLetras(event)">
						</div>

					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Municipio:</label>
						</div>

						<div class="col-5">
							<input id="municipio"type="text" name="txtMunicipioAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50" onkeypress="return soloLetras(event)">
						</div>

					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Ciudad:</label>
						</div>

						<div class="col-5">
							<input id="ciudad"type="text" name="txtCiudadAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50" onkeypress="return soloLetras(event)">
						</div>

					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Pais:</label>
						</div>

						<div class="col-5">
							<input id="pais"type="text" name="txtPaisAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50" onkeypress="return soloLetras(event)">
						</div>

					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Código Postal:</label>
						</div>

						<div class="col-5">
							<input id="codigopostal"type="text" name="txtCodigoPAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="^[0-9]{5}" required="" maxlength="8" onkeypress="return checkNumeros(event)">
						</div>

					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Tipo de dirección:</label>
						</div>

						<div class="col-5">
							<select  name="txtTipoDireccion" class="custom-select" style="width: 350px;">
				 	 			@foreach ($tipoDireccion as $tipoDireccion)
										<option  value={{ $tipoDireccion->idtipo }}>
											{{ $tipoDireccion->tipo }}
										</option>
				  				@endforeach
		       				</select>
		       			</div>
		       		</div>

	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>
	       		<input type="hidden" name="txtidPersona" value="{{$usuarioDatos[0]->idpersona}}">

	        	<div class="modal-footer">
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Agregar Dirección</button>
				</div>
	        </form>
        </div>
    </div>
</div>


	<script type="text/javascript">

	 function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
     function domicilio(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " abcdefghijklmnñopqrstuvwxyz0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

     function correo(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " abcdefghijklmnñopqrstuvwxyz0123456789@-_.";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

	function checkNumeros(e)
	{
    	tecla = (document.all) ? e.keyCode : e.which;

    	//Tecla de retroceso para borrar, siempre la permite
    	if (tecla == 8) {
        	return true;
    	}

    	// Patron de entrada, en este caso solo acepta numeros y letras
    	patron = /[0-9]/;
    	tecla_final = String.fromCharCode(tecla);
    	return patron.test(tecla_final);
	}

</script>


	<br><br><br><br>
@extends('layouts.footer')
