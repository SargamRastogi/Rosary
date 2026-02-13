<section class="bg-[#0b0b0b] py-20 text-white">
    <div class="max-w-7xl mx-auto px-4 text-center">

        <h2 class="text-4xl font-bold mb-6">Best Seller Products</h2>
        <div class="w-20 h-[3px] bg-[#cea56c] mx-auto mb-10"></div>

        <!-- ✅ Subcategory Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button 
                onclick="filterProducts('all', event)" 
                class="filter-btn active-filter px-5 py-2 rounded-full bg-[#cea56c] text-black font-medium transition hover:bg-[#b9914f]">
                All
            </button>

            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button 
                    onclick="filterProducts('<?php echo e($subcategory->id); ?>', event)" 
                    class="filter-btn px-5 py-2 rounded-full border border-[#cea56c] hover:bg-[#cea56c] hover:text-black transition">
                    <?php echo e($subcategory->name); ?>

                </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- ✅ Product Grid -->
       
<div id="productGrid" 
     class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <a href="<?php echo e(route('product.show', $product->slug)); ?>"
           class="product-card <?php echo e($index >= 8 ? 'hidden extraProduct' : ''); ?> 
                  bg-white rounded-3xl overflow-hidden shadow-lg text-black 
                  block hover:shadow-2xl hover:-translate-y-1 transition duration-300"
           data-subcategory="<?php echo e($product->subcategory_id); ?>">

            <img src="<?php echo e(asset('storage/' . $product->image_path)); ?>" 
                 class="h-48 w-full object-cover" />

            <div class="p-4 text-center">
                <h3 class="font-semibold"><?php echo e($product->name); ?></h3>
                <p class="text-sm text-[#cea56c]">
                    <?php echo e($product->subcategory->name ?? ''); ?>

                </p>
                <p class="font-bold">₹<?php echo e($product->price); ?></p>
            </div>

        </a>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

        <?php if(count($products) > 8): ?>
            <button 
                id="viewMoreBtn"
                onclick="showMoreProducts()" 
                class="mt-10 px-6 py-2 bg-[#cea56c] text-black rounded-full font-semibold hover:bg-[#b9914f] transition">
                View More
            </button>
        <?php endif; ?>
    </div>

<!-- ✅ Show More Script -->
<script>
function showMoreProducts() {
    const extraItems = document.querySelectorAll('.extraProduct');
    extraItems.forEach(card => card.classList.remove('hidden'));
    document.getElementById('viewMoreBtn').style.display = 'none';
}
</script>

<!-- ✅ Filter Script -->
<script>
function filterProducts(subcategoryId, event) {
    const cards = document.querySelectorAll(".product-card");
    const buttons = document.querySelectorAll(".filter-btn");

    buttons.forEach(btn => btn.classList.remove("active-filter", "bg-[#cea56c]", "text-black"));
    event.target.classList.add("active-filter", "bg-[#cea56c]", "text-black");

    cards.forEach(card => {
        const subId = card.dataset.subcategory;
        if (subcategoryId === "all" || String(subId) === String(subcategoryId)) {
            card.classList.remove("hidden");
        } else {
            card.classList.add("hidden");
        }
    });
}
</script>

</section>
<?php /**PATH E:\rosary\resources\views/components/best-seller-products.blade.php ENDPATH**/ ?>