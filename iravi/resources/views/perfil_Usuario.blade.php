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
					<h2>
					Bienvenido {{$usuarioDatos[0]->nombrepersona}} {{$usuarioDatos[0]->apellidopaterno}} {{$usuarioDatos[0]->apellidomaterno}}
					</h2>
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
						<div class="form-title">
							<h5 id="text">Datos personales</h5>
						</div>
							
						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-4">
									<label id="text">Nombre:</label>
								</div>
								
								<div class="col-7">
									<input id="text"type="text" name="txtNombre" readonly="true" style="width: 400px; border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->nombrepersona}}">
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
									<input id="text" type="text" name="txtApellidoP" contenteditable="false" style="width: 400px;  border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->apellidopaterno}}">
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
									<input id="text" type="text" name="txtApellidoM"  contenteditable="false" style="width: 400px; border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->apellidomaterno}}">
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
			
						@foreach ($direcciones as $direccion)
						<form action="modificarDireccion" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-2">
									<label id="text">Calle:</label>
								</div>
								<div class="col-4">
									<input id="text" type="text" name="txtCalle" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->calle}}">
								</div>
								<div class="col-2">
									<label id="text" >N&uacute;mero:</label>
								</div>
								<div class="col-2">
									<input id="text" type="text" name="txtNumero" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->numint}}">

								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Colonia:</label>
								</div>
								<div class="col-4">
									<input id="text" type="text" name="txtColonia" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->colonia}}">

								</div>
								<div class="col-2">
									<label id="text" >C&oacute;digo P&oacute;stal:</label>
								</div>
								<div class="col-2">
									<input id="text" type="text" name="txtCodigoP" contenteditable="false"  style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->codigopostal}}">

								</div>
							</div>
							<div class="row">
								
							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Municipio:</label>
								</div>
								<div class="col-4">
									<input id="text" type="text" name="txtMunicipio" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->municipio}}">

								</div>
								<div class="col-2">
									<label id="text">Ciudad:</label>
								</div>
								<div class="col-2">
									<input id="text" type="text" name="txtEstado" contenteditable="false" style="width:200px;  border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->ciudad}}">

								</div>
								
							</div>
							<div class="row">
								<div class="col-2">
									<label id="text">Tipo de dirección:</label>
								</div>
								<div class="col-4">
									<input id="text" type="text" name="txtTipo" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$direccion->tipo}}">

									<input id="text" type="hidden" name="txtDet" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" >

								</div>
								<div class="col-12" align="right">
									<br>
									<a href="#editarDireccion" role="button" class="btn btn-large btn-primary" data-toggle="modal">Modificar direcci&oacute;n</a>
								</div>
							</div>
						</div>
						</form>
						@endforeach

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
									<label id="text">Correo electr&oacute;nico:</label>
								</div>
								<div class="col-9">
									<input id="text" type="text" name="txtCorreoE" contenteditable="false" style="width: 500px; border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->correoelectronico}}">

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
									<input id="text" type="password" contenteditable="false" style=" border: none; background-color: transparent; color: #9FA5AB;" value="{{$usuarioDatos[0]->contrasena}}">
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
	            	<input id="text"type="text" name="txtNombreEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->nombrepersona}}" autofocus="value">
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
	            	<input id="text"type="text" name="txtApellidoPEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->apellidopaterno}}" autofocus="value">
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
	            	<input id="text"type="text" name="txtApellidoMEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->apellidomaterno}}" autofocus="value">
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
	            	<input id="text"type="text" name="txtCorreoEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->correoelectronico}}" autofocus="value">
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
	            	<input id="text"type="text" name="txtContraseñaEditar" style="width: 400px; border: none; background-color: transparent; color: black; border-style: solid; border-color: blue;" value="{{$usuarioDatos[0]->contrasena}}" autofocus="value">
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
							<input id="text"type="text" name="txtCalleAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Número Interior:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtNumIntAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Número Exterior:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtNumExtAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Colonia:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtColoniaAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Municipio:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtMunicipioAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Ciudad:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtCiudadAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Pais:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtPaisAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Código Postal:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtCodigoPAgregar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
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


<div id="editarDireccion" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Modificar Direcci&oacute;n</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>           
            </div>
           	
           	<form  action="modificarDireccion" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

           		<div class="modal-body">
	            	<div class="row">
						<div class="col-2">
							<label id="text">Calle:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtCalleEditar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Número Interior:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtNumIntEditar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Número Exterior:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtNumExtEditar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Colonia:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtColoniaEditar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Municipio:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtMunicipioEditar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Ciudad:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtCiudadEditar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Pais:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtPaisEditar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Código Postal:</label>
						</div>
								
						<div class="col-5">
							<input id="text"type="text" name="txtCodigoPEditar" style="width: 350px; border: solid; border-color: blue; background-color: transparent; color: black;" value="">
						</div>
								
					</div>

					<div class="row">
						<div class="col-2">
							<label id="text">Tipo de dirección:</label>
						</div>

						
		       		</div>

	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>
	       		<input type="hidden" name="txtidPersona" value="{{$usuarioDatos[0]->idpersona}}">
	            
	        	<div class="modal-footer">
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
				</div>
	        </form>   
        </div>
    </div>
</div>

<div class="col-3">
			
</div>

	<br><br><br><br>
@extends('layouts.footer')