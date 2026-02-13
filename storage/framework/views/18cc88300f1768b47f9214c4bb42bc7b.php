

<?php $__env->startSection('content'); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10 md:grid md:grid-cols-2 md:gap-8 lg:gap-10">

    
    <div class="gallery-wrapper mb-8 md:mb-0">
        <?php
            $allImages = collect([$product])->map(function($item){
                return ['image_path' => $item->image_path];
            })->merge($galleryImages);
        ?>

        
        <div class="block md:hidden overflow-x-auto whitespace-nowrap pb-4 -mx-4 px-4 scroll-smooth" id="mobileGallery">
            <div class="flex gap-3">
                <?php $__currentLoopData = $allImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $path = is_array($img) ? $img['image_path'] : $img->image_path;
                    ?>
                    <div class="flex-shrink-0 w-[85vw] max-w-[400px] rounded-lg overflow-hidden cursor-pointer mobile-gallery-cell" 
                         data-index="<?php echo e($index); ?>"
                         onclick="openMobileModal(<?php echo e($index); ?>)">
                        <img 
                            src="<?php echo e(asset('storage/' . $path)); ?>"
                            data-full="<?php echo e(asset('storage/' . $path)); ?>"
                            alt="<?php echo e($product->name); ?>"
                            class="w-full h-[450px] sm:h-[500px] object-cover"
                            loading="lazy"
                        >
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
            <div class="flex justify-center mt-4 gap-2">
                <?php $__currentLoopData = $allImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button class="mobile-dot w-2 h-2 rounded-full <?php echo e($index === 0 ? 'bg-[#BF955C]' : 'bg-gray-300'); ?>" 
                            data-index="<?php echo e($index); ?>"
                            onclick="scrollToImage(<?php echo e($index); ?>)"></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        
        <div class="hidden md:block">
            <div class="grid grid-cols-2 gap-4 max-w-[650px]" id="galleryGrid">
                <?php $__currentLoopData = $allImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $path = is_array($img) ? $img['image_path'] : $img->image_path;
                        $isFirst = $loop->first;
                    ?>

                    <div 
                        class="gallery-cell <?php echo e($isFirst ? 'col-span-2' : ''); ?> 
                               overflow-hidden rounded-lg cursor-pointer"
                        data-index="<?php echo e($index); ?>"
                        onclick="openModal(<?php echo e($index); ?>)"
                    >
                        <img 
                            src="<?php echo e(asset('storage/' . $path)); ?>"
                            data-full="<?php echo e(asset('storage/' . $path)); ?>"
                            alt="<?php echo e($product->name); ?>"
                            class="gallery-grid-img w-full 
                                   <?php echo e($isFirst ? 'h-[500px] lg:h-[700px]' : 'h-[250px] lg:h-[350px]'); ?> 
                                   object-cover 
                                   transition duration-500 hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    
    <div class="mt-6 md:mt-0">
        <h1 class="text-3xl sm:text-4xl font-semibold text-neutral-900">
            <?php echo e($product->name); ?>

        </h1>

        
        <div class="mt-4 sm:mt-6 flex flex-wrap items-center gap-3 sm:gap-4">
            <?php if($product->isOnSale()): ?>
                
                <span class="text-3xl sm:text-4xl font-semibold text-[#BF955C]">
                    ₹<?php echo e(number_format($product->sale_price)); ?>

                </span>
                
                <span class="text-lg sm:text-xl text-gray-400 line-through">
                    ₹<?php echo e(number_format($product->price)); ?>

                </span>
                
                <span class="text-xs sm:text-sm font-semibold text-green-600 bg-green-50 px-2 sm:px-3 py-1 rounded-full">
                    Save <?php echo e($product->discountPercentage()); ?>%
                </span>
            <?php else: ?>
                <span class="text-3xl sm:text-4xl font-bold text-neutral-900 tracking-tight">
                    ₹<?php echo e(number_format($product->price)); ?>

                </span>
            <?php endif; ?>
        </div>
       
        
        <?php if($product->short_description): ?>
            <div class="mt-4 sm:mt-5 text-neutral-600 leading-relaxed text-[15px] sm:text-[17px]">
                <?php echo $product->short_description; ?>

            </div>
        <?php endif; ?>

        
        <?php if($variants && $variants->count() > 0): ?>
            <div class="mt-6">
                <p class="font-semibold text-neutral-700 text-lg">Available Options</p>
                <div class="flex gap-2 sm:gap-3 mt-3 flex-wrap">
                    <?php $__currentLoopData = $variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($variant->name): ?>
                            <span class="px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm border rounded-full cursor-pointer hover:bg-[#f9e7c8] transition">
                                <?php echo e($variant->name); ?>

                            </span>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>

        
        <?php if($product->isInStock()): ?>
            <div class="flex items-center gap-4 mt-6 sm:mt-8">
                <div class="flex border rounded-lg overflow-hidden">
                    <button onclick="changeQty(-1)" class="px-3 sm:px-4 py-2 bg-gray-100 hover:bg-gray-200 transition">-</button>
                    <input type="text" id="qtyInput" value="1" class="w-12 text-center outline-none" readonly>
                    <button onclick="changeQty(1)" class="px-3 sm:px-4 py-2 bg-gray-100 hover:bg-gray-200 transition">+</button>
                </div>
                
            </div>
        <?php endif; ?>

        
