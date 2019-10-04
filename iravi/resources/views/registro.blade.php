
<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Alta Usuarios Administrador---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>	
<div class="col-md-8"> 
<div class="card" style="border-color: #003366">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1" style="color: #003366">Registro Usuario </h4>
	<hr style="border-color: #666699">
	<form>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="" class="form-control" placeholder="Nombre" type="text" style="border-color: #666699">
	</div> 
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Apellido Paterno" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Apellido Materno" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Calle" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Colonia" style="border-color: #666699"> 
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Número Exterior" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Estado" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Teléfono" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Usuario" style="border-color: #666699">
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text" style="border-color: #666699"> <i class="fa fa-lock"></i> </span>
		 </div>
		<input name="" class="form-control" placeholder="Contraseña" style="border-color: #666699">
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