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

Route::get("/", "ProductController@ofertas");
Route::get("/faq", "FaqController@faq");


//Rutas para perfil de usuario
Route::get("/profile", "ProfileController@vista")->middleware("auth");
Route::get("/edit", "EditProfileController@edit")->middleware("auth");
Route::post("/edit", "EditProfileController@update")->middleware("auth");

//Rutas para carrito
Route::post("/agregar", "CartProductController@agregar")->middleware("mustBeLogged");
Route::get("/carrito", "CartController@mostrarCarrito")->middleware("auth");
Route::post('/eliminar', "CartController@eliminarProducto")->middleware("auth");
Route::post('/finalizarcompra', "CartController@finalizarCompra")->middleware("auth");
Route::get('/finalizarcompra', "CartController@mostrarCarritoFinalizado")->middleware("auth");

//Rutas para productos y categorias
Route::get('/hombre', 'ProductController@mostrarProductosHombre');
Route::get('/mujer', 'ProductController@mostrarProductosMujer');

Route::get('/productos', 'ProductController@todos')->middleware("isAdmin");
Route::get('/producto/nuevo', 'ProductController@create')->middleware("isAdmin");
Route::post('/producto/nuevo/store', 'ProductController@store')->middleware("isAdmin");
Route::get('/producto/{id}', 'ProductController@edit')->middleware("isAdmin");
Route::post('/producto/update/{id}', 'ProductController@update')->middleware("isAdmin");
Route::post('/producto/delete/{id}', 'ProductController@delete')->middleware("isAdmin");
Route::get('/logueate', 'LogueateController@logueate');
Route::get('/tuscompras', 'CartController@mostrarComprasFinalizadas')->middleware("auth");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




