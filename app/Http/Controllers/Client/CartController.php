<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index($id) {
        $cart = session()->get('cart',[]);
        return view('client.cart',compact('cart'));
    }
}
