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
Route::get("/profile", "ProfileController@vista");
Route::get("/edit", "EditProfileController@edit");
Route::post("/edit", "EditProfileController@update");

//Rutas para carrito
Route::post("/agregar", "CartProductController@agregar");
Route::get("/carrito", "CartController@mostrarCarrito")->middleware("auth");
Route::post('/eliminar', "CartController@eliminarProducto");
Route::post('/finalizarcompra', "CartController@finalizarCompra");
Route::get('/finalizarcompra', "CartController@mostrarCarritoFinalizado");

//Rutas para productos y categorias
Route::get('/hombre', 'ProductController@mostrarProductosHombre');
Route::get('/mujer', 'ProductController@mostrarProductosMujer');

Route::get('/productos', 'ProductController@todos');
Route::get('/producto/nuevo', 'ProductController@create');
Route::post('/producto/nuevo/store', 'ProductController@store');
Route::get('/producto/{id}', 'ProductController@edit');
Route::post('/producto/update/{id}', 'ProductController@update');
Route::post('/producto/delete/{id}', 'ProductController@delete');
Route::get('/logueate', 'ProfileController@logueate');
//Route::get('/plantilla', 'CartController@mostrarCarritoPlantilla');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




