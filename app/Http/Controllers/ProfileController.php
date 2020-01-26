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
        $array = [
            "74" => "San Luis",
            "70" => "San Juan",
            "30" => "Entre Rios",
            "78" => "Santa Cruz",
            "62" => "Rio Negro",
            "26" => "Chubut",
            "14" => "Cordoba",
            "50" => "Mendoza",
            "46" => "La Rioja",
            "10" => "Catamarca",
            "42" => "La Pamapa",
            "86" => "Santiago del Estero",
            "18" => "Corrientes",
            "82" => "Santa Fe",
            "90" => "Tucuman",
            "58" => "Neuquen",
            "66" => "Salta",
            "22" => "Chaco",
            "34" => "Formosa",
            "38" => "Jujuy",
            "02" => "Ciudad Autónoma de Buenos Aires",
            "06" => "Buenos Aires",
            "94" => "Tierra del Fuego"
        ];
    
        $cart = Cart::where('user_id', \Auth::id())-> where('status', "=", 0)->get();
        $user=  Auth::user();
        $vac = compact("user", "cart", "array");
        return view('profile', $vac );
        
    }
}
