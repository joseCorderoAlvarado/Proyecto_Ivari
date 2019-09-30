<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
{{-------------------------Alta Usuarios Administrador---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<a class="nav-link" href="{{ url('alta_Producto')}}">Compras realizadas</a>
		<a class="nav-link" href="{{ url('modificar_Producto')}}">Mi Perfil</a>
		<a class="nav-link" href="{{ url('alta_Usuarios')}}">Acerca de Iravi</a>
	</div>
</div>
<div class="col-md-8"> 
<div class="card">
  <article class="card-body">
	<h4 class="card-title text-center mb-6 mt-1">Acerca de Iravi </h4>
		<h5>Ahuacatlán <small>Historia</small></h1>
		<p>Ahuacatlán significa lugar de aguacates</p>
		<h5>Ixtlán del Río <small>Historia</small></h1>
		<p>Significado de Ixtlán del Río</p>
		<h5>Jala <small> Historia</small></h1>
		<p>Significado de Jala</p>
		<h5>Amatlán de Cañas <small>Historia</small></h1>
		<p>Significado de Amatlán de Cañas</p>
	
  </article>
</div>
</div>
</div>
{{-------------------------Fin de alta usuario administrador---------------------------}}
@extends('layouts.footer')