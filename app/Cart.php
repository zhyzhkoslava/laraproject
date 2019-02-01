<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function orders() {
        return $this->hasOne('App\Order', 'cart_id');
    }

    public function cart_items() {
        return $this->hasMany('App\Cart_item', 'cart_id');
    }
}
