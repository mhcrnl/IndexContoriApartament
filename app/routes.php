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
Route::model('game', 'Game');

Route::get('/', 'HomeController@index');
Route::get('/create', 'HomeController@create');
Route::get('/edit/{game}', 'HomeController@edit');
Route::get('/delete/{game}', 'HomeController@delete');

Route::post('/create', 'HomeController@handleCreate');
Route::post('/edit', 'HomeController@handleEdit');
Route::post('/delete', 'HomeController@handleDelete');

Route::get('/', function()
{
	return View::make('hello');
});
