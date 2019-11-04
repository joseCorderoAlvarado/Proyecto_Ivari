{{------------------------Carrusel---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('registroProducto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('modificar_Producto')}}">Modificar Productos</a>
      <a class="nav-link"  href="{{ url('alta_Usuarios')}}">Alta Usuario</a>
      <a class="nav-link" href="{{ url('modificar_UsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('historial_Ventas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimiento_Pedidos')}}"> Ver Pedidos</a>
    </div>
</div>
<div class="col-md-10">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="color: #003366">
  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators"  data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators"  data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators"   data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 300px;">
    <div class="carousel-item active">
       <div class="container">
      <img class="d-block w-100" src="images/banner1.png" alt="First slide">
       </div>
    </div>
    <div class="carousel-item">
       <div class="container">
      <img class="d-block w-100" src="images/banner2.png" alt="Second slide">
       </div>
    </div>
    <div class="carousel-item">
      <div class="container">
      <img class="d-block w-100" src="images/banner3.png" alt="Third slide">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
<div class="container-fluid">
  <hr>
</div>
{{------------------------Fin del carrusel---------------------------}}
