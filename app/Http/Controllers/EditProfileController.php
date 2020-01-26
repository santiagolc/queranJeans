<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;
use App\Cart;

class EditProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(){
        return view('edit', array('user' => Auth::user()) );
    }

    public function update(Request $request)
    {
        $datos = [
            'name' => 'required|min:2',
            'surname' => 'required|min:2',
        ];

        $mensajes = [
            'name.required' => 'No te olvides de editar tu nombre!',
            'name.min' => 'Te pido al menos 2 letras!',

            'surname.required' => 'No te olvides de editar tu apellido!',
            'surname.min' => 'Te pido al menos 2 letras!',
        ];
       
        $this->validate($request, $datos, $mensajes);

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

        if($request->hasFile('avatar')) {

            $profileImage = $request->file('avatar');
            $profileImageSaveAsName = time() . "." . $profileImage->getClientOriginalExtension();
            $upload_path = 'avatars/';
            $profile_image_url = $upload_path . $profileImageSaveAsName;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);

            $user = Auth::user();
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->province = $request->locality;
            $user->avatar = $profile_image_url;
            $user->save();

            $cart = Cart::where('user_id', \Auth::id())-> where('status', "=", 0)->get();
            $user=  Auth::user();
            $vac = compact("user", "cart", "array");

            return view('profile', $vac );
        }

        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->province = $request->locality;
        $user->save();
        $cart = Cart::where('user_id', \Auth::id())-> where('status', "=", 0)->get();
        $user = \Auth::user();
        $vac = compact('user', 'cart', 'array');
        return view('profile', $vac );
    }
}
