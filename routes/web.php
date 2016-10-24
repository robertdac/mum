<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => ['web']], function () {




    Route::get('/', 'ProductosController@index');

    Route::resource('productos', 'ProductosController');
    Route::get('carrito/{id}', 'CarritoController@addCarrito');
    Route::get('vista', 'CarritoController@vistaCarrito');
    Route::get('suma/{id}', 'CarritoController@sumCarrito');
    Route::get('restar/{id}', 'CarritoController@restCarrito');
    Route::get('fila/{id}', 'CarritoController@restFilaCarrito');

});







Auth::routes();

Route::get('/home', 'HomeController@index');
