<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $product = Product::find($request->product_id);

        if (!$product) {
            return response()->json(['message' => 'Product tidak ditemukan'], 404);
        }

        if ($product->stock < $request->qty) {
            return response()->json(['message' => 'Stock tidak cukup'], 400);
        }

        // 1. buat order
        $order = Order::create([
            'status' => 'pending',
            'total' => 0
        ]);

        // 2. buat order item
        $order->items()->create([
            'product_id' => $product->id,
            'qty' => $request->qty,
            'price' => $product->price
        ]);

        // 3. reduce stock
        $product->reduceStock($request->qty);

        // 4. update total
        $order->update([
            'total' => $product->price * $request->qty
        ]);

        return response()->json([
            'message' => 'Checkout berhasil',
            'order' => $order->load('items')
        ]);
    }
}