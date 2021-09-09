<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function proses_login(Request $request){
            if (Auth::attempt($request->only('username','password'))) {
               
                $user = Auth::User();
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                }elseif($user->level == 'owner') {
                    return redirect()->intended('owner');
            }
            return redirect()->intended('/');
    }
    return redirect('/');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}