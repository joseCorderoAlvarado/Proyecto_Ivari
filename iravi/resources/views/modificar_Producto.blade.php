@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')

{{-------------------------Modificar Productos---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link active"  href="{{ url('lista_Productos')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('alta_Usuarios')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('modificar_UsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('historial_Ventas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimiento_Pedidos')}}"> Ver Pedidos</a>
    </div>
</div> 
<div class="col-md-6"> 
<div class="card">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Modificar Productos</h4>
	<hr>
	<form>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="" class="form-control" placeholder="Nombre Producto" type="text">
	</div> 
	</div>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
		<textarea class="form-control" placeholder="Descripción del Producto"></textarea>
	</div>
	</div>
	<div class="form-group">
	<div class="input-group">
	<div class="input-group-prepend">
	   <select class="custom-select">
         <option selected>Selecciona una Categoria</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
       </select>
    </div>
    </div>
    </div>
	<div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">$</span>
        </div>
        <input type="text" class="form-control" id="" placeholder="Precio"required>
    </div>
	</div>
	<div class="form-group">
	 <div class="photo">
	 	<div class="input-group">
			<span class="input-group-text">Imagén del producto	</span>
		<input type="file" class="form-control" name="foto" id="foto">
        	<div class="container-fluid">
					<img src="images/LogoIravi.png" class="img-rounded">
			</div>
		
       	</div>
	 </div>
        
        <div id="form_alert"></div>
</div>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Modificar producto</button>
	</div>
	</form>
</article>
</div>
</div>
</div>
{{-------------------------Fin de modificar producto---------------------------}}
@extends('layouts.footer')