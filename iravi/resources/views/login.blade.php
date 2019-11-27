@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Login---------------------------}}
<div class="container">

<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4">
	<br>

<div class="card" style="width: 25em; height: 25em; border-color: #003366; background: transparent;">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1" style="color: #003366">Inicio de sesión</h4>
	<hr style="border-color: #666699">
	<form class="formulario" action="InicioSesion" method="post" enctype="multipart/form-data">
		{{csrf_field()}}

	<div class="form-group">
	<div class="input-group" style="margin-top: 20px;">
		<div class="input-group-prepend">

		</div>
		<input id="username" name="txtUsuario" class="form-control formulario_input"  type="email" style="border-color: #666699" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
		<label class="formulario_label">Correo electrónico</label>
	</div>
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">

		 </div>
	    <input id="password" name="txtContrasena" class="form-control formulario_input" type="password" style="border-color: #666699" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
	    title="Debe contener al menos un n'umero, una minúscula, una mayúscula y un símbolo." onfocus="cambiaApass(this)">

	    <label class="formulario_label ">*******</label>
	</div>
	</div>




	<div class="form-group">
	<button name="btnInicioSesion" type="submit" class="formulario_btn" style="border-color: #003366; background-color: #003366">Iniciar sesión</button>
	</div>
	</form>
</article>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
{{-------------------------Fin de login---------------------------}}
@extends('layouts.footer')
