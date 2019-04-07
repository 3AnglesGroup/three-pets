<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('suscripciones','SuscripcionesController@index');
Route::get('get-products','ProductController@getProduct');


//Carrito
Route::post('orden','CartController@orden');

//Departamentos
Route::get('departamentos','CartController@departamentos');
Route::get('ciudades/{id}','CartController@ciudades');

//Payu
Route::post('payu/pagar','CartController@pagar');

// Admin
    // Cliente
Route::get('cientes-three-pets','UserController@clientes');
    //Orden
Route::get('ordenes-three-pets','OrdenController@lista');    
Route::get('orden-detail/{id}','OrdenController@detail');    
Route::get('pedido/{id}','OrdenController@pedido');    