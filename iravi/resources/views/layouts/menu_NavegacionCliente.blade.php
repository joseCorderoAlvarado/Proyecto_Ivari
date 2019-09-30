{{-------------------------Menú de navegación---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg	navbar-light bg-light">
	<img src="images/LogoIravi.png" width="30" height="30"	class="d-inline-block align-top" alt="">
	<a	class="navbar-brand" href="#">Artesanias Iravi</a>
	<button	class="navbar-toggler"	type="button"	data-toggle="collapse"data-target="#navbarSupportedContent"	aria-controls="navbarSupportedContent" aria-expanded="false"	aria-label="Toggle	navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul	class="navbar-nav ml-auto">
			<a href="{{ url('Cliente')}}">
			<img src="images/iconoHome.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<li class="nav-item dropdown">
			<a lass="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<img src="images/iconoLogin.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Iniciar Sesión</a>
            </li>
			<li	class="nav-item">
				<a	class="nav-link">Bienvenido</a>
			</li>
			<a href="{{ url('compras_Carrito')}}">
			<img src="images/iconoCarrito.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
		</ul>
	</div>
</nav>
</div>
</div>
</div>
{{-----------------------FinMenú de navegación---------------------------}}