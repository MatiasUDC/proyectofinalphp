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


Route::get('admin', 'Admin\\AdminController@index');

Route::get('admin/give-role-permissions', 'Admin\\AdminController@getGiveRolePermissions');
Route::post('admin/give-role-permissions', 'Admin\\AdminController@postGiveRolePermissions');
Route::resource('admin/roles', 'Admin\\RolesController');
Route::resource('admin/permissions', 'Admin\\PermissionsController');
Route::resource('admin/users', 'Admin\\UsersController');
Auth::routes();



Route::get('/home', 'HomeController@index');

Route::resource('producto', 'Producto\\ProductoController');

/*
// Check role in route middleware
Route::group(['prefix' => 'admin', 'middleware' => 
	['auth', 'roles'], 'roles' => 'admin'], function () {
   Route::get('/', ['uses' => 'AdminController@index']);

   
});
*/



/*
// Check role in route middleware
Route::group(['prefix' => 'admin/users', 'middleware' => ['auth', 'roles'], 'roles' => 'admin'], function () {
	Route::get('/', ['uses' => 'Admin\UsersController@index']);
});

*/

