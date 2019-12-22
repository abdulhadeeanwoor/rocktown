<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function addtocart(Request $request)
    {
        
        $product=new Cart;
        $product->description=$request->description;
        $product->price=$request->price;
        
        $product->save();
        return view('js.shop');

    }
    
    
    
}