<div class="flex items-center gap-2 sm:gap-5 mt-6 sm:mt-8">

    <button 
        class="flex-1 flex items-center justify-center gap-1 sm:gap-3
               px-3 sm:px-10
               py-2.5 sm:py-4
               text-sm sm:text-lg
               bg-[#BF955C] rounded-full text-white font-semibold shadow-lg
               hover:bg-[#b9914f] transition">

        <i class="fas fa-cart-plus text-sm sm:text-xl"></i> 
        <span>Add to Cart</span>
    </button>

    <button id="wishlistBtn"
        class="w-10 h-10 sm:w-14 sm:h-14
               border border-[#BF955C]
               flex items-center justify-center
               rounded-full transition-all duration-300 shadow-md">

        <i id="wishlistIcon"
           class="far fa-heart text-base sm:text-2xl text-[#b27b5e]"></i>
    </button>

</div>



        
        <div class="mt-10 sm:mt-14">
            <h3 class="font-semibold text-lg sm:text-xl text-neutral-900 border-b pb-3">PRODUCT DETAILS</h3>

            <div class="mt-4 text-neutral-700 space-y-2 text-sm sm:text-base">
                <?php if($product->material): ?>
                    <p><strong>Material:</strong> <?php echo e($product->material); ?></p>
                <?php endif; ?>
                <?php if($product->dimensions): ?>
                    <p><strong>Dimensions:</strong> <?php echo e($product->dimensions); ?></p>
                <?php endif; ?>
                <?php if($product->pack_content): ?>
                    <p><strong>Pack Content:</strong> <?php echo e($product->pack_content); ?></p>
                <?php endif; ?>
                <?php if($product->brand): ?>
                    <p><strong>Brand:</strong> <?php echo e($product->brand); ?></p>
                <?php endif; ?>
            </div>
                    
        <div class="mt-4">
            <?php if($product->isInStock()): ?>
                <span class="text-green-600 text-sm flex items-center gap-2">
                    <i class="fas fa-check-circle"></i> In Stock (<?php echo e($product->stock); ?> available)
                </span>
            <?php else: ?>
                <span class="text-red-600 text-sm flex items-center gap-2">
                    <i class="fas fa-times-circle"></i> Out of Stock
                </span>
            <?php endif; ?>
        </div>
            <?php if($product->description): ?>
                <div class="mt-6 text-neutral-700 leading-relaxed text-sm sm:text-base">
                    <?php echo $product->description; ?>

                </div>
            <?php endif; ?>
        </div>

        
        <div class="mt-10 sm:mt-12 border-t pt-6 sm:pt-8 space-y-4 sm:space-y-6">
            
            <div class="border-b pb-4">
                <button onclick="toggleSection('shipping')"
                        class="w-full flex justify-between items-center text-left font-semibold text-base sm:text-lg">
                    SHIPPING
                    <span class="text-xl sm:text-2xl">+</span>
                </button>

                <div id="shipping" class="hidden mt-3 sm:mt-4 text-gray-600 text-xs sm:text-sm leading-relaxed space-y-2 sm:space-y-3">
                    <p>• Complimentary shipping across India on all prepaid orders.</p>
                    <p>• Each order is carefully processed within 24–48 hours and dispatched within 2–4 business days.</p>
                    <p>• Real-time tracking details will be shared via SMS and email once your order is on its way.</p>
                </div>
            </div>

            
            <div class="border-b pb-4">
                <button onclick="toggleSection('returnPolicy')"
                        class="w-full flex justify-between items-center text-left font-semibold text-base sm:text-lg">
                    RETURN POLICY
                    <span class="text-xl sm:text-2xl">+</span>
                </button>

                <div id="returnPolicy" class="hidden mt-3 sm:mt-4 text-gray-600 text-xs sm:text-sm leading-relaxed space-y-2 sm:space-y-3">
                    <p>• Enjoy a seamless 7-day return or exchange experience from the date of delivery.</p>
                    <p>• Items must be unused, in original condition, and returned with complete packaging.</p>
                    <p>• Approved refunds are processed within 5–7 business days for a smooth and secure transaction.</p>
                </div>
            </div>
        </div>

        
        <div class="mt-8 sm:mt-10 bg-gray-100 p-5 sm:p-6 rounded-lg">
            <h4 class="font-semibold text-base sm:text-lg mb-2">Need help ordering?</h4>
            <p class="text-xs sm:text-sm text-gray-600 mb-4">
                Mon–Sat · 7:30 AM to 7:30 PM (IST)
            </p>

            <div class="space-y-3 text-xs sm:text-sm">
                <div class="flex items-center gap-3">
                    <i class="fab fa-whatsapp text-green-600 text-lg sm:text-xl"></i>
                    <div>
                        <p class="font-medium">Chat With Us On WhatsApp</p>
                        <p class="text-gray-600">+91 123456789</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <i class="far fa-envelope text-gray-700 text-lg sm:text-xl"></i>
                    <div>
                        <p class="font-medium">Write us at</p>
                        <p class="text-gray-600">info@rosary.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="imageModal"
     class="fixed inset-0 bg-black/95 hidden items-center justify-center z-50">

    <button id="closeModal"
            class="absolute top-4 sm:top-6 right-4 sm:right-8 text-white text-3xl sm:text-4xl z-50 hover:opacity-75">
        &times;
    </button>

    <button id="prevBtn"
            class="absolute left-2 sm:left-8 text-white text-4xl sm:text-5xl z-50 hover:opacity-75 bg-black/30 rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
        &#10094;
    </button>

    <button id="nextBtn"
            class="absolute right-2 sm:right-8 text-white text-4xl sm:text-5xl z-50 hover:opacity-75 bg-black/30 rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
        &#10095;
    </button>

    
    <div class="absolute bottom-4 left-4 sm:bottom-6 sm:left-6 text-white/70 text-xs sm:text-sm flex items-center gap-2 bg-black/50 px-3 py-2 rounded-full">
        <i class="fas fa-search-plus"></i>
        <span class="hidden sm:inline">Hover over image to zoom</span>
        <span class="sm:hidden">Double tap to zoom</span>
    </div>

    <div class="flex flex-col sm:flex-row w-full max-w-7xl px-4 sm:px-10 gap-4 sm:gap-8">
        
        <div class="hidden sm:flex flex-col gap-4 max-h-[80vh] overflow-y-auto pr-2">
            <?php $__currentLoopData = $allImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $path = is_array($img) ? $img['image_path'] : $img->image_path;
                ?>
                <img
                    src="<?php echo e(asset('storage/' . $path)); ?>"
                    class="modal-thumb w-16 lg:w-20 h-20 lg:h-24 object-cover rounded-md cursor-pointer border-2 transition-all duration-200 <?php echo e($index === 0 ? 'border-[#BF955C]' : 'border-transparent hover:border-white/50'); ?>"
                    data-index="<?php echo e($index); ?>"
                    onclick="changeModalImage(<?php echo e($index); ?>)"
                    loading="lazy"
                >
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        
        <div class="flex-1 flex justify-center items-center">
            <div class="relative overflow-hidden rounded-lg image-zoom-container" style="width: 100%; max-width: 800px;">
                <img id="modalImage"
                     src=""
                     class="w-full h-auto max-h-[50vh] sm:max-h-[80vh] object-contain transition-transform duration-300 ease-in-out image-zoom"
                     alt="Product zoom view"
                     loading="lazy">
            </div>
        </div>
        
        
        <div class="flex sm:hidden justify-center mt-4 gap-2">
            <?php $__currentLoopData = $allImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button class="modal-mobile-dot w-2 h-2 rounded-full <?php echo e($index === 0 ? 'bg-white' : 'bg-gray-500'); ?>" 
                        data-index="<?php echo e($index); ?>"
                        onclick="changeModalImage(<?php echo e($index); ?>)"></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        
        <div class="flex sm:hidden gap-2 overflow-x-auto pb-2 mt-2 px-1">
            <?php $__currentLoopData = $allImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $path = is_array($img) ? $img['image_path'] : $img->image_path;
                ?>
                <img
                    src="<?php echo e(asset('storage/' . $path)); ?>"
                    class="modal-mobile-thumb w-16 h-16 object-cover rounded-md cursor-pointer border-2 flex-shrink-0 <?php echo e($index === 0 ? 'border-[#BF955C]' : 'border-transparent'); ?>"
                    data-index="<?php echo e($index); ?>"
                    onclick="changeModalImage(<?php echo e($index); ?>)"
                    loading="lazy"
                >
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<style>
/* Hover Zoom Effect */
.image-zoom-container {
    overflow: hidden;
    cursor: crosshair;
}

.image-zoom {
    transition: transform 0.3s ease-out;
    transform-origin: center center;
}

.image-zoom-container:hover .image-zoom {
    transform: scale(2);
}

/* Mobile double tap zoom */
@media (max-width: 640px) {
    .image-zoom-container:active .image-zoom {
        transform: scale(2);
        transition: transform 0.2s ease;
    }
}

/* Smooth transitions */
.modal-thumb, .modal-mobile-thumb {
    transition: all 0.2s ease;
}

.modal-thumb:hover, .modal-mobile-thumb:hover {
    opacity: 0.8;
}

/* Hide scrollbar for clean look */
.overflow-y-auto {
    scrollbar-width: thin;
    scrollbar-color: rgba(255,255,255,0.3) transparent;
}

.overflow-y-auto::-webkit-scrollbar {
    width: 4px;
}

.overflow-y-auto::-webkit-scrollbar-track {
    background: transparent;
}

.overflow-y-auto::-webkit-scrollbar-thumb {
    background-color: rgba(255,255,255,0.3);
    border-radius: 20px;
}
</style>


<script>
// ================= GLOBAL VARIABLES =================
let images = [];
let currentIndex = 0;
let isZoomed = false;

// Initialize images array
document.addEventListener('DOMContentLoaded', function() {
    // Collect all images
    document.querySelectorAll("[data-full]").forEach((img) => {
        const fullSrc = img.getAttribute("data-full");
        if (fullSrc && !images.includes(fullSrc)) {
            images.push(fullSrc);
        }
    });
    
    // Initialize first image if available
    const modalImage = document.getElementById("modalImage");
    if (images.length > 0 && modalImage) {
        modalImage.src = images[0];
    }
    
    // Setup mobile double tap zoom
    setupMobileZoom();
});

// ================= MODAL FUNCTIONS =================
function openModal(index) {
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    
    if (!modal || !images[index]) return;
    
    currentIndex = index;
    if (modalImage) modalImage.src = images[currentIndex];
    
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
    
    // Update active states
    updateModalActiveStates(currentIndex);
}

function openMobileModal(index) {
    openModal(index);
}

function changeModalImage(index) {
    const modalImage = document.getElementById("modalImage");
    
    if (!images[index] || !modalImage) return;
    
    currentIndex = index;
    modalImage.src = images[currentIndex];
    
    // Update active states
    updateModalActiveStates(currentIndex);
    
    // Reset zoom state
    resetZoom();
}

function updateModalActiveStates(index) {
    // Update desktop thumbnails
    document.querySelectorAll(".modal-thumb").forEach((thumb, i) => {
        if (i === index) {
            thumb.classList.add("border-[#BF955C]");
            thumb.classList.remove("border-transparent", "hover:border-white/50");
        } else {
            thumb.classList.remove("border-[#BF955C]");
            thumb.classList.add("border-transparent", "hover:border-white/50");
        }
    });
    
    // Update mobile dots
    document.querySelectorAll(".modal-mobile-dot").forEach((dot, i) => {
        if (i === index) {
            dot.classList.add("bg-white");
            dot.classList.remove("bg-gray-500");
        } else {
            dot.classList.remove("bg-white");
            dot.classList.add("bg-gray-500");
        }
    });
    
    // Update mobile thumbnails
    document.querySelectorAll(".modal-mobile-thumb").forEach((thumb, i) => {
        if (i === index) {
            thumb.classList.add("border-[#BF955C]");
            thumb.classList.remove("border-transparent");
        } else {
            thumb.classList.remove("border-[#BF955C]");
            thumb.classList.add("border-transparent");
        }
    });
}

// ================= ZOOM FUNCTIONS =================
function setupMobileZoom() {
    const container = document.querySelector('.image-zoom-container');
    const image = document.getElementById('modalImage');
    
    if (!container || !image) return;
    
    let lastTap = 0;
    let timeout;
    
    // Double tap for mobile zoom
    container.addEventListener('touchend', function(e) {
        const currentTime = new Date().getTime();
        const tapLength = currentTime - lastTap;
        
        clearTimeout(timeout);
        
        if (tapLength < 500 && tapLength > 0) {
            // Double tap detected
            e.preventDefault();
            toggleZoom();
        }
        
        lastTap = currentTime;
        
        timeout = setTimeout(function() {
            clearTimeout(timeout);
        }, 500);
    });
    
    // Pinch to zoom for mobile
    let initialDistance = 0;
    
    container.addEventListener('touchstart', function(e) {
        if (e.touches.length === 2) {
            const dx = e.touches[0].clientX - e.touches[1].clientX;
            const dy = e.touches[0].clientY - e.touches[1].clientY;
            initialDistance = Math.sqrt(dx * dx + dy * dy);
        }
    });
    
    container.addEventListener('touchmove', function(e) {
        if (e.touches.length === 2) {
            e.preventDefault();
            
            const dx = e.touches[0].clientX - e.touches[1].clientX;
            const dy = e.touches[0].clientY - e.touches[1].clientY;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (initialDistance > 0) {
                if (distance > initialDistance * 1.2) {
                    // Pinch out - zoom in
                    image.style.transform = 'scale(2)';
                    isZoomed = true;
                } else if (distance < initialDistance * 0.8) {
                    // Pinch in - zoom out
                    image.style.transform = 'scale(1)';
                    isZoomed = false;
                }
            }
        }
    });
}

function toggleZoom() {
    const image = document.getElementById('modalImage');
    if (!image) return;
    
    if (isZoomed) {
        image.style.transform = 'scale(1)';
        isZoomed = false;
    } else {
        image.style.transform = 'scale(2)';
        isZoomed = true;
    }
}

function resetZoom() {
    const image = document.getElementById('modalImage');
    if (image) {
        image.style.transform = 'scale(1)';
        isZoomed = false;
    }
}

// ================= NAVIGATION =================
function nextImage() {
    if (images.length > 0) {
        currentIndex = (currentIndex + 1) % images.length;
        changeModalImage(currentIndex);
    }
}

function prevImage() {
    if (images.length > 0) {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        changeModalImage(currentIndex);
    }
}

// ================= EVENT LISTENERS =================
// Close modal
document.getElementById("closeModal").onclick = function() {
    const modal = document.getElementById("imageModal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
    document.body.style.overflow = '';
    resetZoom();
};

// Prev button
document.getElementById("prevBtn").onclick = function(e) {
    e.stopPropagation();
    prevImage();
};

// Next button
document.getElementById("nextBtn").onclick = function(e) {
    e.stopPropagation();
    nextImage();
};

// Keyboard navigation
document.addEventListener("keydown", function(e) {
    const modal = document.getElementById("imageModal");
    if (!modal.classList.contains('hidden')) {
        if (e.key === "Escape") {
            document.getElementById("closeModal").click();
        } else if (e.key === "ArrowLeft") {
            prevImage();
        } else if (e.key === "ArrowRight") {
            nextImage();
        }
    }
});

// Click outside to close
document.getElementById("imageModal").addEventListener('click', function(e) {
    if (e.target === this) {
        document.getElementById("closeModal").click();
    }
});

// ================= MOBILE GALLERY =================
function scrollToImage(index) {
    const mobileCells = document.querySelectorAll('.mobile-gallery-cell');
    if (mobileCells[index]) {
        mobileCells[index].scrollIntoView({
            behavior: 'smooth',
            block: 'nearest',
            inline: 'start'
        });
        
        // Update dots
        document.querySelectorAll('.mobile-dot').forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('bg-[#BF955C]');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.remove('bg-[#BF955C]');
                dot.classList.add('bg-gray-300');
            }
        });
    }
}

// Mobile scroll indicator
const mobileGallery = document.getElementById('mobileGallery');
if (mobileGallery) {
    mobileGallery.addEventListener('scroll', function() {
        const mobileCells = document.querySelectorAll('.mobile-gallery-cell');
        const scrollPosition = this.scrollLeft;
        const cellWidth = mobileCells[0]?.offsetWidth || 0;
        
        if (cellWidth > 0) {
            const newIndex = Math.round(scrollPosition / cellWidth);
            if (newIndex >= 0 && newIndex < mobileCells.length) {
                document.querySelectorAll('.mobile-dot').forEach((dot, i) => {
                    if (i === newIndex) {
                        dot.classList.add('bg-[#BF955C]');
                        dot.classList.remove('bg-gray-300');
                    } else {
                        dot.classList.remove('bg-[#BF955C]');
                        dot.classList.add('bg-gray-300');
                    }
                });
            }
        }
    });
}

// ================= TOGGLE SECTIONS =================
function toggleSection(id) {
    const el = document.getElementById(id);
    if (el) {
        el.classList.toggle("hidden");
    }
}

// ================= QUANTITY =================
function changeQty(delta) {
    const input = document.getElementById("qtyInput");
    if (input) {
        let current = parseInt(input.value) || 1;
        let maxStock = <?php echo e($product->stock ?? 1); ?>;
        let newValue = current + delta;

        if (newValue < 1) newValue = 1;
        if (newValue > maxStock) newValue = maxStock;

        input.value = newValue;
    }
}

// ================= WISHLIST =================
const wishlistBtn = document.getElementById("wishlistBtn");
const wishlistIcon = document.getElementById("wishlistIcon");

if (wishlistBtn && wishlistIcon) {
    wishlistBtn.addEventListener("click", function (e) {
        e.preventDefault();
        wishlistIcon.classList.toggle("far");
        wishlistIcon.classList.toggle("fas");

        if (wishlistIcon.classList.contains("fas")) {
            wishlistIcon.classList.add("text-red-500");
            wishlistBtn.classList.add("border-red-500");
        } else {
            wishlistIcon.classList.remove("text-red-500");
            wishlistBtn.classList.remove("border-red-500");
        }
    });
}

// ================= TOUCH SWIPE FOR MOBILE =================
let touchstartX = 0;
let touchendX = 0;

const modal = document.getElementById("imageModal");

modal.addEventListener("touchstart", function(e) {
    touchstartX = e.changedTouches[0].screenX;
});

modal.addEventListener("touchend", function(e) {
    touchendX = e.changedTouches[0].screenX;
    handleSwipe();
});

function handleSwipe() {
    const swipeThreshold = 50;
    if (touchendX < touchstartX - swipeThreshold) {
        nextImage();
    }
    if (touchendX > touchstartX + swipeThreshold) {
        prevImage();
    }
}

// ================= RESET ZOOM ON WINDOW RESIZE =================
window.addEventListener('resize', function() {
    resetZoom();
});

// ================= PREVENT CONTEXT MENU ON IMAGES =================
document.addEventListener('contextmenu', function(e) {
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
    }
});
</script>


<?php $__env->startPush('head'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\rosary\resources\views/products/show.blade.php ENDPATH**/ ?>