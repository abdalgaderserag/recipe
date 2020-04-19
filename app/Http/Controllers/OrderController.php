<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Item;
use App\Meal;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Meal::all();
        return response()->json($data);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order($request->only([
//            'location', 'cost', 'time',
            'location', 'cost',
        ]));
        $order->save();
        try {
            foreach ($request->items as $item) {
//              TODO : the validation for item will be here
                $i = new Item();
                $i->quantity = $item['quantity'];
                $i->notes = $item['notes'];
                $i->meal_id = $item['meal_id'];
                $i->order_id = $order->id;
                $i->save();
            }
        } catch (\Exception $e) {
            $order->forceDelete();
        }

        return response()->json($order);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
