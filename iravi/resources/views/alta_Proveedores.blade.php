<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_NavegacionAdm')
{{------------------------------Alta Proveedores--------------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
	 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('alta_Producto')}}">Alta Productos</a>
      <a class="nav-link"  href="{{ url('modificar_Producto')}}">Modificar Productos</a>
      <a class="nav-link active"  href="{{ url('alta_Usuarios')}}">Alta Usuario</a>
      <a class="nav-link " href="{{ url('modificar_UsuarioAdm')}}">Modificar Usuario</a>
      <a class="nav-link" href="{{ url('historial_Ventas')}}"> Ver Ventas</a>
      <a class="nav-link"  href="{{ url('seguimiento_Pedidos')}}"> Ver Pedidos</a>
    </div>
</div> 
</div>
</div>
{{---------------------------------------Fin de alta proveedores --------------------------------------------------}}
@extends('layouts.footer')