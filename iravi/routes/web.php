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


Route::get('historia', function () {
    return view('historia',['numero'=>15]);
});

Route::get('compras_Realizadas', function () {
    return view('compras_Realizadas',['numero'=>15]);
});

Route::get('confirmacion_Compra', function () {
    return view('confirmacion_Compra',['numero'=>15]);
});

Route::get('vista_Producto', function () {
    return view('vista_Producto',['numero'=>15]);
});

Route::get('alta_Usuarios', function () {
    return view('alta_Usuarios',['numero'=>15]);
});

Route::get('bonificaciones', function () {
    return view('bonificaciones',['numero'=>15]);
});

Route::get('carrito_Compras', function () {
    return view('carrito_Compras',['numero'=>15]);
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

Route::get('lista_Productos', function () {
    return view('lista_Productos',['numero'=>15]);
});

Route::get('modificar_UsuarioAdm', function () {
    return view('modificar_UsuarioAdm',['numero'=>15]);
});

Route::get('perfil_Usuario', function () {
    return view('perfil_Usuario',['numero'=>15]);
});

Route::get('sss', function () {
    return view('sss',['numero'=>15]);
});

Route::get('registro','registroUsuario@mostrar');
Route::post('registroGuardar','registroUsuario@guardar');

Route::get('registroProducto','registroProducto@mostrar');
Route::post('registroProductoGuardar','registroProducto@guardar');

Route::get('seguimiento_Pedidos', function () {
    return view('seguimiento_Pedidos',['numero'=>15]);
});
Route::get('Cliente', function () {
    return view('index_Cliente',['numero'=>15]);
});
Route::post('InicioSesion','iniciarSesion@verificar');

Route::get('listaProductos','listaProductos@mostrar');