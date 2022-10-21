<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
    //    dd($request);
    // dd($request->get('username'));

    //modificar el request
        $request-> request ->add(['username' => Str::slug( $request-> username)]);
    // Validación
        $this-> validate($request,[
            'name' => "required|max:30",
            'username' =>  "required|unique:users|min:3|max:16",
            'email' => "required|unique:users|min:3|max:45|email",
            'password' => "required|confirmed|min:6",
        ]);

        User::create([
            'name' => $request-> name,
            'username' => $request-> username,
            'email' => $request-> email,
            'password' => Hash::make( $request-> password)
        ]);

        //redireccionar

        return redirect()-> route('posts.index');
    }
}
