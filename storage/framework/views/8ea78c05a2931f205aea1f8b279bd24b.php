

<?php $__env->startSection('content'); ?>


<section class="relative bg-[#e9ca9f] py-14 md:py-20 overflow-hidden">
    <div class="absolute top-0 left-0 w-40 h-40 bg-[#CEA56C] opacity-20 rounded-full blur-2xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#CEA56C] opacity-30 rounded-full blur-xl translate-x-1/3 translate-y-1/3"></div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center text-center md:text-left">
        <div class="relative">
            <div class="w-full h-[260px] sm:h-[350px] md:h-[420px] overflow-hidden rounded-3xl shadow-lg bg-white">
                <img src="/images/interior.jpg" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="flex flex-col items-center md:items-start">
            <h5 class="text-[#a67c52] uppercase tracking-[4px] mb-2 text-sm">Interior Design</h5>

            <h1 class="text-2xl sm:text-3xl md:text-5xl font-serif text-[#8c5631] mb-5">
                Modern Interior<br> Design Inspiration
            </h1>

            <p class="text-gray-600 mb-4">Explore stylish designs & curated premium home décor products.</p>

            <a href="products"
   class="inline-block px-8 py-3 bg-[#8C5631] text-[#ffffff] font-semibold rounded-full shadow hover:bg-[#D2AB6B] hover:text-white transition mt-4">
    Explore Products
</a>

            <div class="mt-8 text-sm text-[#8C5631]">Follow us: @rosary</div>
        </div>
    </div>
</section>



<div class="marquee-wrapper">
    <div class="marquee-track">
        <div class="marquee-content">
            ✨ PREMIUM HOME DECOR • MODERN FURNITURE COLLECTION • NEW ARRIVALS DAILY • TOP QUALITY GUARANTEED • BIG DISCOUNTS AVAILABLE • FAST & SAFE DELIVERY • LIMITED-TIME DEALS • ELEVATE YOUR SPACE WITH STYLE • SHOP NOW AND SAVE MORE •
        </div>

        <!-- Duplicate for smooth infinite scroll -->
        <div class="marquee-content">
            ✨ PREMIUM HOME DECOR • MODERN FURNITURE COLLECTION • NEW ARRIVALS DAILY • TOP QUALITY GUARANTEED • BIG DISCOUNTS AVAILABLE • FAST & SAFE DELIVERY • LIMITED-TIME DEALS • ELEVATE YOUR SPACE WITH STYLE • SHOP NOW AND SAVE MORE •
        </div>
    </div>
</div>

<style>
.marquee-wrapper {
    overflow: hidden;
    background: white;
    padding: 10px 0;
}

.marquee-track {
    display: flex;
    width: max-content;
    animation: marquee 20s linear infinite;
}

.marquee-content {
    white-space: nowrap;
    font-weight: 700;
    font-size: 16px;
    color: black;
    padding-right: 60px;
}

/* Smooth infinite scroll */
@keyframes marquee {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}
</style>



<section class="py-12 bg-[#f6f2eb]">
    <div class="max-w-7xl mx-auto px-6">

         <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">
            Shop by <span class="text-brand-gold">Category</span>
        </h2>
        <div class="w-24 h-[3px] bg-[#cea56c] mx-auto mt-3"></div>
    </div>

        <div id="subcategoryWrapper" class="flex gap-6 sm:gap-10 overflow-x-auto md:justify-center pb-4 no-scrollbar pt-5 px-2">
            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div onclick="loadProducts(<?php echo e($sub->id); ?>, '<?php echo e($sub->name); ?>', this)"
                    class="subcategory-card cursor-pointer flex flex-col items-center <?php echo e($index === 0 ? 'active-sub':''); ?>">
                    
                    <div class="subcategory-img">
                        <img src="<?php echo e(asset('storage/'.$sub->image_path)); ?>" class="w-full h-full object-cover rounded-full">
                    </div>

                    <p class="subcategory-label mt-4 text-center text-sm font-medium whitespace-nowrap <?php echo e($index === 0 ? 'active-underline':''); ?>"><?php echo e($sub->name); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>



<section id="productsSection" class="py-10 hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-8">
            <h2 id="selectedSubText" class="text-2xl font-bold text-[#5a3c2c]"></h2>

            <button id="subcategoryProductsMore"
                onclick="openSubcategoryPage()"
                class="hidden px-6 py-2 text-black rounded-full font-semibold shadow hover:bg-[#b9914f] transition">
                
            </button>
        </div>

       <div id="productGrid"
     class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
</div>

    </div>
</section>


