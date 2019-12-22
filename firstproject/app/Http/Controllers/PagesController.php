<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getindex(){
        return view('js.index');
    }

    public function getabout(){
        return view('js.about');
    }

    public function getblog(){
        return view('js.blog');
    }
    public function getcart(){
        return view('js.cart');
    }

    public function getcheckout(){
        return view('js.checkout');
    }
    public function getcontact(){
        return view('js.contact');
    }
    public function getshop(){
        return view('js.shop');
    }


    public function addproduct(Request $request)
    {
        try{
            Product::create($request->all());
            return redirect()->back();
        }catch(\Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function createProduct()
    {
        return view('js.form');
    }
}
