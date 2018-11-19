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

Route::get('prueba',function(){
	return view('prueba');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('menu', function () {
    return view('Plantillas.principal');
});


Route::get('listar', function () {
    return view('clientes.editarCliente');
});
Route::get('plantilla', function() {
    return view('Plantillas.dash');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function(){
Route::resource('usuario','userController');
Route::resource('cliente','ClienteController');
Route::resource('estadoFactura','Estado_facturaController');
Route::resource('factura','FacturaController');
Route::resource('formaPago','Forma_pagoController');
Route::resource('perfil','PerfilController');
Route::resource('productoFactura','Prod_facturaController');
Route::resource('producto','ProductoController');


});
route::get('eliminar/destroy/{id}','PerfilController@destroy')->name('admin.eliminar');
route::get('eliminarCliente/destroy/{id}','ClienteController@destroy')->name('admin.eliminarCliente');

