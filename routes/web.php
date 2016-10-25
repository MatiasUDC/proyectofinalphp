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




Auth::routes();

Route::get('/home', 'HomeController@index');

//persona Resources
/********************* persona ***********************************************/
Route::resource('persona','\App\Http\Controllers\PersonaController');
Route::post('persona/{id}/update','\App\Http\Controllers\PersonaController@update');
Route::get('persona/{id}/delete','\App\Http\Controllers\PersonaController@destroy');
Route::get('persona/{id}/deleteMsg','\App\Http\Controllers\PersonaController@DeleteMsg');
/********************* persona ***********************************************/

<<<<<<< HEAD
Route::group(['prefix' => 'admin'], function()
{

    Route::get('/', 'AdministradorController@index');
    Route::resource('producto','ProductoController');
	Route::resource('categoria','CategoriaController');

});
=======
>>>>>>> 2918a4e8fa5ea742110dd492af4916ceeb640a32
