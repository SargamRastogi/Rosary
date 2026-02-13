<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function process(Request $request)
    {
        // You’ll add order creation & payment here later
        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}
