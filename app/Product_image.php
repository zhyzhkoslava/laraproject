<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    //
    public function products(){
        return $this->belongsTo('App\Product');
    }
}
