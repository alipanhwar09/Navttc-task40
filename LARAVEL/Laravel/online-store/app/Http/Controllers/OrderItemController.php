<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::all();
        return view('order-items.index', compact('orderItems'));
    }

    public function create()
    {
        return view('order-items.create');
    }

    public function store(Request $request)
    {
        // Validation logic
        $orderItem = OrderItem::create($request->all());
        return redirect()->route('order-items.index')->with('success', 'Order item created successfully.');
    }

    public function show(OrderItem $orderItem)
    {
        return view('order-items.show', compact('orderItem'));
    }

    public function edit(OrderItem $orderItem)
    {
        return view('order-items.edit', compact('orderItem'));
    }

    public function update(Request $request, OrderItem $orderItem)
    {
        // Validation logic
        $orderItem->update($request->all());
        return redirect()->route('order-items.index')->with('success', 'Order item updated successfully.');
    }

    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('order-items.index')->with('success', 'Order item deleted successfully.');
    }
}
