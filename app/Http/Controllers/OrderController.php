<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function checkout(Request $request)
    {


        $order = Order::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'quantity' => $request->input('quantity'),
            'address' => $request->input('address'),
            'total_price' => $request->quantity * 50000,
            'status' => 'Unpaid',
        ]);



        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name' => $request->name,
                'phone' => $request->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        dd($snapToken, $order);

        return view('checkout', compact('order', 'snapToken'));
    }
}
