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


Route::view('/','Home')->name('Home');/*esta te lleva al inicio*/

/*estas rutas agregue shoo*/

Route::get('/login', function () {
  return view('auth/login');
});

//Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/totem', function () {
  return view('/totem');
});
Route::view('/resultado', '/resultado')->name('resultado');

//Rutas Admin
Route::get('/Admin', function () {
  return view('Administrador/Admin');
});
Route::get('/Miembros/listar', 'AdminControllers\MiembrosController@listar')->name('Miembros');

Route::group(['middleware' => ['permission:crear-cliente']], function (){
  Route::get('/Miembros/Agregar', 'AdminControllers\MiembrosController@crear')->name('miembros.crear');
  Route::post('/Miembros/Guardar', 'AdminControllers\MiembrosController@guardar')->name('miembros.guardar');
});//crear un miembro
Route::group(['middleware' => ['permission:modificar-cliente']], function (){
  Route::get('/Miembros/{id}/modificar', 'AdminControllers\MiembrosController@editar')->name('miembros.modificar');
  Route::post('/Miembros/{id}/modificar', 'AdminControllers\MiembrosController@actualizar')->name('miembros.actualizar');
});//modificar un miembro
Route::group(['middleware' => ['permission:eliminar-cliente']], function (){
  Route::get('/Miembros/{id}/eliminar', 'AdminControllers\MiembrosController@eliminar')->name('miembros.eliminar');
});//eliminar un miembro

Route::group(['middleware' => ['permission:leer-cliente']], function (){
  Route::get('miembros-lista-pdf', 'AdminControllers\MiembrosController@exportarPdf')->name('miembros.pdf');
  Route::get('miembros-lista-excel', 'AdminControllers\MiembrosController@exportarExcel')->name('miembros.excel');
});
Route::get('/Membresias/listar', 'AdminControllers\MembresiasController@listar')->name('Membresias');

Route::group(['middleware' => ['permission:modificar-cliente']], function (){
  Route::get('/Membresias/{id}/modificar', 'AdminControllers\MembresiasController@editar')->name('membresias.modificar');
  Route::post('/Membresias/{id}/modificar', 'AdminControllers\MembresiasController@actualizar')->name('membresias.actualizar');
});//modificar una membresia

Route::get('/Secciones/listar', 'AdminControllers\SeccionesController@listar')->name('secciones');

Route::group(['middleware' => ['permission:crear-cliente']], function (){
  Route::get('/Secciones/Agregar', 'AdminControllers\SeccionesController@crear')->name('secciones.crear');
  Route::post('/Secciones/Guardar', 'AdminControllers\SeccionesController@guardar')->name('secciones.guardar');
});//crear una seccion
Route::group(['middleware' => ['permission:modificar-cliente']], function (){
  Route::get('/Secciones/{id}/modificar', 'AdminControllers\SeccionesController@editar')->name('secciones.modificar');
  Route::post('/Secciones/{id}/modificar', 'AdminControllers\SeccionesController@actualizar')->name('secciones.actualizar');
});//modificar una seccion
Route::group(['middleware' => ['permission:eliminar-cliente']], function (){
  Route::get('/Secciones/{id}/eliminar', 'AdminControllers\SeccionesController@eliminar')->name('secciones.eliminar');
});//eliminar una seccion



//Rutas Cliente
Route::get('/ClienteH', function () {
  return view('Cliente/ClienteH');
});

Route::view('/Escanear', 'Cliente/Escanear')->name('Escanear');
//Route::view('/Membresia', 'Cliente/Membresia')->name('Membresia');
Route::get('/Membresia', 'ClienteControllers\MembresiaController@index')->name('Membresia');
//Route::view('/Rutinas', 'Cliente/Rutinas')->name('Rutinas');
Route::get('/ClienteH/','ControllerCalendar@index');
Route::get('/ClienteH/{month}','ControllerCalendar@index_month');
Route::get('/ClienteH/{id}','ControllerCalendar@details');

//Rutas Entrenador

//Route::get('/EntrenadorH', function () {
  //return view('Entrenador/EntrenadorH');
//});
//Route::get('/EntrenadorH','EventosController@index');

//Route::resource('EntrenadorH', 'EventosController');
//Route::view('/Agendar', 'Entrenador/Agendar')->name('Agendar');
Route::get('/Entrenador/agregarEvento','EventosController@form');
Route::post('/agregarEvento/create','EventosController@create');
Route::get('/EntrenadorH','EventosController@index')->name('EntrenadorMenu');
Route::get('/EntrenadorH/{month}','EventosController@index_month');
Route::group(['middleware' => ['permission:leer-info-entrenador']], function (){
  Route::get('/Entrenador/{id}/modificar', 'EventosController@editar')->name('evento.modificar');
  Route::post('/Entrenador/{id}/modificar', 'EventosController@actualizar')->name('evento.actualizar');
});
Route::group(['middleware' => ['permission:leer-info-entrenador']], function (){
  Route::get('/Entrenador/{id}/eliminar', 'EventosController@eliminar')->name('evento.eliminar');
});
Route::get('/detalleEvento/{id}','EventosController@details');


//Testeo rutas

Route::get('/Admin', function () {
  return view('Admin');
});
Route::view('/Pago', 'Pago')->name('Pago');
//


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







Route::get('/totem', function () {
  return view('/totem');
});