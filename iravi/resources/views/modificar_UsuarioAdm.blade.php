
<!DOCTYPE html>
@extends('layouts.head')
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
			<a href="{{ url('/')}}">
			<img src="images/iconoHome.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">
			<img src="images/iconoLogin.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			<li	class="nav-item">
				<a	class="nav-link">Bienvenido</a>
			</li>
			<a href="#">
			<img src="images/iconoCarrito.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">
            <img src="images/iconoSalir.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
		</ul>
	</div>
</nav>
</div>
</div>
</div>
{{-----------------------FinMenú de navegación---------------------------}}

{{-------------------------Alta Usuarios---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
</div> 
<div class="col-md-6"> 
<div class="card">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Modificar Usuario </h4>
	<hr>
	<form>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="" class="form-control" placeholder="Nombre" type="text">
	</div> 
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Apellido Paterno">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Apellido Materno">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Usuario">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Contraseña">
	</div>
	</div>

	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Modificar</button>
	</div>
	</form>
</article>
</div>
</div>
</div>
{{-------------------------Fin de modificar producto---------------------------}}
@extends('layouts.footer')