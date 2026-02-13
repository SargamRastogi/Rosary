<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;  // ✅ Add this line
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)->get();
        $subcategories = Subcategory::where('is_active', true)->get();
        $products = Product::with(['category', 'subcategory'])
            ->where('is_active', true)
            ->get();

        return view('home', compact('categories', 'subcategories', 'products'));
    }
}
