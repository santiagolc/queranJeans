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
Route::get("/carrito", "CartController@mostrarCarrito");
Route::post('/eliminar', "CartController@eliminarProducto");
Route::post('/finalizarCompra', "CartController@finalizarCompra");
Route::post('checkout', "CartController@pagar");

//Rutas para productos y categorias
Route::get('/hombre', 'ProductController@mostrarProductosHombre');

Route::get('/mujer', 'ProductController@mostrarProductosMujer');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




