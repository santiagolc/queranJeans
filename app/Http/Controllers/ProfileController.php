<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function vista(){
        return view('profile', array('user' => Auth::user()) );
    }

    public function logueate() {
        return view('logueate', array('user' => Auth::user()) ); 
    }

}
