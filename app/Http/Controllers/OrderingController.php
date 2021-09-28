<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderingController extends Controller
{
    public function ordering(){
        return view('ordering/order');
    }
}
