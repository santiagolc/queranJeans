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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/index", "IndexController@mostrarOfertasYCategorias");


Route::get("/faq", function(){
    return view("faq");
});

Route::get("/registro", function(){
    return view("registro");
});

Route::get("/login", function(){
    return view("login");
});



