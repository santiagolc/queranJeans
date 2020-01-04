<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProductController extends Model
{
    public function agregar(Request $request){
       
        $product_id = $request->product_id; 
        $carritoActivo = Cart::where("user_id", "=" , Auth::user());
  }
    
}
