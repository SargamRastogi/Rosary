@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-12">
  <h1 class="text-2xl font-semibold mb-6">Checkout</h1>
  <form method="POST" action="{{ route('checkout.process') }}" class="space-y-4">
    @csrf
    <div class="grid md:grid-cols-2 gap-4">
      <input name="name" placeholder="Full Name" class="border px-3 py-2 rounded-lg w-full">
      <input name="phone" placeholder="Phone Number" class="border px-3 py-2 rounded-lg w-full">
      <input name="line1" placeholder="Address Line 1" class="border px-3 py-2 rounded-lg md:col-span-2">
      <input name="city" placeholder="City" class="border px-3 py-2 rounded-lg">
      <input name="postal_code" placeholder="Postal Code" class="border px-3 py-2 rounded-lg">
    </div>
    <button class="px-6 py-3 bg-amber-600 text-white rounded-xl hover:bg-amber-700">Place Order</button>
  </form>
</div>
@endsection
