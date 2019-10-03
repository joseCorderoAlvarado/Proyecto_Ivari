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
								<img src="" class="card-img-left" style="width: 300px; height: 300px;">
							</div>
							<div class="col-6" >
								<label><h3>Nombre del producto</h3></label>
								<label><h5>Descripci&oacute;n del producto</h5><br>Esta ser&aacute; la descripci&oacute;n del producto</label><br>
								<label>Precio</label>
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
			
		</div>
	</div>
</div>
<br><br><br>
@extends('layouts.footer')