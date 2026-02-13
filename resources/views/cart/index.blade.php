@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
  <h1 class="text-2xl font-semibold mb-6">Your Cart</h1>
  @if(($cart->items ?? collect())->isEmpty())
    <p>Your cart is empty.</p>
  @else
    @php $subtotal = 0; @endphp
    <div class="space-y-4">
      @foreach($cart->items as $item)
        @php $line = $item->quantity * $item->unit_price; $subtotal += $line; @endphp
        <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-sm">
          <div>
            <div class="font-semibold">{{ $item->variant->product->name }}</div>
            <div class="text-sm text-neutral-500">Qty: {{ $item->quantity }}</div>
          </div>
          <div>₹{{ number_format($line, 2) }}</div>
        </div>
      @endforeach
    </div>

    <div class="mt-8 text-right space-y-2">
      <div class="text-lg">Subtotal: <b>₹{{ number_format($subtotal, 2) }}</b></div>
      <a href="{{ route('checkout.index') }}" class="px-6 py-3 bg-amber-600 text-white rounded-xl hover:bg-amber-700 inline-block">
        Proceed to Checkout
      </a>
    </div>
  @endif
</div>
@endsection
