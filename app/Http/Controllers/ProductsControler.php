<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductsControler extends Controller
{
    public function barang(){
        $products = products::all();
        return view('ordering/barang',compact('products'));
        
    }
     public function createproducts(Request $request){
        
        $products = new products();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->image = $request->image;
        $products->aktive = $request->aktive;
        $products->descripsi = $request->descripsi;

        $products->save();
        return response()->json([
            'message' => 'post successfully',
            'data' => $products

        ]);

    }
    public function show()
    {
        $products = products::all();
        return response()->json( $products,200);
    }

    

}
