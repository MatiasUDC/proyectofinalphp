<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});






// ruta de Autenticacion...
Route::get('auth/login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);


// Registracion de Rutas...
Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);



	Route::resource('categoria', 'Admin\CategoriaController');
	Route::resource('producto', 'Admin\ProductoController');
	Route::resource('user', 'Admin\UserController');

	Route::get('home', function(){
		return view('admin.home');
	});



Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('producto/{slug}', [
	'as' => 'producto-detalle',
	'uses' => 'StoreController@show'
]);



