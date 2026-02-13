<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {

            // Inventory
            $table->integer('stock')->default(0)->after('price');
            $table->boolean('manage_stock')->default(true)->after('stock');
            $table->integer('low_stock_alert')->default(5)->after('manage_stock');

            // Pricing
            $table->decimal('sale_price', 10, 2)->nullable()->after('price');

            // Product Details
            $table->string('material')->nullable()->after('description');
            $table->string('dimensions')->nullable()->after('material');
            $table->string('weight')->nullable()->after('dimensions');
            $table->string('color')->nullable()->after('weight');
            $table->string('brand')->nullable()->after('color');
            $table->string('pack_content')->nullable()->after('brand');

            // SEO
            $table->string('meta_title')->nullable()->after('pack_content');
            $table->text('meta_description')->nullable()->after('meta_title');

            // Product Flags
            $table->boolean('is_featured')->default(false)->after('is_active');
            $table->boolean('is_best_seller')->default(false)->after('is_featured');

            // Ratings (Performance Optimized)
            $table->float('average_rating')->default(0)->after('is_best_seller');
            $table->integer('review_count')->default(0)->after('average_rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'stock',
                'manage_stock',
                'low_stock_alert',
                'sale_price',
                'material',
                'dimensions',
                'weight',
                'color',
                'brand',
                'pack_content',
                'meta_title',
                'meta_description',
                'is_featured',
                'is_best_seller',
                'average_rating',
                'review_count',
            ]);
        });
    }
};