<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductsControler extends Controller
{
     public function createproducts(Request $request){
        
        $products = new products();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->aktive = $request->aktive;
        $products->descripsi = $request->descripsi;

        $products->save();
        return response()->json([
            'message' => 'post successfully',
            'data' => $products

        ]);

    }
}
