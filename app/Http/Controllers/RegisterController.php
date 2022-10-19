<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
    //    dd($request);
    // dd($request->get('username'));

    // Validación
        $this-> validate($request,[
            'name' => "required|max:30",
            'username' => "required|unique:users|min:3|max:16",
            'email' => "required|unique:users|min3|max:45|email",
            'password' => "required",
        ]);
    }
}
