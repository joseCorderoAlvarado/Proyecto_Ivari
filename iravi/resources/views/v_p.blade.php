@extends('layouts.head')
@include('layouts.menu_Navegacion')
<br><br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-2">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a  hidden ="hidden" class="nav-link" style="color: #003366; font-weight:bold;" href="{{ url('comprasRealizadas')}}">Compras realizadas</a>
				<a  hidden="hidden" class="nav-link" style="color: #003366; font-weight:bold;" href="{{ url('perfilUsuario')}}">Mi Perfil</a>
				<a  hidden="hidden" class="nav-link" style="color: #003366; font-weight:bold;" href="{{ url('Historia')}}">Acerca de Iravi</a>
			</div>
		</div>
		<div class="col-8">
			<div class="card formulario">
				<div class="card-body">
					<div class="container">
						<div class="row">
							<div class="col-6">
								<div class="column">
								@foreach ($tablaFotosProducto as $foto)
								<img src="storage{{$foto->ruta }}" alt="{{$tablaProductos[0]->nombreproducto }}" style="width:150px; margin-bottom:15px; height: 100px; " onclick="myFunction(this);">
								@endforeach
								</div>
							</div>
							<div class="col-5">
								<h3> <label align="left">{{$tablaProductos[0]->nombreproducto }}</label></h3>
								<label><h5>Descripci&oacute;n del producto</h5>
								 {{$tablaProductos[0]->descripcionproducto }} </label>
								<label><h5>Precio</h5>
								<label> ${{$tablaProductos[0]->precio }}</label>
								<br><br>


								<input type="hidden" name="idProducto" value={{ $tablaProductos[0]->idproducto}}>
								Cantidad: <input type="number" name="cantidad" value="1" min="1" max="1000" step="1"/>
								<hr>
								<button  type="submit" class="formulario_btn" data-toggle="modal" data-target="#mensaje" style="background:#003366">agregar al carrito</button>

								<div class="container con">
 										 <!-- cierra imagen -->
 									 <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  										<!-- imagen a expandir -->
  									<img id="expandedImg" class="zoom" style="width:100%;  height:70%;">
  										<!-- Texto de la imagen -->
  									<div id="imgtext" hidden="hidden"></div>
									</div>
								</a>
							</div>
							<div id="mensaje" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<h4 class="modal-title">A&uacute;n no inicias sesi&oacute;n</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
								<div class="modal-footer">
									<form  action="Alerta" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}

										<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Iniciar sesi&oacute;n</button>
									</form>
									<form  action="Alerta1" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}
										<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Registrarse</button>
								</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br>
@extends('layouts.footer')
