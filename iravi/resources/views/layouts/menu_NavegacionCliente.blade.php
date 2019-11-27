{{-------------------------Menú de navegación---------------------------}}
<style type="text/css">
	.notificacion{
		background-color: white;
    	display: linear;
    	border-radius: 50%;
    	height: 22px;
    	width: 22px;
       	box-shadow:1px 1px 5px 1px rgba(0,0,0,0.3);
	}
</style>
<div class="container-fluid" style="background-color: #003366">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg	navbar-light bg-light" style="background-color: #003366 !important">
	<img src="images/iravi.png" width="30" height="30"	class="d-inline-block align-top" alt="">
	<a	class="navbar-brand" href="#" style="color: #fff"><b>Artesanias Iravi</b></a>
	<button	class="navbar-toggler"	type="button"	data-toggle="collapse"data-target="#navbarSupportedContent"	aria-controls="navbarSupportedContent" aria-expanded="false"	aria-label="Toggle	navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul	class="navbar-nav ml-auto">
			<a href="{{ url('/')}}">
			<img src="images/iconoHome.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<li class="nav-item dropdown">
			<a lass="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<img src="images/iconoLogin.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
						<div>
							<?php
							$correo_Electronico = session('S_identificador');
							$consultaid = DB::select('SELECT usuario.idusuario from usuario inner join persona on usuario.fkpersona = persona.idpersona where persona.correoelectronico=?',[$correo_Electronico]);
							$idConversion = json_decode(json_encode($consultaid),true);
							$idusuario = implode($idConversion[0]);
							$usuarioDatos = DB::select('SELECT persona.idpersona, persona.nombrepersona, persona.apellidopaterno, persona.apellidomaterno FROM iravibd.usuario inner join persona on usuario.fkpersona = persona.idpersona where idusuario=?',[$idusuario]);
							echo $usuarioDatos[0]->nombrepersona;
						?>
						</div>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('CerrarSesion')}}">Cerrar Sesión</a>
            </li>
			<li	class="nav-item">
				<a	class="nav-link" style="color: #fff">Bienvenido</a>
			</li>
			<a href="{{ url('carritoCompras')}}">
			<img src="images/iconoCarrito.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
            <div id="car" class="notificacion" align="center">
			<?php
				$correo_Electronico = session('S_identificador');
				$consultaid = DB::select('SELECT usuario.idusuario from usuario inner join persona on usuario.fkpersona = persona.idpersona where persona.correoelectronico=?',[$correo_Electronico]);
				$idConversion = json_decode(json_encode($consultaid),true);
				$idusuario = implode($idConversion[0]);
				$totalDeCantidad = DB::select('SELECT sum(cantidad) from carritotemporal
							INNER JOIN persona ON carritotemporal.fkpersona = persona.idpersona
							where carritotemporal.fkpersona=?', [$idusuario]);

				$idConversionCant = json_decode(json_encode($totalDeCantidad),true);
				$cantidadFinal = implode($idConversionCant[0]);
				if ($cantidadFinal>0) {
					echo $cantidadFinal;
				}else{
					echo "0";
				}

			?>
			</div>
		</ul>
	</div>
</nav>
</div>
</div>
<hr style="border-color: #003366; width: 100%; border-width: 3px">
</div>

{{-----------------------FinMenú de navegación---------------------------}}
