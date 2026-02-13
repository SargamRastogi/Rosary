@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
  <h1 class="text-2xl font-bold mb-8">Shop All Products</h1>
  <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
    @foreach($products as $product)
    <a href="{{ route('product.show', $product->slug) }}" class="group bg-white rounded-xl shadow hover:shadow-lg transition">
      <div class="aspect-square bg-gray-100 rounded-t-xl overflow-hidden">
        <img src="{{ optional($product->images->first())->path ?? '/images/sample.jpg' }}" alt="{{ $product->name }}" class="object-cover w-full h-full group-hover:scale-105 transition">
      </div>
      <div class="p-4">
        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
        <p class="text-amber-700 font-medium mt-1">₹{{ number_format($product->price, 2) }}</p>
      </div>
    </a>
    @endforeach
  </div>
  <div class="mt-10">{{ $products->links() }}</div>
</div>
@endsection
