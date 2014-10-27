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
		return \View::make('admin.blogs.artikel.index',array(
                    'kats'=>  \App\Models\Artikel::all()
                ));
	}
        
        public function getNew(){
            $kategoris = \App\Models\Kategori::all();
            foreach($kategoris as $kat){
                $kats[$kat->id] = $kat->nama;
            }
            return \View::make('admin.blogs.artikel.new',array('kats'=>$kats));
        }
        
        public function postNew(){
            $kat = new \App\Models\Artikel();
            $kat->nama = \Input::get('nama');
            $kat->publish = \Input::get('publish');
            $kat->save();
            return $kat->toJson();
        }
        
        public function getEdit($id){
            return \View::make('admin.blogs.artikel.edit',array(
                    'kat'=>  \App\Models\Artikel::find($id)
                ));
        }
        
        public function postEdit(){
            $kat = \App\Models\Artikel::find(\Input::get('katId'));
            $kat->nama = \Input::get('nama');
            $kat->publish = \Input::get('publish');
            $kat->save();
            return $kat->toJson();
        }
        
        public function getDelete($id){
            $kat = \App\Models\Artikel::find($id);
            $kat->delete();
            return $kat->toJson();
        }

}
