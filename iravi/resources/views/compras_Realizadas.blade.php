@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h2 class="animated bounce delay-2s">SEGUIMIENTO DE LAS COMPRAS</h2>	
		</div>
	</div>
</div>
<br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a  class="nav-link active" href="{{ url('comprasRealizadas')}}">Compras realizadas</a>
					<a  class="nav-link letra" href="{{ url('perfilUsuario')}}">Mi Perfil</a>
					<a  class="nav-link letra" href="{{ url('historia')}}">Acerca de Iravi</a>
				</div>
			</div>
		
		<div class="col-6">
		
			<div class="container">
				<div class="card">
					<div class="card-header">
						<div class="clearfix">
						<h3 class="card-title" id="align-left"> 
							Folio Compra: {{$consultaSeguimiento[0]->foliopedido}}
						</h3>
						<button id="align" class="card-text button">{{$consultaSeguimiento[0]->nombre_Estado}}</button>
						</div>
						</div>
					<div class="card-body">
					<div class="card-columns">
						<div class="card bg-light">
							<div class="card-body text-center">
								<label class="card-text"> Fecha de compra:</label>
								<button class="card-text button">{{$fechaBien}}</button>
							</div>
						</div>
						<div class="card bg-light">
							<div class="card-body text-center">
								<label class="card-text">Bonificaci&oacute;n</label><br>
								<button class="card-text button">${{$consultaSeguimiento[0]->descuento}}</button>
							</div>
						</div>
						<div class="card bg-light">
							<div class="card-body text-center">
								<label class="card-text">M&eacute;todo de Env&iacute;o</label><br>
								<button class="card-text button">{{$consultaSeguimiento[0]->nombre}}</button>
							</div>
						</div>
					</div>
					</div>
					
					<div class="card-footer">
						<div class="card bg-light">
							<div class="card-body text-center">
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<th width="20px">Nombre del producto</th>
										</tr>
									</thead>
									<tbody>
									@foreach($consultaSeguimiento as $consulta)
										
										<tr>
											<td width="20px">{{$consulta->nombreproducto}}</td>
										</tr>
									@endforeach;
									</tbody>
								</table>
							 
							</div>
						</div>
					</div>
					 
				</div>
			</div>
			<div>
	
			</div>
			
		</div>
		<div class="col-3">
			
		</div>
		</div>
	</div>

@extends('layouts.footer')