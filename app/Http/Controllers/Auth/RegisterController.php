<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'name.required' => 'No olvides darnos tu nombre!',
            'name.string' => 'Solo letras!',
            'name.min' => 'Te pido minimo 3 letas!',

            'surname.required' => 'No olvides darnos tu apellido!',
            'surname.string' => 'Solo letras!',
            'surname.min' => 'Te pido minimo 3 letas!',

            'email.required' => 'No olvides darnos tu email!',
            'email.email' => 'Debe ser un formato de email!',

            'password.required' => 'No olvides crearte una contraseña!',
            'password.min' => 'Tu contraseña debe tener al menos 8 caracteres!',
        ];

        return Validator::make($data, [
            'name' => ['required', 'string', 'min:3', 'max:30'],
            'surname' => ['required', 'string', 'min:3', 'max:30'],
            'email' => ['required', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['file'],
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
   
    {
        $request = request();
        if($request->hasFile("avatar")) {
            $profileImage = $request->file('avatar');
            $profileImageSaveAsName = time() . "." . $profileImage->getClientOriginalExtension();
            $upload_path = 'avatars/';
            $profile_image_url = $upload_path . $profileImageSaveAsName;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        } else {
            $profile_image_url = "avatars/foto".rand(1,3).".png"; 
        }
 
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $profile_image_url,
        ]);
    }
}
