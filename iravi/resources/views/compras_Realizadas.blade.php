@extends('layouts.head')
@include('layouts.menu_Navegacion')
<style type="text/css">
	.contenedor
	{
		display: inline-block;
		min-width: 100px;
		border-radius: 3px;
		background-color: #eee;
		padding-bottom: 5px;
		padding-top: 5px;
		padding-right: 10px;
		padding-left: 10px;
	}
	.texto
	{
		width: 100%;
		color: #666;
	}
	.alingCol
	{
		text-align: left;
	}
</style>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h2>SEGUIMIENTO DE LAS COMPRAS</h2>	
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a  class="nav-link" href="{{ url('compras_Realizadas')}}">Compras realizadas</a>
				<a  class="nav-link" href="{{ url('perfil_Usuario')}}">Mi Perfil</a>
				<a  class="nav-link" href="{{ url('historia')}}">Acerca de Iravi</a>
			</div>
		</div>
		<div class="col-6">
				<div class="container">
	<center>
		<div class="card" style="border-width: none; width: 40em; border-radius: 10px">
		<div class="card-body">
			<h3 class="card-title">Compra n&uacute;mero 220 - Septiembre</h3>
				<form>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Estado de la compra</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										En env&iacute;o
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Fecha de la compra</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										Viernes, 27 de septiembre de 2019
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Bonificaci&oacute;n</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										$227.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>M&eacute;todo de env&iacute;o</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										DHL
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>M&eacute;todo de pago</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										Tarjeta de cr&eacute;dito
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="row">
					<div class="col-auto">
						Productos:
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						1 Disco Duro Kingston AE/9300/RP:
					</div>
					<div class="col-6 alingCol">
						$2,009.00
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						1 Cable USB Universal MOBO:
					</div>
					<div class="col-6 alingCol">
						$320.00
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						2 Mouse DELL:
					</div>
					<div class="col-6 alingCol">
						$120.00
					</div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col-6 alingCol">
						Total con bonificaci&oacute;n:
					</div>
					<div class="col-6 alingCol">
						$2,806.00
					</div>
				</div>
			</div>
		</div>
	</center>
	<br><br><br><br>
	<center>
		<div class="card" style="border-width: none; width: 40em; border-radius: 10px">
		<div class="card-body">
			<h3 class="card-title">Compra n&uacute;mero 219 - Agosto</h3>
				<form>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Estado de la compra</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										En env&iacute;o
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Fecha de la compra</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										Viernes, 27 de septiembre de 2019
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Bonificaci&oacute;n</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										$227.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>M&eacute;todo de env&iacute;o</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										DHL
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>M&eacute;todo de pago</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										Tarjeta de cr&eacute;dito
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="row">
					<div class="col-auto">
						Productos:
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						1 Disco Duro Kingston AE/9300/RP:
					</div>
					<div class="col-6 alingCol">
						$2,009.00
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						1 Cable USB Universal MOBO:
					</div>
					<div class="col-6 alingCol">
						$320.00
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						2 Mouse DELL:
					</div>
					<div class="col-6 alingCol">
						$120.00
					</div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col-6 alingCol">
						Total con bonificaci&oacute;n:
					</div>
					<div class="col-6 alingCol">
						$2,806.00
					</div>
				</div>
			</div>
		</div>
	</center>
	<br><br><br><br>
	<center>
		<div class="card" style="border-width: none; width: 40em; border-radius: 10px">
		<div class="card-body">
			<h3 class="card-title">Compra n&uacute;mero 218 - Agosto</h3>
				<form>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Estado de la compra</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										En env&iacute;o
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Fecha de la compra</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										Viernes, 27 de septiembre de 2019
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>Bonificaci&oacute;n</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										$227.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>M&eacute;todo de env&iacute;o</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										DHL
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 alingCol">
								<label>M&eacute;todo de pago</label>
							</div>
							<div class="col-6 alingCol">
								<div class="contenedor">
									<div class="texto" contenteditable="false">
										Tarjeta de cr&eacute;dito
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="row">
					<div class="col-auto">
						Productos:
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						1 Disco Duro Kingston AE/9300/RP:
					</div>
					<div class="col-6 alingCol">
						$2,009.00
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						1 Cable USB Universal MOBO:
					</div>
					<div class="col-6 alingCol">
						$320.00
					</div>
				</div>
				<div class="row">
					<div class="col-6 alingCol">
						2 Mouse DELL:
					</div>
					<div class="col-6 alingCol">
						$120.00
					</div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col-6 alingCol">
						Total con bonificaci&oacute;n:
					</div>
					<div class="col-6 alingCol">
						$2,806.00
					</div>
				</div>
			</div>
		</div>
	</center>
	</div>
		</div>
		<div class="col-3">
			
		</div>
	</div>
</div>
</div>
@extends('layouts.footer')