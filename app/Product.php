<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function product_images(){
        return $this->hasMany('App\Product_image', 'product_id');
    }

    public function cart_items(){
        return $this->hasOne('App\Cart_items', 'product_id');
    }
}


