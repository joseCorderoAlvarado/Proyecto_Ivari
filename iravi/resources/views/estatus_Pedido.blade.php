@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('listaModificarProductos-pagina1')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('registroUsuarioAdmin')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('listadoUsuario')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('altaProveedores')}}">Alta Proveedores</a>
      <a class="nav-link" href="{{ url('historialVentas')}}"> Ver Ventas</a>
      <a style="background: #003366" class="nav-link active"  href="{{ url('seguimientoPedidos')}}"> Ver Pedidos</a>
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
           </div>
          </form>
		</div>
	</div>
	<div class="col-md-2">

	</div>
</div>
</div>

<div class="col-md-2">
			<span  style="color:blue" class="d-inline-block align-top" ><h3>Pedidos</h3></span>
		</div>
<div class="container" style="border: 1px #ccc solid; border-radius: 3px; padding: 10px; margin: auto;">

	<hr style="border: 0.5px #ccc solid">

		<div class="row">
		<div class="col-md-2">
			<span  style="color: gray" class="d-inline-block align-top">Folio</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Cliente</span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Direccion</span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Fecha</span>
		</div>
		<div class="col-md-1">
			<span style="color: gray" class="d-inline-block align-top">Total</span>
		</div>
		<div class="col-md-1">
			<span style="color: gray" class="d-inline-block align-top">Paqueteria</span>
		</div>
		 <div class="col-md-2">
			<select name="tipodireccion">
  <option value="1">En preparación</option>
  <option value="2">Listo para enviar</option>
  <option value="3">En tránsito</option>
  <option value="4">Finalizado</option>
</select>
		</div>
		</div>

	</div>
		<div class="col-md-2">
			<span  style="color:blue" class="d-inline-block align-top" ><h3>Productos</h3></span>
		</div>	
	<hr style="border: 1px #ccc solid">
		<div class="row">
	   <div class="col-md-4">
			<span  style="color: gray" class="d-inline-block align-top">Id</span>
		</div>
		<div class="col-md-4">
			<span  style="color: gray" class="d-inline-block align-top">Nombre del producto</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Precio</span>
		</div>

		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Cantidad</span>
		</div>
		</div>
		<div class="col-md-2">
			<span  style="color:blue" class="d-inline-block align-top" ><h3>Historial</h3></span>
		</div>
		<div class="row">
		
	</div>
		<div class="row">
		<div class="col-md-4">
			<span style="color: gray" class="d-inline-block align-top">Estatus</span>
		</div>
		<div class="col-md-2">
			<span style="color: gray" class="d-inline-block align-top">Ultima modificacion</span>
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

