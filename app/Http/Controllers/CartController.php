<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return 'hello';
    }

    public function AddCart(Request $request){
     
        $product = Products::find($request->id);
        $cart = new Cart;
        $cart->product_id = $request->id;
        $cart->ordering_id = 1;
        $cart->jumlah = $request->qty;
        $cart->jumlah_harga = $product->price*$request->qty;
        $cart->save();
        
        return redirect('/barang');
    }

    public function ListCart(Request $request){

        $carts = Cart::all();

        return view('ordering.cart', compact('carts'));
    }
}
