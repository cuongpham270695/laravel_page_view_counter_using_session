<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index',compact('products'));
    }

    public function show($id)
    {
        $product_key = 'product_' . $id;
        if (!Session::has($product_key)){
            Product::where('id',$id)->increment('view_count');
            Session::put($product_key,1);
        } else {
            Product::where('id',$id)->increment('view_count');
        }
        $product = Product::find($id);
        return view('show',compact('product'));
    }
}
