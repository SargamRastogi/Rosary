<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();

        $products = Product::with('mainImage')
            ->where('is_active', 1)
            ->latest()
            ->paginate(12);

        return view('products.index', compact(
            'categories',
            'subcategories',
            'products'
        ));
    }

    public function show($slug)
    {
        $product = Product::with([
                'images',
                'variants' => function ($query) {
                    $query->where('is_active', 1);
                },
                'category',
                'subcategory'
            ])
            ->where('slug', $slug)
            ->where('is_active', 1)
            ->firstOrFail();

        // Gallery Images (from relationship)
        $galleryImages = $product->images()->orderBy('sort_order', 'ASC')->get();

        // Active Variants
        $variants = $product->variants;

        // Related Products
        $relatedProducts = Product::with('mainImage')
            ->where('subcategory_id', $product->subcategory_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', 1)
            ->take(4)
            ->get();

        return view('products.show', compact(
            'product',
            'galleryImages',
            'variants',
            'relatedProducts'
        ));
    }
}