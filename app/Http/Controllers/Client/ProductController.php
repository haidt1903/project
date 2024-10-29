<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

    public function search(Request $request){
        $search = $request->input('keyword');
        $products = Product::where('name', 'like', "%$search%")->get();
        return view('client.product',['products' => $products]);
    }

    public function indexProduct() {
        $products = Product::all();
        return view('client.product', compact('products'));
    }
    public function filterProduct($id) {
        $cate = Category::find($id);
        $products = Product::where('category_id',$id)->get();
        return view('client.product',compact('products','cate'));
    }
    
}
