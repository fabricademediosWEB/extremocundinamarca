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
Route::controller('registro', 'EmpresaController');
Route::controller('login', 'AuthController');
Route::get('eliminar/{id}', array('uses' => 'EmpresaController@destroy'));
Route::post('registrar', array('uses' => 'EmpresaController@store'));

Route::get('prueba', function(){
	$empresa = new Empresa;

	$empresa->descripcion = 'prueba';
	$empresa->nit = 12345678901;
	$empresa->password = 'holamundo';

	$empresa->save();
});