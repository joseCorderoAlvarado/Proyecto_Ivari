
<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_Navegacion')
{{-------------------------Alta Usuarios Administrador---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
</div> 
<div class="col-md-6"> 
<div class="card">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Registro Usuario </h4>
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
	<button type="submit" class="btn btn-primary btn-block">Registrar</button>
	</div>
	</form>
</article>
</div>
</div>
</div>
{{-------------------------Fin de alta usuario administrador---------------------------}}
@extends('layouts.footer')