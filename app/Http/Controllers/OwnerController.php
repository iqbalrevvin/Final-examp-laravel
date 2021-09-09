<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class OwnerController extends Controller
{
    public function index(){
        return view('layouts/home');
    }

    public function listadmin(){
        $useradmin = user::paginate(2);
        return view('pages/RegistAdmin/listadmin',compact('useradmin'));
        return response()->json( $useradmin,200);
    }
    public function listadminApi(){
        $useradmin = user::paginate(2);
        return response()->json( $useradmin,200);
    }



    public function register(){
        return view('pages/RegistAdmin/register');
    }
    public function EditAkun($id){
        $user = User::findorfail($id);
        return view('pages/RegistAdmin/EditAkun',compact('user'));
    }
    public function UpdateAkun(Request $request, $id){
        $user = User::findorfail($id);
        $user->update($request->all());
        return redirect('/listadmin')->with('toast_success','data berhasil di update');
    }
    public function DeleteAkun($id){
        $user = User::findorfail($id);
        $user->delete();
        return back();
    }

    



  
}

