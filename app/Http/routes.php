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


Route::get('/', ['middleware' => 'auth', 'uses' => 'TasksController@index']);
Route::get('/tasks', ['middleware' => 'auth', 'uses' => 'TasksController@index']);
Route::get('/tasks/create', ['middleware' => 'auth', 'uses' => 'TasksController@create']);
Route::get('/reports', ['middleware' => 'auth', 'uses' => 'ReportsController@index']);
Route::get('/catalogs', ['middleware' => 'auth', 'uses' => 'CatalogsController@index']);

// 	Route::get('/tasks','TasksController@index');
// 	Route::get('/create','TasksController@create');
// 	Route::get('/edit/{id}','TasksController@edit');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
