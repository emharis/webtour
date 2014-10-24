<?php

namespace App\Controllers\Admin;

class KategoriController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Kategori Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'KategoriController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return \View::make('admin.blogs.kategori.index');
	}

}
