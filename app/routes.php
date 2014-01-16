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

Route::get('/', function() {
	$data = array('title' => 'Bienvenido', 'sub' => '');
	return View::make('admin.index')
		->with($data);
});

Route::get('encuesta', function() {
	$data = array('title' => 'Encuesta', 'sub' => 'clientes');
	return View::make('admin.encuesta')
		->with($data);
});

