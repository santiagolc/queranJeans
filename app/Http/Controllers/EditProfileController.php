<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;

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
        if($request->hasFile('avatar')) {

            

            $this->validate($request, $datos, $mensajes);

            $profileImage = $request->file('avatar');
            $profileImageSaveAsName = time() . "." . $profileImage->getClientOriginalExtension();
            $upload_path = 'avatars/';
            $profile_image_url = $upload_path . $profileImageSaveAsName;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);

            $user = Auth::user();
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->avatar = $profile_image_url;
            $user->save();

            return view('profile', array('user' => Auth::user()) );
        }

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


        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        return view('profile', array('user' => Auth::user()) );
    }
}
