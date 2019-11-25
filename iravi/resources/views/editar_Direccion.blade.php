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
				<a  style="color: 92d050; font-weight:bold;"class="nav-link letra" href="{{ url('comprasRealizadas')}}">
					Compras realizadas
				</a>
				<a  class="nav-link active" href="{{ url('perfilUsuario')}}">
					Mi Perfil
				</a>
				<a  style="color: 92d050; font-weight:bold;" class="nav-link letra" href="{{ url('historia')}}">
					Acerca de Iravi
				</a>
			</div>
		</div>

		
			<div  style="background: transparent; width: 800px; ">
  				<article class="card-body" >
  					<h4 id="text">Datos de domicilios</h4>
					<hr style="margin-bottom: 40px;">

					<form action="eliminarDireccion" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
								<input type="hidden" name="txtfkdireccion" value="{{$direcciones[0]->iddireccion}}" align="center">

								<button role="button" class="btn btn-large btn-primary" style="background-color: darkred; border-color: darkred;" data-toggle="modal">Eliminar direcci&oacute;n</button> 
						</form>

						<form action="modificarDireccion" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group" style="background-color: #E0E0E0;">
							<div class="row">
								<div class="col-4">
									<label id="text">Calle:</label>
								</div>
								<div class="col-6">
									<input id="text" type="text"  name="txtCalle" contenteditable="false" style=" border: solid; background-color: transparent;" value="{{$direcciones[0]->calle}}" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50">
								</div>
							</div>
							
							<div class="row">
								<div class="col-4">
									<label id="text" >N&uacute;mero interior:</label>
								</div>
						
								<div class="col-6">
									<input id="text" type="text" name="txtNumeroInt" contenteditable="false" style=" border: solid; background-color: transparent; " value="{{$direcciones[0]->numint}}"  pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50">

								</div>
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text" >N&uacute;mero exterior:</label>
								</div>
						
								<div class="col-6">
									<input id="text" type="text" name="txtNumeroExt" contenteditable="false" style=" border: solid; background-color: transparent; " value="{{$direcciones[0]->numext}}"  pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50">

								</div>
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text">Colonia:</label>
								</div>
								<div class="col-6">
									<input id="text" type="text" name="txtColonia" contenteditable="false" style=" border: solid; background-color: transparent; " value="{{$direcciones[0]->colonia}}" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50">
								</div>
							</div>
							
							<div class="row">
								<div class="col-4">
									<label id="text" >C&oacute;digo P&oacute;stal:</label>
								</div>
								<div class="col-6">
									<input id="text" type="text"  name="txtCodigoP" contenteditable="false"  style=" border: solid; background-color: transparent;"  value="{{$direcciones[0]->codigopostal}}"  pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="8">

								</div>
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text">Municipio:</label>
								</div>
								<div class="col-6">
									<input id="text" type="text"  name="txtMunicipio" contenteditable="false" style=" border: solid; background-color: transparent;"  value="{{$direcciones[0]->municipio}}"  pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50">

								</div>
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text">Ciudad:</label>
								</div>
								<div class="col-6">
									<input id="text" type="text"  name="txtCiudad" contenteditable="false" style="  border: solid; background-color: transparent;" value="{{$direcciones[0]->ciudad}}" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50">

								</div>
								
							</div>

							<div class="row">
								<div class="col-4">
									<label id="text">Pais:</label>
								</div>
								<div class="col-6">
									<input id="text" type="text"  name="txtPais" contenteditable="false" style="  border: solid; background-color: transparent;" value="{{$direcciones[0]->pais}}" pattern="^[ a-zA-ZÁÉÍÓÚñáéíóú]{1,}[\s]*" required="" maxlength="50">

								</div>
								
							</div>


							<div class="row">
								<div class="col-4">
									<label id="text">Tipo de dirección:</label>
								</div>

								<div class="col-6">
									<select  name="txtTipoDireccion" class="custom-select" style="width: 370px;">
						 	 			@foreach ($tipoDireccion as $tipoDireccion)
												<option  value={{ $tipoDireccion->idtipo }}>
													{{ $tipoDireccion->tipo }} 
												</option>
						  				@endforeach
				       				</select>
				       			</div>
				       		</div>

								<div class="col-12" align="center">
									<br>
									<input type="hidden" name="txtidPersona1" " value="{{$idPersona}}">
									<input type="hidden" name="txtfkdireccion" value="{{$direcciones[0]->iddireccion}}">
									<button role="button" class="btn btn-large btn-primary" data-toggle="modal">Modificar direcci&oacute;n</button> 


								</div>
							</div>
						</div>
						</form>
						
						
					</hr>
				</article>
			</div>

	</div>
</div>

<div class="col-3">
			
</div>

	<br><br><br><br>
@extends('layouts.footer')