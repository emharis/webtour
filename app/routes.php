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

//Route::get('/', function() {
//    return View::make('hello');
//});

/*
  Route::group(array('prefix' => 'admin'), function() {
  Route::controller('home','App\Controllers\Admin\HomeController');
  }); */

Route::group(array('prefix' => 'admin'), function() {
    Route::any('/',function(){
        return \Illuminate\Support\Facades\Redirect::to('admin/home');
    });
    Route::controller('home', 'App\Controllers\Admin\HomeController');
    Route::controller('kategori', 'App\Controllers\Admin\KategoriController');
    Route::controller('artikel', 'App\Controllers\Admin\ArtikelController');
});

