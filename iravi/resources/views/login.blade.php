@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Login---------------------------}}
<div class="container">
	
<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4"> 
	<br>
	<center><div class="toggle toggle2">
            <span>Desplazar</span>
        </div></center><br>
          <div class="mensaje">
        	<br><br>
        	<center><h2 >BIENVENIDO A IRAVI</h2><br>
        	<h5>COMPRA LAS ARTESANIAS QUE QUIERAS <br>DE NUESTRO CATALOGO Y CUANDO QUIERAS</h5></center>
        	<br><br><br><br>
        </div>
<div class="card" style="width: 25em; height: 25em; border-color: #003366; background: transparent;">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1" style="color: #003366">Inicio de sesión</h4>
	<hr style="border-color: #666699">
	<form class="formulario" action="InicioSesion" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-user"></i> </span>
		</div>
		<input id="username" name="txtUsuario" class="form-control formulario_input"  type="email" style="border-color: #666699" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
		<label class="formulario_label">Correo electrónico</label>
	</div> 
	</div> 
	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
	    <input id="password" name="txtContrasena" class="form-control formulario_input" type="password" style="border-color: #666699" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un n'umero, una minúscula, una mayúscula y un símbolo.">
	    <label class="formulario_label">*******</label>
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

