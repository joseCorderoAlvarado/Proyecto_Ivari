
<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Alta Usuarios Administrador---------------------------}}
<div class="container">
<div class="row">
<div class="col-md-12">
	<br>
	<center><div class="toggle toggle2">
            <span>Desplazar</span>
        </div></center><br>
          <div class="mensaje">
        	<br><br>
        	<center><h2 >BIENVENIDO A IRAVI</h2><br>
        	<h5>Compra lo que quieras, cuando quieras. <br> Revisa nuestros cat&aacute;logos </h5>
        	<br><br><br><br>
        </div>
<div class="card formulario1" style="border-color: #003366; background: transparent;">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1" style="color: #003366">Registro Usuario </h4>
	<hr style="border-color: #666699">
		<form  action="registroUsuarioGuardar" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-md-6">
				<div class="form-group">
	<div class="input-group" style="background: transparent; margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="nombre" class="form-control formulario_input" type="text" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre debe llevar solo letras y espacios" required>
		<label class="formulario_label">Nombre</label>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699; "> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="app" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z]+"
		title="El apellido debe llevar solo letras" required>
		<label class="formulario_label">Apellido Paterno</label>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="text" name="apm" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z]+"
		title="El apellido debe llevar solo letras" required>
		<label class="formulario_label">Apellido Materno</label>
	</div>
	</div>
	<label>Fecha de nacimiento</label><br>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="date" name="nacimiento" class="form-control" style="border-color: #666699" required>
	</div>
	</div>

	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="email" name="correo" class="form-control formulario_input"  style="border-color: #666699">
		<label class="formulario_label">Correo Electr&oacute;nico</label>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="password" name="contrasena" class="form-control formulario_input" style="border-color: #666699"
		pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
		title="El password debe contener por lo menos una mayusucla, una minuscula, un numero y tener por lo menos ocho caracteres">
		<label class="formulario_label">Contrase&ntilde;a</label>
	</div>
	</div>
	<label>Sexo</label>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
	<select name="genero">
  <option value="1">Masculino</option>
  <option value="2">Femenino</option>
</select>
	</div>
	</div>
<label>Tipo de env&iacute;o</label>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
	<select name="tipodireccion">
  <option value="1">Personal</option>
  <option value="2">Envio</option>
  <option value="3">Facturacion</option>

</select>
	</div>
	</div>
		</div>
		<div class="col-md-6">
	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699; float: left;"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="calle" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la calle debe llevar solo letras y espacios" required>
		<label class="formulario_label">Calle</label>
	</div>
	</div>

	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="colonia" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la colonia debe llevar solo letras y espacios" required>
		<label class="formulario_label">Colonia</label>
	</div>
	</div>

	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="ninterior" class="form-control formulario_input" style="border-color: #666699" pattern="[0-9]+"
		title="El numero interior solo puede llevar numeros" >
		<label class="formulario_label">N&uacute;mero Interior</label>
	</div>
	</div>


	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="nexterior" class="form-control formulario_input" style="border-color: #666699" pattern="[0-9]+"
		title="El numero exterior solo puede llevar numeros" required>
		<label class="formulario_label">N&uacute;mero Exterior</label>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="pais" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre del pais debe llevar solo letras y espacios" required>
		<label class="formulario_label">Pa&iacute;s</label>
	</div>
	</div>

	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="municipio" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre del municipio debe llevar solo letras y espacios" required>
		<label class="formulario_label">Municipio</label>
	</div>
	</div>

	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="ciudad" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la ciudad debe llevar solo letras y espacios" required>
		<label class="formulario_label">Ciudad</label>
	</div>
	</div>

		<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="cp" class="form-control formulario_input" style="border-color: #666699" pattern="[0-9]{5}"
		title="El codigo postal debe contener solo numeros y tener una longitud de cinco caracteres" required>
		<label class="formulario_label">C&oacute;digo Postal</label>
	</div>
	</div>

	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="telefono" class="form-control formulario_input" style="border-color: #666699" pattern="[0-9]+"
		title="El telefono debo contener solo numeros" required>
		<label class="formulario_label">Tel&eacute;fono</label>
	</div>
	</div>
</div>
	</div>
	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
			<center><button type="submit" class="formulario_btn" style="border-color: #003366; background-color: #003366">Registrar</button></center>
		</div>
	</div>
	</div>
		</div>
		<div class="col-md-4">

		</div>
	</div>


	</form>
	</article>
	</div>
</div>
</div>
</div>
{{-------------------------Fin de alta usuario administrador---------------------------}}
@extends('layouts.footer')
