<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogueateController extends Controller
{
    public function logueate() {
        return view('logueate', array('user' => Auth::user()) ); 
    }
}
