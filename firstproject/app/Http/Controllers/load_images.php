<?php

namespace App\Http\Controllers;
use  App\Product;
use Illuminate\Http\Request;

class load_images extends Controller
{
    public function getImages()
    {
        $products = Product::all();
        return view('js.index')
                ->with('products',$products);
    }

    public function insert(Request $request)
    {
        $product=new Product;
        $product->address=$request->address;
        $product->save();

    }

    public function delete($id){
        Product::destroy($id);
        return redirect()->back();
    }

    public function update(Request $request)
    {
        
    }

}
