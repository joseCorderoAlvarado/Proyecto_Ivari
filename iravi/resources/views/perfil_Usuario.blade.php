@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<style type="text/css">
	input
	{
		border: none;
		background-color: transparent;
		color: #003366;
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
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('comprasRealizadas')}}">
					Compras realizadas
				</a>
				<a  class="nav-link active" href="{{ url('perfilUsuario')}}">
					Mi Perfil
				</a>
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('historia')}}">
					Acerca de Iravi
				</a>
			</div>
		</div>

		<div class="col-md-6" >
			<center>
				<div class="mensaje2">
					Bienvenido @Nombre de Usuario
				</div>
			</center>
			<center>
				<div class="toggle toggle2">
            		<span>
            			Ver Perfil
            		</span>
				</div>
			</center>
			<br>
			<br>
			<div class="card formulario1" style="background: transparent;"
  				<article class="card-body" >
					<h4 class="card-title text-center mb-4 mt-1">Mi perfil</h4>
					<hr style="margin-bottom: 40px;">
					<form>
						<div class="form-title">
							<h5 id="text">Datos personales</h5>
						</div>
							
						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-4">
									<label id="text">Nombre:</label>
								</div>
								
								<div class="col-7">
									<input id="text"type="text" name="txtNombre" placeholder="Javier Agustin" readonly="true" style="width: 400px">
								</div>
								<div class="col-1">
									&rarr;
								</div>
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text">Apellido Paterno:</label>
								</div>
								
								<div class="col-7">
									<input id="text" type="text" name="txtApellidoP" placeholder="Ramirez" contenteditable="false" style="width: 400px">
								</div>
								<div class="col-1">
									&rarr;
								</div>
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text">Apellido Materno:</label>
								</div>
				
								<div class="col-7">
									<input id="text" type="text" name="txtApellidoM" placeholder="Martinez" contenteditable="false" style="width: 400px">
								</div>
								<div class="col-1">
									&rarr;
								</div>
							</div>
						</div>
		
						<div class="form-title">
							<br>
							<br>
							<h5 id="text">Datos del domicilio</h5>
						</div>
			
						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-2">
									<label id="text">Calle:</label>
								</div>
								<div class="col-4">
									<input id="text" type="text" name="txtCalle" placeholder="Aldama" contenteditable="false" >
								</div>
								<div class="col-2">
									<label id="text" >N&uacute;mero:</label>
								</div>
								<div class="col-2">
									<input id="text" type="text" name="txtNumero" placeholder="#492" contenteditable="false" >
								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Colonia:</label>
								</div>
								<div class="col-4">
									<input id="text" type="text" name="txtColonia" placeholder="Amado Nervo" contenteditable="false">
								</div>
								<div class="col-2">
									<label id="text" >C&oacute;digo P&oacute;stal:</label>
								</div>
								<div class="col-2">
									<input id="text" type="text" name="txtCodigoP" placeholder="63940" contenteditable="false" >
								</div>
							</div>
							<div class="row">
								
							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Municipio:</label>
								</div>
								<div class="col-4">
									<input id="text" type="text" name="txtMunicipio" placeholder="Ixtlán del Rio" contenteditable="false" >
								</div>
								<div class="col-2">
									<label id="text">Estado:</label>
								</div>
								<div class="col-2">
									<input id="text" type="text" name="txtEstado" placeholder="Nayarit" contenteditable="false" >
								</div>
								
							</div>
							<div class="row">
								<div class="col-12">
									<br>
									<center>
										<button id="button" class="btn btn-primary">Modificar direcci&oacute;n</button>
									</center>
								</div>
							</div>
						</div>
						<div class="form-title" style="color: blue">
							Agregar otra dirección
						</div>

						<div class="form-title">
							<br>
							<br>
							<h5 id="text">Datos de usuario</h5>
						</div>
		
						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-2">
									<label id="text">Correo electr&oacute;nico:</label>
								</div>
								<div class="col-9">
									<input id="text" type="text" name="txtCorreoE" placeholder="javier_agustinrm@hotmail.com" contenteditable="false" style="width: 500px">
								</div>
								<div class="col-1">
									&rarr;
								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Contrase&ntilde;a:</label>
								</div>
								<div class="col-9">
									<input id="text" type="password" name="txtContraseña" placeholder="*****" contenteditable="false">
								</div>
								<div class="col-1">
									&rarr;
								</div>
							</div>
						</div>
					</form>
					</hr>
				</article>
			</div>
		</div>
	</div>
</div>

<div class="col-3">
			
</div>

	<br><br><br><br>
@extends('layouts.footer')