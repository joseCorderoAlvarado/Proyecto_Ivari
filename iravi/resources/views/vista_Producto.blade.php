@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<br><br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a  class="nav-link" href="{{ url('compras_Realizadas')}}">Compras realizadas</a>
				<a  class="nav-link" href="{{ url('perfil_Usuario')}}">Mi Perfil</a>
				<a  class="nav-link" href="{{ url('Historia')}}">Acerca de Iravi</a>
			</div>
		</div>
		<div class="col-6">
			<div class="card">
				<div class="card-body">
					<div class="container">
						<div class="row">
							<div class="col-6">
								<img src="storage{{$tablaFotosProducto[0]->ruta }}" class="card-img-left" style="width: 300px; height: 300px;">
							</div>
							<div class="col-6" >
								<p><label><h3> {{$tablaProductos[0]->nombreproducto }}</h3></label></p>

								<label><h5>Descripci&oacute;n del producto</h5>
								<p> {{$tablaProductos[0]->descripcionproducto }} </label></p>
								<label> ${{$tablaProductos[0]->precio }}</label>
								<br><br>
								<button class="btn btn-primary"style="background:#003366" ">Agregar al carrito</button>
								<a href="{{ url('compras_Carrito')}}">
								<button class="btn btn-primary" " style="background:#003366">Comprar ahora</button>
								</a>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
		<div class="col-3">
					@foreach ($tablaFotosProducto as $foto)
					<img src="storage{{$foto->ruta }}" class="card-img-left" style="width: 100px; height: 100px;">
					@endforeach
		</div>
	</div>
</div>
<br><br><br>
@extends('layouts.footer')