<section class="py-10 md:py-14 bg-[#f6f2eb]">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 grid grid-cols-3 gap-4 md:gap-6">

        <!-- Large Left Banner -->
        <div class="relative col-span-2 rounded-2xl md:rounded-3xl overflow-hidden shadow-lg">

            <img src="/images/lamp-banner.jpg" 
                 class="w-full h-[180px] sm:h-[250px] md:h-[350px] object-cover">

            <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/70"></div>

            <div class="absolute inset-0 flex flex-col justify-center px-4 sm:px-8 text-white">

                <span class="text-white text-[10px] sm:text-sm font-semibold 
                             px-2 sm:px-3 py-1 rounded-full inline-block mb-2 sm:mb-4 
                             bg-white/20 backdrop-blur-sm w-fit">
                    Lights & Lamps
                </span>

                <h2 class="text-lg sm:text-3xl md:text-5xl font-extrabold leading-tight">
                    UPTO 65% OFF
                </h2>

                <button class="mt-2 sm:mt-4 px-3 sm:px-5 py-1.5 sm:py-2 
                               bg-[#CEA56C] text-black 
                               text-[11px] sm:text-base font-semibold 
                               rounded-full shadow hover:bg-[#b9914f] transition w-fit">
                    Shop Now
                </button>

            </div>
        </div>

        <!-- Right Side Small Banners -->
        <!-- Right Side Small Banners -->
<div class="flex flex-col gap-4 md:gap-6">

    <!-- Banner 1 -->
    <div class="relative rounded-2xl md:rounded-3xl overflow-hidden shadow-lg">
        <img src="/images/barware.jpg" 
             class="w-full h-[85px] sm:h-[120px] md:h-[165px] object-cover">

        <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>

        <div class="absolute inset-0 flex flex-col justify-center px-3 sm:px-6 text-white">

            <span class="text-[8px] sm:text-sm 
                         px-2 py-1 rounded-full font-semibold 
                         bg-white/20 backdrop-blur-sm w-fit">
                Barware
            </span>

            <p class="text-[10px] sm:text-xl font-bold mt-1 sm:mt-2">
                UPTO 55% OFF
            </p>

            <button class="mt-1 sm:mt-3 px-2 py-1 bg-[#CEA56C] text-black 
                           text-[8px] sm:text-sm font-semibold 
                           rounded-full shadow hover:bg-[#b9914f] transition w-fit">
                Shop Now
            </button>

        </div>
    </div>

    <!-- Banner 2 -->
    <div class="relative rounded-2xl md:rounded-3xl overflow-hidden shadow-lg">
        <img src="/images/cushion.jpg" 
             class="w-full h-[85px] sm:h-[120px] md:h-[165px] object-cover">

        <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>

        <div class="absolute inset-0 flex flex-col justify-center px-3 sm:px-6 text-white">

            <span class="text-[8px] sm:text-sm 
                         px-2 py-1 rounded-full font-semibold 
                         bg-white/20 backdrop-blur-sm w-fit">
                Cushion Covers
            </span>

            <p class="text-[10px] sm:text-xl font-bold mt-1 sm:mt-2">
                UPTO 65% OFF
            </p>

            <button class="mt-1 sm:mt-3 px-2 py-1 bg-[#CEA56C] text-black 
                           text-[8px] sm:text-sm font-semibold 
                           rounded-full shadow hover:bg-[#b9914f] transition w-fit">
                Shop Now
            </button>

        </div>
    </div>

</div>

    </div>
</section>


<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Heading -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">
                Discover Our <span class="text-brand-gold">Best Picks</span>
            </h2>
            <p class="text-gray-500 mt-2">
                Handpicked premium selections crafted to elevate your space.
            </p>
            <div class="w-24 h-[3px] bg-[#CEA56C] mx-auto mt-4"></div>
        </div>

 
<div id="productContainer" 
     class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="group bg-white rounded-2xl shadow 
            hover:shadow-xl overflow-hidden 
            transition-all duration-300 flex flex-col relative">

    <!-- IMAGE -->
    <a href="<?php echo e(route('product.show', $product->slug)); ?>"
       class="relative overflow-hidden bg-gray-100">

        <img src="<?php echo e(asset('storage/'.$product->image_path)); ?>"
             class="w-full h-44 sm:h-48 md:h-56 object-contain p-4 
                    group-hover:scale-105 transition duration-500">

        <?php $discount = rand(10,45); ?>
        <span class="absolute top-2 left-2 bg-[#CEA56C] text-[#5a3c2c] 
                     text-[10px] md:text-xs font-bold px-2 py-1 rounded">
            <?php echo e($discount); ?>% OFF
        </span>
    </a>

    <!-- DETAILS -->
    <div class="p-3 md:p-4 flex flex-col flex-grow">

        <a href="<?php echo e(route('product.show', $product->slug)); ?>">
            <h3 class="font-semibold text-sm md:text-lg truncate hover:text-[#CEA56C] transition">
                <?php echo e($product->name); ?>

            </h3>
        </a>

        <p class="text-xs md:text-sm text-gray-500 mb-2">
            <?php echo e($product->subcategory->name ?? ''); ?>

        </p>

        <div class="mt-auto">
            <span class="text-base md:text-xl font-bold text-[#CEA56C]">
                ₹<?php echo e($product->price); ?>

            </span>
        </div>
    </div>

    <!-- HOVER ADD TO CART (Bottom Slide Up) -->
    <div class="absolute bottom-0 left-0 w-full 
                translate-y-full group-hover:translate-y-0
                transition-transform duration-300">

        <button class="w-full bg-black text-white 
                       py-3 text-sm font-semibold
                       hover:bg-[#CEA56C] hover:text-black
                       transition">
            Add to Cart
        </button>

    </div>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

        
        <!-- VIEW MORE BUTTON -->
<div class="text-center mt-10">
    <a href="<?php echo e(route('products')); ?>"
       class="px-8 py-3 bg-[#CEA56C] text-black rounded-full text-lg font-medium hover:bg-[#b9914f] transition inline-block">
        View More
    </a>
</div>


    </div>
</section>





<section class="py-12 md:py-16 bg-white">
    <div class="max-w-5xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-10">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-neutral-900">
                Frequently Asked <span class="text-[#CEA56C]">Questions</span>
            </h2>
            <p class="text-gray-500 mt-2">
                Find answers to common queries before placing your order.
            </p>
            <div class="w-24 h-[3px] bg-[#CEA56C] mx-auto mt-4"></div>
        </div>

        <!-- Accordion -->
        <div class="space-y-4" id="faqContainer">

            <!-- FAQ Item -->
            <div class="border border-gray-200 rounded-lg p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-neutral-800">Do you offer delivery across India?</h3>
                    <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
                </div>
                <p class="faq-answer text-gray-600 mt-3 hidden">
                    Yes, we deliver to all major cities and regions across India with reliable and fast logistics support.
                </p>
            </div>

            <div class="border border-gray-200 rounded-lg p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-neutral-800">Can I return or exchange a product?</h3>
                    <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
                </div>
                <p class="faq-answer text-gray-600 mt-3 hidden">
                    Yes, we offer easy returns and exchanges within 7 days of delivery if the product is damaged or not as described.
                </p>
            </div>

            <div class="border border-gray-200 rounded-lg p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-neutral-800">Are the products handcrafted?</h3>
                    <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
                </div>
                <p class="faq-answer text-gray-600 mt-3 hidden">
                    Many of our pieces are handmade by skilled artisans, ensuring uniqueness and premium quality.
                </p>
            </div>

            <div class="border border-gray-200 rounded-lg p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-neutral-800">How long does delivery take?</h3>
                    <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
                </div>
                <p class="faq-answer text-gray-600 mt-3 hidden">
                    Standard delivery takes 5–10 business days depending on your location and order type.
                </p>
            </div>

        </div>
    </div>
</section>


<script>
function toggleFAQ(element) {
    const answer = element.querySelector('.faq-answer');
    const icon = element.querySelector('.toggle-icon');

    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.textContent = "−";
    } else {
        answer.classList.add('hidden');
        icon.textContent = "+";
    }
}
</script>


<script>
let activeSub = null;
let selectedSubcategoryId = null;

function openSubcategoryPage() {
    if (selectedSubcategoryId) {
        window.location.href = `/subcategory/${selectedSubcategoryId}`;
    }
}

function loadProducts(id, name, element) {
    selectedSubcategoryId = id;

    document.getElementById("productsSection").classList.remove("hidden");
    document.getElementById("subcategoryProductsMore").classList.remove("hidden");
    document.getElementById("selectedSubText").innerText = `${name} Products`;

    if (activeSub) {
        activeSub.classList.remove("active-sub");
        activeSub.querySelector(".subcategory-label").classList.remove("active-underline");
    }

    element.classList.add("active-sub");
    element.querySelector(".subcategory-label").classList.add("active-underline");
    activeSub = element;

    fetch(`/products/${id}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById("productGrid").innerHTML = data.map(p => `
                <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden cursor-pointer"
                    onclick="window.location.href='/product/${p.slug}'">
                    <img src="/storage/${p.image_path}" 
     class="w-full aspect-square object-cover rounded-t-xl">
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-lg">${p.name}</h3>
                        <p class="text-[#CEA56C] text-xl font-bold">₹${p.price}</p>
                    </div>
                </div>
            `).join('');
        });
}

document.addEventListener("DOMContentLoaded", function () {
    const firstSub = document.querySelector(".subcategory-card");
    if (firstSub) firstSub.click();
});
</script>


<style>
.subcategory-img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 3px solid #CEA56C;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .3s;
}
    @media (min-width:640px){
    .subcategory-img{
        width:100px;
        height:100px;
    }
}
@media (min-width:768px){
    .subcategory-img{
        width:120px;
        height:120px;
    }
}

.subcategory-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
}
.subcategory-card:hover .subcategory-img {
    transform: scale(1.08);
    border-color: #5a3c2c;
}


.active-sub .subcategory-img { border-color:#5a3c2c !important; transform:scale(1.05); }
.active-underline { border-bottom:2px solid #CEA56C; }
.no-scrollbar::-webkit-scrollbar { display:none; }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\rosary\resources\views/products/index.blade.php ENDPATH**/ ?>