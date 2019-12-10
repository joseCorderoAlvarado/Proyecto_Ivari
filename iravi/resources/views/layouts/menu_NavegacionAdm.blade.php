{{-------------------------Menú de navegación---------------------------}}
<div class="container-fluid" style="background-color: #003366">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg	navbar-light bg-light" style="background-color:#003366 !important">
	 <img href="{{ url('/')}}" src="images/iravi.png" width="30" height="30"	class="d-inline-block align-top" alt="">
	<a	class="navbar-brand" href="{{ url('/')}}" style="color: #fff"><b>Artesanias Iravi</b></a>
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
            <a class="dropdown-item" href="{{ url('CerrarSesion')}}">Cerrar sesión</a>
            </li>
			<li	class="nav-item">
				<a	class="nav-link" style="color: #fff">Bienvenido</a>
			</li>
			<img src="images/iconoCarrito.png" width="30" height="30"	class="d-inline-block align-top" class="d-inline-block align-top" data-toggle="modal" data-target="#mensaje">
			<div id="mensaje" class="modal fade">
<div class="modal-dialog">
	<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">No tienes permisos para ver los productos</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<form  action="Alerta" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
			<div class="modal-footer">
		<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Aceptar</button>
	</div>
		</form>
	</div>
</div>
</div>
		</ul>
	</div>
</nav>
</div>
</div>
<hr style="border-color: #003366; width: 100%; border-width: 3px">
</div>
{{-----------------------FinMenú de navegación---------------------------}}
