<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class Product extends Model
{
    protected $fillable = [

        // Basic Info
        'category_id',
        'subcategory_id',
        'name',
        'slug',
        'sku',
        'price',
        'sale_price',
        'short_description',
        'description',
        'image_path',
        'is_active',

        // Inventory
        'stock',
        'manage_stock',
        'low_stock_alert',

        // Product Details
        'material',
        'dimensions',
        'weight',
        'color',
        'brand',
        'pack_content',

        // SEO
        'meta_title',
        'meta_description',

        // Product Flags
        'is_featured',
        'is_best_seller',

        // Ratings
        'average_rating',
        'review_count',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function mainImage()
    {
        return $this->hasOne(ProductImage::class)->orderBy('sort_order');
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Methods (Optional but Recommended)
    |--------------------------------------------------------------------------
    */

    // Check if product is on sale
    public function isOnSale(): bool
    {
        return $this->sale_price && $this->sale_price < $this->price;
    }

    // Calculate discount percentage
    public function discountPercentage(): ?int
    {
        if ($this->isOnSale()) {
            return round((($this->price - $this->sale_price) / $this->price) * 100);
        }

        return null;
    }

    // Check stock availability
    public function isInStock(): bool
    {
        return !$this->manage_stock || $this->stock > 0;
    }
}