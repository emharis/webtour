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

    public function getIndex() {
        return \View::make('admin.blogs.artikel.index', array(
                    'arts' => \App\Models\Artikel::all()
        ));
    }

    public function getNew() {
        $kategoris = \App\Models\Kategori::all();
        foreach ($kategoris as $kat) {
            $kats[$kat->id] = $kat->nama;
        }
        return \View::make('admin.blogs.artikel.new', array('kats' => $kats));
    }

    public function postNew() {
        $blog_img_url = \App\Models\Konfig::whereNama('blog_img_url')->first();

        $artikel = new \App\Models\Artikel();
        $artikel->kategori_id = \Input::get('kategori');
        $artikel->judul = \Input::get('judul');
        $artikel->konten = \Input::get('konten');
        $artikel->image_is_url = (\Input::get('isurl') ? 'Y' : 'N');
        if ($artikel->image_is_url == 'Y') {
            $artikel->imageurl = \Input::get('imageurl');
        } else {
            //upload image if set
            if (\Input::hasFile('image')) {
                $artikel->imageurl = \URL::to($blog_img_url->value . '/' . \Input::file('image')->getClientOriginalName());
                $artikel->image = \Input::file('image')->getClientOriginalName();
                \Input::file('image')->move($blog_img_url->value, \Input::file('image')->getClientOriginalName());
            } else {
                echo 'tidak ada gambar';
            }
        }
        $artikel->publish = \Input::get('publish');
        $artikel->save();

        return $artikel->toJson();
    }

    public function getEdit($id) {
        return \View::make('admin.blogs.artikel.edit', array(
                    'kat' => \App\Models\Artikel::find($id)
        ));
    }

    public function postEdit() {
        $kat = \App\Models\Artikel::find(\Input::get('katId'));
        $kat->nama = \Input::get('nama');
        $kat->publish = \Input::get('publish');
        $kat->save();
        return $kat->toJson();
    }

    public function getDelete($id) {
        $kat = \App\Models\Artikel::find($id);
        $kat->delete();
        return $kat->toJson();
    }

}
