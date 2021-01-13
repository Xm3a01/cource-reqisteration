<?php

namespace App\Http\Controllers\Api;

use App\Order;
use Illuminate\Http\Request;
use App\Traits\ProductAmount;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    use ProductAmount;

    public function store($items)
    {
        $carts = (array)json_decode($items);
        foreach ($carts as $key => $cart) { //weltested letar
            $this->amount($cart->id , $cart->quantity);
              Order::create([
                'name' =>$cart->name,
                'totalPrice' => $cart->price,
                'quantity' => $cart->quantity,
             ]);
         }
         return response()->json(['code' => 200]);
    }
}
