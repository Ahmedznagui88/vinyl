<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth')->only('profile');
    }


    public function home() {

        return view('welcome');
    }

    public function profile(){
        /* $consoles = Console::where('user_id', Auth::user()->id->get());
        return view('profile', compact('consoles')); */
        return view('profile');
    }
}
