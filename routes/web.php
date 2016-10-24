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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('producto','ProductoController');

Route::resource('categoria','CategoriaController');


//persona Resources
/********************* persona ***********************************************/
Route::resource('persona','\App\Http\Controllers\PersonaController');
Route::post('persona/{id}/update','\App\Http\Controllers\PersonaController@update');
Route::get('persona/{id}/delete','\App\Http\Controllers\PersonaController@destroy');
Route::get('persona/{id}/deleteMsg','\App\Http\Controllers\PersonaController@DeleteMsg');
/********************* persona ***********************************************/
