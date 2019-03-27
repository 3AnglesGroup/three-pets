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

// Ruta de confirmación
Route::post('confirmacion','OrdenController@confirmacion');

Route::get('/', function () {return view('index');});
Route::get('productos', function () {return view('productos');});
Route::get('tienda', function () {return view('tienda');});
Route::get('carrito', function () {return view('carrito');});
Route::get('contacto', function () {return view('contacto');});

//RUTAS ADMIN
Route::get('admin', function () {return view('admin.index');});
//FIN DE RUTAS ADMIN
