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
//rutas de prueba
 
Route::get('controlador', 'PruebaController@index');
//Route::get('controlador', 'PruebaController@index')->name('controlador');

Route::get('prueba', function(){
	return "Hola desde routes.php";
});

Route::get('nombre/{nombre}', function($nombre){
	return "Mi nombre es: ".$nombre;
});

Route::get('edad/{edad}', function($edad){
	return "Mi edad es: ".$edad;
});

Route::get('edad2/{edad?}', function($edad = 20){
	return "Mi edad es: ".$edad;
});

//fin rutas de prueba

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get ('index', 'FrontController@index');
Route::get ('contacto', 'FrontController@contacto');
Route::get ('reviews', 'FrontController@reviews');