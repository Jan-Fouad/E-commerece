<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;

use function PHPUnit\Framework\returnSelf;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('products')->get(); // جلب الطلبات مع المنتجات
        return view('admin.orders.index', compact('orders'));
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreOrderRequest $request)
    // {
    //     $data=$request->validated();
    //     Order::create($data);
    //     return view('front.index')->with('success','orderd successfully');

    // }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $orders = Order::with('products')->get();
        return view('admin.orders.show',get_defined_vars());    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
