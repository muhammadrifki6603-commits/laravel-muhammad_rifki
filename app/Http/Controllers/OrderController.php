<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Events\CheckoutCompleted;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($request->product_id);

        // reduce stock
        $product->reduceStock($request->qty);

        // create order
        $order = Order::create([
            'product_id' => $product->id,
            'qty' => $request->qty,
            'total_price' => $product->price * $request->qty,
            'status' => 'paid'
        ]);

        // fire event
        event(new CheckoutCompleted($order));

        return response()->json([
            'message' => 'Checkout berhasil',
            'order' => $order
        ]);
    }
}
