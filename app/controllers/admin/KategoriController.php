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
		return \View::make('admin.blogs.kategori.index',array(
                    'kats'=>  \App\Models\Kategori::all()
                ));
	}
        
        public function getNew(){
            return \View::make('admin.blogs.kategori.new');
        }
        
        public function postNew(){
            $kat = new \App\Models\Kategori();
            $kat->nama = \Input::get('nama');
            $kat->publish = \Input::get('publish');
            $kat->save();
            return $kat->toJson();
        }
        
        public function getEdit($id){
            return \View::make('admin.blogs.kategori.edit',array(
                    'kat'=>  \App\Models\Kategori::find($id)
                ));
        }
        
        public function postEdit(){
            $kat = \App\Models\Kategori::find(\Input::get('katId'));
            $kat->nama = \Input::get('nama');
            $kat->publish = \Input::get('publish');
            $kat->save();
            return $kat->toJson();
        }
        
        public function getDelete($id){
            $kat = \App\Models\Kategori::find($id);
            $kat->delete();
            return $kat->toJson();
        }

}
