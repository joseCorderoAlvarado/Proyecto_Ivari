@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Login---------------------------}}
<div class="container">
<div class="row">
<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<a class="nav-link" href="{{ url('alta_Producto')}}">Compras realizadas</a>
		<a class="nav-link" href="{{ url('modificar_Producto')}}">Mi Perfil</a>
		<a class="nav-link" href="{{ url('alta_Usuarios')}}">Acerca de Iravi</a>
	</div>
</div>
<div class="col-md-4"> </div>
<div class="col-md-4"> 
<div class="card" style="width: 25em; height: 25em">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Inicio de sesión</h4>
	<hr>
	<form>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="" class="form-control" placeholder="Correo electronico" type="email">
	</div> 
	</div> 
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
	    <input class="form-control" placeholder="******" type="password">
	</div>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
	</div>
	<p class="text-center"><a href="#" class="btn">¿Olvidaste la Contraseña?</a></p>
	</form>
</article>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
{{-------------------------Fin de login---------------------------}}
@extends('layouts.footer')