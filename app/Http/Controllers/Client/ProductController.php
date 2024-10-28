<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('client.index',compact('products'));
    }
    public function detail(Product $product)  {
        return view('client.product-detail',compact('product'));
    }
<<<<<<< HEAD
=======

    public function search(Request $request){
        $search = $request->input('keyword');
        $products = Product::where('name', 'like', "%$search%")->get();
        return view('client.index',['products' => $products]);
    }

    public function indexProduct() {
        $products = Product::all();
        return view('client.product', compact('products'));
    }
    
>>>>>>> f275d0c8dfd3e5392012e0c4580a9a9754a4d03e
}
