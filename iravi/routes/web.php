<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Todas las validaciones de a que paginas pueden o no entrar los usuarios, deben de ir con controladores

//Este index controla todos
Route::get('/','index@mostrar');


//Controladores del registro de usuario
Route::get('registroUsuario','registroUsuario@mostrar');
Route::post('registroUsuarioGuardar','registroUsuario@guardar');

//Controladores realacionados con el inicio y cierre de sesion
Route::post('InicioSesion','iniciarSesion@verificar');
Route::Get('CerrarSesion','iniciarSesion@cerrarSesion');

//Login inicio de sesion
Route::Get('login','iniciarSesion@mostrar');



//Historia
Route::Get('historia','historia@mostrar');

//Compras Realizadas
Route::Get('comprasRealizadas','comprasRealizadas@mostrar');

//Confirmacion de Compras
Route::Get('confirmacionCompra','confirmacionCompra@mostrar');


//Vista Producto
Route::Get('vistaProducto','vistaProducto@mostrar');

//Perfil de usuario
Route::Get('perfilUsuario','perfilUsuario@mostrar');


//Bonificaciones
Route::Get('bonificaciones','bonificaciones@mostrar');

//Carrito de COmpras
Route::Get('carritoCompras','carritoCompras@mostrar');

//Descripcion Producto
Route::Get('descripcionProducto','descripcionProducto@mostrar'); //Khe?



//Alta de usuario de amdin
Route::Get('registroUsuarioAdmin','registroUsuarioAdmin@mostrar');

//Historial de ventas
Route::Get('historialVentas','historialVentas@mostrar');

//Alta Proveedores
Route::get('altaProveedores','altaProveedores@mostrar');

//Controladores del registro de productos
Route::get('registroProducto','registroProducto@mostrar');
Route::post('registroProductoGuardar','registroProducto@guardar');


//Lista de productos para modificar
Route::get('listaModificarProductos','listaModificarProductos@mostrar');

//Seguimiento de pedidos
Route::get('seguimientoPedidos','seguimientoPedidos@mostrar');


//Modificar Usuario de Admin
Route::get('modificarUsuarioAdm','modificarUsuarioAdm@mostrar');







?>