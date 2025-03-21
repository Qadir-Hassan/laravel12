<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function show(){

        $name = "Qadir";
        return view('contact',['namekey'=>$name]);
    }

    public function home(){
        return view('home');
    }
}
