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
}
