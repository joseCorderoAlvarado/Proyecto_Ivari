@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('alta_Producto')}}">Alta Productos</a>
      <a class="nav-link active"  href="{{ url('lista_Productos')}}">Modificar Productos</a>
      <a class="nav-link "  href="{{ url('alta_Usuarios')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('modificar_UsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('historial_Ventas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimiento_Pedidos')}}"> Ver Pedidos</a>
    </div>	
	</div>
	<div class="col-md-6">
	<span><h1>LISTADO DE PRODUCTOS</h1></span>	
	</div>
	<div class="col-md-4">
	</div>
    </div>
</div>	
<br><br>
@foreach ($productos as $producto)
	<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
		<div class="row">
			<div class="col-md-4">
				<CENTER><span><h5>{{ $producto->idproducto }}</h5></span></CENTER>
			</div>
			<div class="col-md-4">
				<CENTER>
				
					<img src="\storage\{{$producto->ruta}}" width="50em" height="50em" class="d-inline-block align-top">
					
					<span class="d-inline-block align-top"><h3>{{ $producto->nombreproducto }}</h3></span>
				</CENTER>
			</div>
			<div class="col-md-4">
				<CENTER><button class="btn btn-primary">Modificar</button></CENTER>
			</div>
		</div>
	</div>
	<br><br>



@endforeach
<br><br>
<div class="container-fluid">
 <div class="row">
   <div class="col-md-4">     
   </div>
   <div class="col-md-4">
    <nav aria-label="Page navigation example">
       <ul class="pagination">
         <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            </a>
         </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
      </ul>
   </nav>    
  </div>
  <div class="col-md-4">     
  </div>
 </div> 
</div>
@extends('layouts.footer')