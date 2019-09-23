@extends('layouts.head')
{{-------------------------Menú de navegación---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg	navbar-light bg-light">
	<img src="images/LogoIravi.png" width="30" height="30"	class="d-inline-block align-top" alt="">
	<a	class="navbar-brand" href="#">Artesanias Iravi</a>
	<button	class="navbar-toggler"	type="button"	data-toggle="collapse"data-target="#navbarSupportedContent"	aria-controls="navbarSupportedContent" aria-expanded="false"	aria-label="Toggle	navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul	class="navbar-nav ml-auto">
			<a href="#">
			<img src="images/iconoHome.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="{{ url('/login/')}}">
			<img src="images/iconoLogin.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			<li	class="nav-item">
				<a	class="nav-link">Bienvenido</a>
			</li>
			<a href="#">
			<img src="images/iconoCarrito.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">
            <img src="images/iconoSalir.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
		</ul>
	</div>
</nav>
</div>
</div>
</div>
{{-----------------------FinMenú de navegación---------------------------}}

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

{{------------------------Carrusel---------------------------}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 300px;">
    <div class="carousel-item active">
       <div class="container">
      <img class="d-block w-70" src="..." alt="First slide">
       </div>
    </div>
    <div class="carousel-item">
       <div class="container">
      <img class="d-block w-100" src="..." alt="Second slide">
       </div>
    </div>
    <div class="carousel-item">
      <div class="container">
      <img class="d-block w-100" src="..." alt="Third slide">
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
<div class="container-fluid">
	<hr>
</div>
{{------------------------Fin del carrusel---------------------------}}

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
    <a href="#" class="btn btn-primary">Añadir al carrito</a>
  </div>
</div>	
</div>
</div>
</div>
{{--------------------Fin Productos---------------------------}}
@extends('layouts.footer')

