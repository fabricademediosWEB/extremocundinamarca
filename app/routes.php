<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('page.home');
});

Route::get('clave', function(){
	return View::make('dashboard.clave');
});
Route::get('logout', 'AuthController@logOut');

Route::get('dashboard/{$id}', function ()
{
	return View::make('dashboard.dashboard');
});

Route::controller('servicios', 'ServiciosController');
Route::controller('deporte', 'DeportesController');
Route::controller('editar', 'PerfilController');

Route::controller('registro', 'RegistroController');
Route::controller('login', 'AuthController');
Route::post('registrar', array('uses' => 'RegistroController@store'));
Route::post('login', array('uses'=>'AuthController@store'));

//Route::resource('dashboard', 'DashController');