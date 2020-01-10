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

Route::get("/index", "ProductController@ofertas");

Route::get("/faq", "FaqController@faq");

Route::get("/profile", "ProfileController@vista");

Route::get("/edit", "EditProfileController@edit");
Route::post("/edit", "EditProfileController@update");

Route::post("/agregar", "CartProductController@agregar");

Route::get('/hombre', 'ProductController@mostrarProductosHombre');
Route::get('/mujer', 'ProductController@mostrarProductosMujer');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


