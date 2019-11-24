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
Route::get('pagina%{p}',['uses' =>'index@mostrarPaginacion']);

//Buscar
Route::post('buscarProducto','buscarProducto@mostrar');
Route::get('busqueda%nombre%{n}%pagina%{p}',['uses' =>'buscarProducto@mostrarPaginacion']);

//Controladores del registro de usuario
Route::get('registroUsuario','registroUsuario@mostrar');
Route::post('registroUsuarioGuardar','registroUsuario@guardar');

//Controladores realacionados con el inicio y cierre de sesion
Route::post('InicioSesion','iniciarSesion@verificar');
Route::Get('CerrarSesion','iniciarSesion@cerrarSesion');


//Controladores del carrito
Route::Get('carritoCompras','controlador_carritoCompras@mostrar');
Route::post('carritoCompras','controlador_carritoCompras@guardarcarrito');
Route::post('modificarCarrito','controlador_carritoCompras@modificarCarrito');
Route::post('eliminarCarrito','controlador_carritoCompras@eliminarCarrito');



//Login inicio de sesion
Route::Get('login','iniciarSesion@mostrar');



//Historia
Route::Get('historia','historia@mostrar');

//Compras Realizadas
Route::Get('comprasRealizadas','comprasRealizadas@mostrar');

//Confirmacion de Compras
Route::Get('confirmacionCompra','confirmacionCompra@mostrar');
Route::post('nuevodomicilio','confirmacionCompra@nuevodomicilio');
//proceso Pago
Route::post('paypal','venta@procesarpago');
Route::Get('venta','venta@realizarpedido');
//Vista Producto
Route::get('/vistaProducto{d}',['uses' =>'vistaProducto@mostrar']);

//Perfil de usuario
Route::Get('perfilUsuario','perfilUsuario@mostrar');
Route::Post('perfilUsuarioNombre','perfilUsuario@guardarNombre');
Route::Post('perfilUsuarioApellidoP','perfilUsuario@guardarApellidoP');
Route::Post('perfilUsuarioApellidoM','perfilUsuario@guardarApellidoM');
Route::Post('perfilUsuarioCorreo','perfilUsuario@guardarCorreo');
Route::Post('perfilUsuarioContra','perfilUsuario@guardarContraseña');
Route::Post('agregarDirecciones','perfilUsuario@agregarDireccion');
Route::Post('modificarDireccion','perfilUsuario@modificarDireccion');

Route::Post('editarDireccion','editarDireccion@mostrar');


//Bonificaciones
Route::Get('bonificaciones','bonificaciones@mostrar');



//Descripcion Producto
Route::Get('descripcionProducto','descripcionProducto@mostrar'); //Khe?



//Alta de usuario de amdin
Route::get('registroUsuarioAdmin','registroUsuarioAdmin@mostrar');
Route::post('registroUsuarioGuardar','registroUsuarioAdmin@guardar');

//Historial de ventas
Route::Get('historialVentas','historialVentas@mostrar');

//Alta Proveedores
Route::get('altaProveedores','altaProveedores@mostrar');
Route::post('altaProveedoresGuardar','altaProveedores@guardarProveedor');


//Controladores del registro de productos
Route::get('registroProducto','registroProducto@mostrar');
Route::post('registroProductoGuardar','registroProducto@guardar');



 //Lista de productos para modificar

Route::get('listaModificarProductos-pagina{p}',['uses' =>'listaModificarProductos@mostrar']);


//Controladores  de modificar productos
Route::post('modificarProducto','modificarProducto@mostrar');
Route::post('modificarProductoGuardar','modificarProducto@modificar');




//Seguimiento de pedidos
Route::get('seguimientoPedidos','seguimientoPedidos@mostrar');

//Modificar Usuario de Admin
Route::post('modificarUsuarioAdm','modificarUsuarioAdm@mostrar');

//Modificar Usuario de Admin
Route::get('listadoUsuario','listaUsuarios@mostrar');

//Guardar cambios usuario
Route::post('guardarCambiosUsuario','modificarUsuarioAdm@guardar');
//Pedidos y detalles pedido
Route::post('detallePedido','detallePedido@mostrar');
Route::post('pedidosFiltrados','seguimientoPedidos@filtrar');
Route::post('actualizarPedido','detallePedido@actualizar');





?>
