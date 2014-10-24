<?php

namespace App\Controllers\Admin;

class ArtikelController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Artikel Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'ArtikelController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return \View::make('admin.artikel.index');
	}

}
