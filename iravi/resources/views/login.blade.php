@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Login---------------------------}}
<div class="container">
<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4"> 
<div class="card" style="width: 25em; height: 25em; border-color: #003366">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1" style="color: #003366">Inicio de sesión</h4>
	<hr style="border-color: #666699">
	<form action="InicioSesion" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="txtUsuario" class="form-control" placeholder="Correo electronico" type="email" style="border-color: #666699">
	</div> 
	</div> 
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
	    <input name="txtContrasena" class="form-control" placeholder="******" type="password" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<button name="btnInicioSesion" type="submit" class="btn btn-primary btn-block" style="border-color: #003366; background-color: #003366">Iniciar sesión</button>
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

