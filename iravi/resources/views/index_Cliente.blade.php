@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
{{-------------------------Buscador---------------------------}}
<div class="container-fluid">
	<div class="row justify-content-center">
	   <div class="col-md-4"></div>
		<div class="col-md-4"></div>
        <div class="col-md-4">
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
{{------------------------Fin de Buscador---------------------------}}

@include('layouts.carruselCliente') 

{{------------------------Productos---------------------------}}
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="card" style="width: 15rem;">
  <a href="#">
  <img class="card-img-top" src="images/iconoCarrito.png" alt="Card image cap">
  </a>
  <div class="card-body">
    <h5 class="card-title">Titulo</h5>
    <p class="card-text">Precio</p>
    <a href="{{ url('vista_Producto')}}" class="btn btn-primary">Añadir al carrito</a>
  </div>
</div>  
</div>
</div>
</div>
{{--------------------Fin Productos---------------------------}} 
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

