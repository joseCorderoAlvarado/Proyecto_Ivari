{{-------------------------Menú de navegación---------------------------}}
<div class="container-fluid" style="background-color: #92d050">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg	navbar-light bg-light" style="background-color:#003366 !important">
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
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('CerrarSesion')}}">Cerrar sesión</a>
            </li>
			<li	class="nav-item">
				<a	class="nav-link" style="color: #fff">Bienvenido</a>
			</li>
			<a href="#">
			<img src="images/iconoCarrito.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
		</ul>
	</div>
</nav>
</div>
</div>
<hr style="border-color: #003366; width: 100%; border-width: 3px">
</div>
{{-----------------------FinMenú de navegación---------------------------}}
