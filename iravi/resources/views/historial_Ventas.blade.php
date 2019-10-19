@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')	
<div class="container-fluid">
	<div class="row">
	<div class="col-md-6"></div>
	<div class="col-md-4">
	<span><h1>VENTAS</h1></span>	
	</div>
	<div class="col-md-2">
	</div>
    </div>
</div>	
<div class="container-fluid">
	<div class="row">
	    <div class="col-md-2 d-inline-block">
	    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('modificarUsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link active" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
	    </div>
		<div class="col-md-3 d-inline-block">
			<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButt
on" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Ordenar por
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Usuario</a>
<a class="dropdown-item" href="#">Fecha</a>
<a class="dropdown-item" href="#">Producto</a>
</div>
</div>
		</div>
		<div class="col-md-4 d-inline-block">
			<form>
            <div class="card-body row no-gutters align-items-center">
             <div class="col">
              <input class="form-control" type="search" placeholder="Buscar">
             </div>
            <div class="col-auto">
            <button class="btn" type="submit">
            <img src="images/iconoBuscar.png" width="30" height="30"	class="d-inline-block align-top">	
            </button>
            </div>
           </div>
          </form>
		</div>
	</div>
</div>

<div class="container" style="border: 1px #ccc solid; border-radius: 10px; padding: 10px;">
	<div class="row">
		<div class="col-md-4 align-items-center">
			<span><h3>Nombre del producto</h3></span>
			<img src="images/Iravi.png" width="80em" height="80em">
		</div>
		<div class="col-md-4 align-items-center">
			<center> <font style="color: gray">Descripción del producto</font> </center>
		</div>
		<div class="col-md-4 align-items-center">
			<button class="btn btn-primary">Historial del producto</button><br>
			<img src="images/Iravi.png" width="80em" height="80em">
		</div>
		</div>
	</div>
	<div class="container" style="height: 3em"></div>
	<div class="container" style="border: 1px #ccc solid; border-radius: 10px; padding: 10px;">
	<div class="row">
		<div class="col-md-4 align-items-center">
			<span><h3>Nombre del producto</h3></span>
			<img src="images/Iravi.png" width="80em" height="80em">
		</div>
		<div class="col-md-4 align-items-center">
			<center> <font style="color: gray">Descripción del producto</font> </center>
		</div>
		<div class="col-md-4 align-items-center">
			<button class="btn btn-primary">Historial del producto</button><br>
			<img src="images/Iravi.png" width="80em" height="80em">
		</div>
		</div>
	</div>
	<div class="container" style="height: 3em"></div>
	<div class="container" style="border: 1px #ccc solid; border-radius: 10px; padding: 10px;">
	<div class="row">
		<div class="col-md-4 align-items-center">
			<span><h3>Nombre del producto</h3></span>
			<img src="images/Iravi.png" width="80em" height="80em">
		</div>
		<div class="col-md-4 align-items-center">
			<center> <font style="color: gray">Descripción del producto</font> </center>
		</div>
		<div class="col-md-4 align-items-center">
			<button class="btn btn-primary">Historial del producto</button><br>
			<img src="images/Iravi.png" width="80em" height="80em">
		</div>
		</div>
	</div>
	
</div>
	<div class="row" style="height: 3em"><div class="col-md-12"></div></div>
{{--------------------Inicio de Paginación----------------------}}
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
{{--------------------Fin de Paginación----------------------}}
@extends('layouts.footer')