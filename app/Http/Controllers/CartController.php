<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $cart->load('items.variant.product');
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $cart->items()->create([
            'product_variant_id' => $request->variant_id,
            'quantity' => $request->quantity,
            'unit_price' => 1000, // Replace with actual product price
        ]);
        return redirect()->route('cart.index')->with('success', 'Item added to cart!');
    }
}
