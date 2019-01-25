<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function categroy()
    {
    	return $this->belongsTo('App\Category','Category_id');
    }
}
