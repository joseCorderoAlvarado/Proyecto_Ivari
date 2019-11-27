
<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Alta Usuarios Administrador---------------------------}}
<div class="container">
<div class="row">
<div class="col-md-12">
	<br>
	<center>
		<div class="toggle toggle2">
            <span>
            	<div class="col-1">
					<a href="#registrarUsuario" role="button" class="btn btn-large btn-primary" style="width: 200px;" data-toggle="modal">Mostrar formulario</a>
				</div></span>
        </div></center><br>
          <div class="mensaje">
        	<br><br>
        	<center><h2 >BIENVENIDO A IRAVI</h2><br>
        	<h5>Compra lo que quieras, cuando quieras. <br> Revisa nuestros cat&aacute;logos </h5>
        	<br><br><br><br>
        </div>
<div id="registrarUsuario" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Registro Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

           	<form  action="registroUsuarioGuardar" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

           		<div class="modal-body">
           			<div class="row">
						<div class="col-3">
							<label id="text">Nombre:</label>
						</div>

						<div class="col-5">
							<input name="nombre" class="form-control formulario_input" type="text" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="[A-Za-z\s]+"
							title="El nombre debe llevar solo letras y espacios" required>
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Apellido Paterno:</label>
						</div>

						<div class="col-5">
							<input name="app" class="form-control formulario_input" type="text" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="[A-Za-z]+"
							title="El apellido debe llevar solo letras" required>
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Apellido Materno:</label>
						</div>

						<div class="col-5">
							<input type="text" name="apm" class="form-control formulario_input" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" pattern="[A-Za-z]+"
							title="El apellido debe llevar solo letras" required>
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Fecha de nacimiento:</label>
						</div>

						<div class="col-3">
							<input type="date" name="nacimiento" class="form-control" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Correo Electr&oacute;nico:</label>
						</div>

						<div class="col-5">
							<input type="email" name="correo" class="form-control formulario_input"  style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Contrase&ntilde;a:</label>
						</div>

						<div class="col-5">
							<input type="password" name="contrasena" class="form-control formulario_input" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value=""
							pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
							title="El password debe contener por lo menos una mayusucla, una minuscula, un numero y tener por lo menos ocho caracteres">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Sexo:</label>
						</div>

						<div class="col-5">
							<select  name="genero" class="custom-select" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;">
				 	 			@foreach ($tipoGenero as $tipoGenero)
										<option  value={{ $tipoGenero->idgenero }}>
											{{ $tipoGenero->sexo }}
										</option>
				  				@endforeach
		       				</select>


						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Tipo de dirección:</label>
						</div>

						<div class="col-5">
							<select  name="tipodireccion" class="custom-select" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;">
				 	 			@foreach ($tipoDireccion as $tipoDireccion)
										<option  value={{ $tipoDireccion->idtipo }}>
											{{ $tipoDireccion->tipo }}
										</option>
				  				@endforeach
		       				</select>
		       			</div>
		       		</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Calle:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="calle" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Número Interior:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="ninterior" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Número Exterior:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="nexterior" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Colonia:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="colonia" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Municipio:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="municipio" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Ciudad:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="ciudad" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Pais:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="pais" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Código Postal:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="cp" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>

					</div>

					<div class="row">
						<div class="col-3">
							<label id="text">Teléfono:</label>
						</div>

						<div class="col-5">
							<input id="text"type="text" name="telefono" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" title="El telefono debo contener solo numeros" required>
						</div>

					</div>

	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>

	        	<div class="modal-footer">
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Registrar</button>
				</div>
	        </form>
        </div>
    </div>
</div>

{{-------------------------Fin de alta usuario administrador---------------------------}}
@extends('layouts.footer')
