<?php

namespace App\Http\Controllers;
use App\Cart;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function vista(){
        $cart = Cart::where('user_id', \Auth::id())-> where('status', "=", 0)->get();
        $user=  Auth::user();
        $vac = compact("user", "cart");
        return view('profile', $vac );
        
    }
}
