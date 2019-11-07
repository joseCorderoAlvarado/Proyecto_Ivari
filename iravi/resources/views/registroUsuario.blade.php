
<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Alta Usuarios Administrador---------------------------}}
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
<div class="card" style="border-color: #003366">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1" style="color: #003366">Registro Usuario </h4>
	<hr style="border-color: #666699">
		<form  action="registroUsuarioGuardar" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="nombre" class="form-control" placeholder="Nombre" type="text" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre debe llevar solo letras y espacios" required>
	</div> 
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="app" class="form-control" placeholder="Apellido Paterno" style="border-color: #666699" pattern="[A-Za-z]+"
		title="El apellido debe llevar solo letras" required>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="apm" class="form-control" placeholder="Apellido Materno" style="border-color: #666699" pattern="[A-Za-z]+"
		title="El apellido debe llevar solo letras" required>
	</div>
	</div>
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="date" name="nacimiento" class="form-control" style="border-color: #666699" required>
	</div>
	</div>
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="calle" class="form-control" placeholder="Calle" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la calle debe llevar solo letras y espacios" required>
	</div>
	</div>
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="colonia" class="form-control" placeholder="Colonia" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la colonia debe llevar solo letras y espacios" required> 
	</div>
	</div>
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="ninterior" class="form-control" placeholder="Numero Interior" style="border-color: #666699" pattern="[0-9]+"
		title="El numero interior solo puede llevar numeros" >
	</div>
	</div>
	
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="nexterior" class="form-control" placeholder="Número Exterior" style="border-color: #666699" pattern="[0-9]+"
		title="El numero exterior solo puede llevar numeros" required>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="pais" class="form-control" placeholder="Pais" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre del pais debe llevar solo letras y espacios" required> 
	</div>
	</div>
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="municipio" class="form-control" placeholder="Municipio" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre del municipio debe llevar solo letras y espacios" required> 
	</div>
	</div>
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="ciudad" class="form-control" placeholder="Ciudad" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la ciudad debe llevar solo letras y espacios" required> 
	</div>
	</div>
	
		<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="cp" class="form-control" placeholder="Codigo Postal" style="border-color: #666699" pattern="[0-9]{5}"
		title="El codigo postal debe contener solo numeros y tener una longitud de cinco caracteres" required> 
	</div>
	</div>
	
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="telefono" class="form-control" placeholder="Teléfono" style="border-color: #666699" pattern="[0-9]+"
		title="El telefono debo contener solo numeros" required> 
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="email" name="correo" class="form-control" placeholder="Correo Electrónico" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input type="password" name="contraseña" class="form-control" placeholder="Contraseña" style="border-color: #666699"
		pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
		title="El password debe contener por lo menos una mayusucla, una minuscula, un numero y tener por lo menos ocho caracteres">

	</div>
	</div>
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
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block" style="border-color: #003366; background-color: #003366">Registrar</button>
	</div>
	</form>
</article>
</div>
<div class="col-md-4"></div>
</div>
</div>
{{-------------------------Fin de alta usuario administrador---------------------------}}
@extends('layouts.footer')