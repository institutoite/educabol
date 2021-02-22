<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Helpers\Uploader;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'file' => 'required',
        ]);

        $order = new Order();
        $order->order_number = uniqid('OrderNumber-');
        $order->user_id = auth()->id();
        if ($request->hasFile("file")) {
            $file = Uploader::uploadFile("file", "receipts");
        }
        $order->picture = $file;
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();
        $order->total_amount = \Cart::session(auth()->id())->getTotal();
        $order->save();

        $cartItems = \Cart::session(auth()->id())->getContent();
        foreach($cartItems as $item) {
            
            $order->items()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]);
        }

        \Cart::clear();

        return view('cart.receipt',compact('order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
