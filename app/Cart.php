<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class, 'cart_product', 'cart_id', 'product_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
