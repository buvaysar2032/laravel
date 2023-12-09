<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('Order.index', compact('orders'));
    }

    public function edit(Order $order)
    {
        return view('Order.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $order->update($request->all());

        if ($order->status == "completed") {
            $order->delete();
        }

        return redirect()->route('orders.index')->with('warning', 'Order updated successfully!');
    }

    public function show(Order $order)
    {
        return view('Order.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('danger', 'Order deleted successfully!');

    }

}
