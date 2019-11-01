@extends('layouts.head')
@include('layouts.menu_Navegacion')

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

@include('layouts.Carrusel')


{{------------------------Productos---------------------------}}
<div class="container">
<div class="row">
	{{------------------------Cosas que se repiten---------------------------}}
@foreach ($tablaProductos as $producto)
<div class="col-md-4">
<div class="card" style="width: 15rem;">
  <a href="#">
  <img class="card-img-top" src="storage{{$producto->ruta}}" alt="Card image cap">
  </a>
  <div class="card-body">
    <h5 class="card-title">{{$producto->nombre}}</h5>
    <p class="card-text">{{$producto->precio}}</p>
    <a href="#" class="btn btn-primary">Añadir al carrito</a>
  </div>
</div>
</div>
@endforeach
	{{------------------------Fin de Cosas que se repiten---------------------------}}
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
