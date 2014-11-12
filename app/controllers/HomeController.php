<?php //app/controllers/HomeController.php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('index');
	}
	public function create()
	{
		return View::make('create');
	}
	public function handleCreate()
	{

	}
	public function edit(Game $game)
	{
		return View::make('edit');
	}
	public function handleEdit()
	{

	}
	public function delete()
	{
		return View::make('delete');
	}
	public function handleDelete()
	{

	}

}
