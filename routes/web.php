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

//Rutas Admin
Route::get('/Admin', function () {
  return view('Administrador/Admin');
});
Route::view('/Agregar', 'Administrador/Agregar')->name('Agregar');
Route::view('/Pago', 'Administrador/Pago')->name('Pago');
Route::get('/Miembros', 'AdminControllers\MiembrosController@listar')->name('Miembros');
Route::group(['middleware' => ['permission:eliminar-cliente']], function (){
  Route::get('/Miembros/{id}/eliminar', 'AdminControllers\MiembrosController@eliminar')->name('usuarios.eliminar');
});

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
Route::view('/Agregar', 'Agregar')->name('Agregar');
Route::view('/Pago', 'Pago')->name('Pago');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('Agregar','AgregarController@store');
//Route::get('/Miembros', 'UserController@index');
