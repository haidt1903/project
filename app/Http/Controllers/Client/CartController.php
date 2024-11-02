<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;


class CartController extends Controller
{
    public function addToCart($id) {
        // Find the product by ID
        $product = Product::find($id);
        
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404); // Product not found
        }
    
        // Retrieve existing cart data from session
        
        $cart = session()->get('cart', []);
        session()->put('cart', $cart);

        // Modify cart based on whether product is in cart
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1,
            ];
        }
    
        // Store updated cart in session
        session()->put('cart', $cart);
    
        return response()->json(['cart' => $cart, 'message' => 'Thêm sản phẩm thành công']); // Success response
    }
    public function show()  {
        // echo"<pre>";
        // print_r(session()->get('cart'));
        $cart = session()->get('cart');
        return view('client.cart',compact('cart'));
    }
    public function updateQuantity(Request $request, $id) {
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);
    
        // Check if the item exists in the cart
        if (isset($cart[$id])) {
            $newQuantity = $request->input('quantity');
            if ($newQuantity > 0) {
                $cart[$id]['quantity'] = $newQuantity; // Update quantity
            } else {
                unset($cart[$id]); // Remove item if quantity is less than 1
            }
    
            // Save updated cart back to session
            session()->put('cart', $cart);
    
            // Return success response with updated cart details
            return response()->json(['cart' => $cart, 'message' => 'Quantity updated']);
        }
    
        // Return error if item not found in the cart
        return response()->json(['error' => 'Product not found in cart'], 404);
    }
    
    
}
