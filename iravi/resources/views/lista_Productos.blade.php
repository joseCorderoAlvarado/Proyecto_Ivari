@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link active"  href="{{ url('listaModificarProductos')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('modificarUsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
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
				
					<img src="storage{{$producto->ruta}}" width="50em" height="50em" class="d-inline-block align-top">
					
					<span class="d-inline-block align-top"><h3>{{ $producto->nombreproducto }}</h3></span>
				</CENTER>
			</div>
			<div class="col-md-4">
				<form action="modificarProducto" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				 <input type="hidden" name="id" value={{ $producto->idproducto }}>
				<CENTER> <button type="submit" class="btn btn-primary btn-block">Modificar</button>  </CENTER>
		
				</form>
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