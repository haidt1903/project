<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index() {
        $cart = session()->get('cart');
        $user = Auth::user();
        // echo '<pre>';
        // print_r($cart);
        // // die();
        $totalAmount = collect($cart)->sum(function ($item) {
            return $item['quantity'] * $item['price'];
        });
        $order = Order::create([
            'user_id' => $user->id,
            'order_date' => now(),
            'status' => 'Pending',
            'total_amount' => $totalAmount
        ]);

        foreach ($cart as $item) {
            // print_r($item);
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price_at_time' => $item['price'],
            ]);
        }


        // return response()->json($order);
        return view('client.payment',compact('cart','user','order'));
    }
    public function payOrder(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }


        $payment = Payment::create([
            'order_id' => $orderId,
            'payment_date' => now(),
            'amount' => $order->total_amount,
            'payment_method' => $request->payment_method,
            'address' => $request->address,
            'status' => 'Completed',
        ]);

        $order->update(['status' => 'Paid']);

        // return response()->json($payment);
        return redirect()->route('index');
    }

}
