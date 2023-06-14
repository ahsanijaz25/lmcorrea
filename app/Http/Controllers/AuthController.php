<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AuthController extends Controller
{
    public function login(){

        return view('login');
    }
    
    public function signup(){

        return view('registration');
    }

    public function loginpost( Request $req){
        $user = new Post;
        $user->name = $req->username;
        $user->password = $req->password;
        $user->save();

        // $user = User::create([
        //     'name' => $req->name,
        //     'email' => $req->email,
        //     'password' => Hash::make($req->password),
        // ]);
        return redirect('home');
    }

    public function signuppost( Request $req){

        return view('registration');
    }

    
}
