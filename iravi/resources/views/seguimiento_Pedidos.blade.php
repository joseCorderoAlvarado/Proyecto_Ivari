@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')	
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('modificarUsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a class="nav-link active"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
    </div>
	</div>
	<div class="col-md-6">
	<span><h1>PEDIDOS</h1></span>	
	</div>
	<div class="col-md-4">
	</div>
    </div>
</div>	
<div class="container-fluid">
	<hr>
</div>	
<div class="container">
	<div class="row" style="border: 1px gray solid; border-radius: 10px">
		<div class="col-md-3" >
			<center><span><h3>En preparaci&oacute;n</h3></span></center><br>
			<center><span><h5><font style="color: gray">20 ventas</font></h5></span></center>
		</div>
		<div class="col-md-3">
			<center><span><h3>Listo para enviar</h3></span></center><br>
			<center><span><h5><font style="color: gray">0 ventas</font></h5></span></center>
		</div>
		<div class="col-md-3">
			<center><span><h3>En tr&aacute;nsito</h3></span></center><br>
			<center><span><h5><font style="color: gray">45 ventas</font></h5></span></center>
		</div>
		<div class="col-md-3">
			<center><span><h3>Finalizadas</h3></span></center><br>
			<center><span><h5><font style="color: gray">15 ventas</font></h5></span></center>
		</div>
	</div>
	<div class="row" style="height: 3em"><div class="col-md-12"></div></div>
</div>
<div class="container">

<div class="row">
	<div class="col-md-8 ">
		Filtrar y ordenar 
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
	<div class="col-md-2">
		
	</div>
	<div class="col-md-2" style="color: gray;">
		80 ventas
	</div>
</div>		
</div>
	
<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
	
		<div class="row">
		
			<div class="col-md-8">
			 	<input type="checkbox" name="" class="d-inline-block align-top"><span style="color: gray" class="d-inline-block align-top"><h5>Estado de la venta (En prepa...)</h5></span>
				
		</div>
		<div class="col-md-3">
			<button class="btn btn-primary d-inline-block align-top">Ver informaci&oacute;n</button>
		</div>
		<div class="col-md-3">
			<img src="images/Iravi.png" width="40em" height="40em" class="d-inline-block align-top">
			<span style="color: gray" class="d-inline-block align-top">Nombre del comprador</span>
		</div>
		
		
	</div>	
	<hr style="border: 1px #ccc solid">
	
		<div class="row">
		<div class="col-md-4">
			<img src="images/Iravi.png" width="80em" height="80em" class="d-inline-block align-top">
			<span class="d-inline-block align-top"><h3>Nombre del producto</h3></span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Precio</span>
		</div>
		
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Cantidad</span>
		</div>
		
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Caracter&iacute;sticas</span>
		</div>
		
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Fecha</span>
		</div>
		</div>
	</div>
			<div class="row" style="height: 3em"><div class="col-md-12"></div></div>
	<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">
	
		<div class="row">
		
			<div class="col-md-8">
			 	<input type="checkbox" name="" class="d-inline-block align-top"><span style="color: gray" class="d-inline-block align-top"><h5>Estado de la venta (En tra...)</h5></span>
				
		</div>
		<div class="col-md-3">
			<button class="btn btn-primary d-inline-block align-top">Seguir env&iacute;o</button>
		</div>
		<div class="col-md-3">
			<img src="images/Iravi.png" width="40em" height="40em" class="d-inline-block align-top">
			<span style="color: gray" class="d-inline-block align-top">Nombre del comprador</span>
		</div>
		
		
	</div>	
	<hr style="border: 1px #ccc solid">
	
		<div class="row">
		<div class="col-md-4">
			<img src="images/Iravi.png" width="80em" height="80em" class="d-inline-block align-top">
			<span class="d-inline-block align-top"><h3>Nombre del producto</h3></span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Precio</span>
		</div>
		
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Cantidad</span>
		</div>
		
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Caracter&iacute;sticas</span>
		</div>
		
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Fecha</span>
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