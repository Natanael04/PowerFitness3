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

Route::get('/login1', function () {
  return view('auth/login1');
});
Route::get('/totem', function () {
  return view('/totem');
});
Route::view('/resultado', '/resultado')->name('resultado');

//Rutas Admin
Route::get('/Admin', function () {
  return view('Administrador/Admin');
});
Route::view('/Pago', 'Administrador/Pago')->name('Pago');
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




Route::get('/Secciones', 'AdminControllers\SeccionesController@listar')->name('secciones');
Route::view('/horarios', 'Administrador/Pago')->name('horarios');


//Rutas Cliente
Route::get('/ClienteH', function () {
  return view('Cliente/ClienteH');
});
Route::view('/Comidas', 'Cliente/Comidas')->name('Comidas');
Route::view('/Escanear', 'Cliente/Escanear')->name('Escanear');
Route::view('/Membresia', 'Cliente/Membresia')->name('Membresia');
Route::view('/Rutinas', 'Cliente/Rutinas')->name('Rutinas');

//Rutas Entrenador
Route::get('/EntrenadorH', function () {
  return view('Entrenador/EntrenadorH');
});

Route::view('/Agendar', 'Entrenador/Agendar')->name('Agendar');
Route::view('/CDieta', 'Entrenador/CDieta')->name('CDieta');
Route::view('/CRutina', 'Entrenador/CRutina')->name('CRutina');

/* hasta aca jajajajja*/



//Testeo rutas

Route::get('/Admin', function () {
  return view('Admin');
});
Route::view('/Pago', 'Pago')->name('Pago');
//


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
