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

Route::get('/', function () {
    return view('index');
});


Route::get('alta_Producto', function () {
    return view('alta_Producto',['numero'=>15]);
});

Route::get('alta_Usuarios', function () {
    return view('alta_Usuarios',['numero'=>15]);
});

Route::get('bonificaciones', function () {
    return view('bonificaciones',['numero'=>15]);
});

Route::get('compras_Carrito', function () {
    return view('compras_Carrito',['numero'=>15]);
});

Route::get('descripcion_Producto', function () {
    return view('descripcion_Producto',['numero'=>15]);
});
Route::get('historial_Ventas', function () {
    return view('historial_Ventas',['numero'=>15]);
});
Route::get('index_Admin', function () {
    return view('index_Admin',['numero'=>15]);
});

Route::get('login', function () {
    return view('login',['numero'=>15]);
});

Route::get('modificar_Producto', function () {
    return view('modificar_Producto',['numero'=>15]);
});
Route::get('modificar_UsuarioAdm', function () {
    return view('modificar_UsuarioAdm',['numero'=>15]);
});

Route::get('perfil_Usuario', function () {
    return view('perfil_Usuario',['numero'=>15]);
});

Route::get('registro', function () {
    return view('registro',['numero'=>15]);
});
Route::get('seguimiento_Pedidos', function () {
    return view('seguimiento_Pedidos',['numero'=>15]);
});