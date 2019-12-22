<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;

class getcartdata extends Controller
{
    public function getcartitems()
    {
        $products = Cart::all();
        return view('js.cart')
                ->with('products',$products);
    }
    
}
