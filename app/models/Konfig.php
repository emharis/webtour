<?php

namespace App\Models;

class Konfig extends \Eloquent  {
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'config';
        
        public function kategori(){
            return $this->belongsTo('App\Models\Kategori');
        }

}
