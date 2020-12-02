<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pintores extends Controller
{
    public function index(){
        return view ('index');
    }

    public function leonardo(){
        return view ('leonardo');
    }

    public function picasso(){
        return view ('picasso');
    }

    public function monet(){
        return view ('monet');
    }

    public function vincent(){
        return view ('vincent');
    }

   public function login(){
        request()-> validate([
           'user'=> 'required',
           'password'=> 'required' 
        ]);
        return view ('index');
    }
}
