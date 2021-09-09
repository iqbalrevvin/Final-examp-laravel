<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('layouts/home');
    }

  
    public function CreateAkun(Request $request){

        $data = User::Create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'level' => $request->level,
            'password' => bcrypt($request->password),
        ]);
       
        return redirect('/listadmin');

        $data->save();
        return response()->json([
            'message' => 'post successfully',
            'data' => $data

        ]);

    }
    
}
