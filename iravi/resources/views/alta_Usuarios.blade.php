@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
{{-------------------------Alta Usuarios Administrador---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
	 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a style="background: #003366" class="nav-link active"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('listadoUsuario')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
</div>
<div class="col-md-8">
	<div class="card" style="border-color: #003366">
	  <article class="card-body">
		<h4 class="card-title text-center mb-4 mt-1" style="color: #003366">Registro Usuario </h4>
		<hr style="border-color: #666699">
			<form action="registroUsuarioGuardar" method="post" enctype="multipart/form-data">
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
			<input type="date" name="nacimiento" class="form-control" style="border-color: #666699">
		</div>
		</div>

	<div class="form-group">
	<div class="input-group" style="margin-top: 40px;">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699; float: left;"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input placeholder="Calle" name="calle" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la calle debe llevar solo letras y espacios" required>
		<label class="formulario_label">Calle</label>
	</div>
	</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input placeholder="Colonia" name="colonia" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la colonia debe llevar solo letras y espacios" required> 
		<label class="formulario_label">Colonia</label>
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
				<input placeholder="Numero Interior" name="ninterior" class="form-control formulario_input" style="border-color: #666699" pattern="[0-9]+"
		title="El numero interior solo puede llevar numeros" >
		<label class="formulario_label">N&uacute;mero Interior</label>
		</div>
		</div>


		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input placeholder="Numero Exterior" name="nexterior" class="form-control formulario_input" style="border-color: #666699" pattern="[0-9]+"
		title="El numero exterior solo puede llevar numeros" required>
		<label class="formulario_label">N&uacute;mero Exterior</label>
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
				<input placeholder="Pais" name="pais" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre del pais debe llevar solo letras y espacios" required> 
		<label class="formulario_label">Pa&iacute;s</label>
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input placeholder="Municipio" name="municipio" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre del municipio debe llevar solo letras y espacios" required> 
		<label class="formulario_label">Municipio</label>
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input placeholder="Ciudad" name="ciudad" class="form-control formulario_input" style="border-color: #666699" pattern="[A-Za-z\s]+"
		title="El nombre de la ciudad debe llevar solo letras y espacios" required> 
		<label class="formulario_label">Ciudad</label>
		</div>
		</div>

			<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
				<input placeholder="Codigo Postal" name="cp" class="form-control formulario_input" style="border-color: #666699" pattern="[0-9]{5}"
		title="El codigo postal debe contener solo numeros y tener una longitud de cinco caracteres" required> 
		<label class="formulario_label">C&oacute;digo Postal</label>
		</div>
		</div>

		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input placeholder="Telefono" name="telefono" class="form-control formulario_input" style="border-color: #666699" pattern="[0-9]+"
		title="El telefono debo contener solo numeros" required> 
		<label class="formulario_label">Tel&eacute;fono</label>
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input placeholder="Email" type="email" name="correo" class="form-control formulario_input"  style="border-color: #666699">
		<label class="formulario_label">Correo Electr&oacute;nico</label>
		</div>
		</div>
		<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
			    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
			 </div>
			<input placeholder="Password" type="password" name="contrasena" class="form-control formulario_input" style="border-color: #666699"
		pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
		title="El password debe contener por lo menos una mayusucla, una minuscula, un numero y tener por lo menos ocho caracteres">
		<label class="formulario_label">Contrase&ntilde;a</label>
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
</div>
</div>
{{-------------------------Fin de alta usuario administrador---------------------------}}
@extends('layouts.footer')
