<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'total_price' => 'required|numeric',
            'products' => 'required|array',
        ]);

        $order = Order::create([
            'name' => $request->input('name'),
            'telephone' => $request->input('telephone'),
            'address' => $request->input('address'),
            'total_price' => $request->input('total_price'),
            'products' => $request->input('products'),
            'status' => 'pending',
        ]);

        return response()->json(['order_id' => $order->id], 201);
    }


    public function index()
    {
        $orders = Order::all();
        return response()->json(['orders' => $orders], 200);
    }
}
