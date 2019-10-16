@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<style type="text/css">
	input
	{
		border-radius: 3px;
		border: 1px gray;
		border-style: solid;
		background-color: #eee;
		color: #003366;
		border-color: #003366;
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
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('compras_Realizadas')}}">Compras realizadas</a>
				<a  class="nav-link active" href="{{ url('perfil_Usuario')}}">Mi Perfil</a>
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('historia')}}">Acerca de Iravi</a>
			</div>
		</div>
		<div class="col-6">
			<div class="container" style="width: 50em">
	<div class="row">
		<div class="col-12">
			<h3 id="text">Mi Perfil</h3>
		</div>
	</div>
<br>
	<div class="card">
		<div class="card-body">
	<form>
		<div class="form-title">
			<h5 id="text">Datos personales</h5>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Nombre:</label>
				</div>
				<div class="col-6">
								<input id="text"type="text" name="Nombre" placeholder="Jesús" contenteditable="true">
				</div>
		</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Apellido Paterno:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="Nombre" placeholder="Hernández" contenteditable="false">
				</div>
		</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Nombre Materno:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="Nombre" placeholder="Rodríguez" contenteditable="false">
				</div>
		</div>
		</div>
		<div class="form-title">
			<h5 id="text">Datos del domicilio</h5>
		</div>
			<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Calle:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="Nombre" placeholder="Zaragoza" contenteditable="false">
				</div>
		</div>
		</div>
			<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text" >N&uacute;mero:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="Nombre" placeholder="23A" contenteditable="false">
				</div>
		</div>
		</div>
			<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Colonia:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="Nombre" placeholder="Santos Degollado" contenteditable="false">
				</div>
		</div>
		</div>
			<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text" >C&oacute;digo P&oacute;stal:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="Nombre" placeholder="86645" contenteditable="false">
				</div>
		</div>
		</div>
			<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Municipio:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="Nombre" placeholder="Morelia" contenteditable="false">
				</div>
		</div>
		</div>
			<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Estado:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="Nombre" placeholder="Michoacán" contenteditable="false">
				</div>
		</div>
		</div>
		<div class="form-title">
			<h5 id="text">Datos de usuario</h5>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Usuario:</label>
				</div>
				<div class="col-6">
								<input id="text" type="text" name="fechaNac" placeholder="Jesus" contenteditable="false">
				</div>
		</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-6">
								<label id="text">Contrase&ntilde;a:</label>
				</div>
				<div class="col-6">
								<input id="text" type="password" name="Nombre" placeholder="Computadora123" contenteditable="false">
				</div>
		</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-3">
						<button id="button" class="btn btn-primary">Modificar datos</button>
				</div>
				<div class="col-3">
							<button id="button" class="btn btn-primary">Guardar</button>	
				</div>
				<div class="col-3"></div>
		</div>
		</div>
	</form>
</div>
		</div>
	</div>
		</div>
		<div class="col-3">
			
		</div>
	</div>
</div>
	<br><br><br><br>
@extends('layouts.footer')