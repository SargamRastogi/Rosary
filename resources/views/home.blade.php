@extends('layouts.app')

@section('content')

<!-- ================= HERO AUTO SLIDER ================= -->
<section class="relative w-full h-[80vh]">

    <div class="swiper heroSwiper h-full">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide relative h-full bg-cover bg-center"
                style="background-image: url('/images/slide-1.jpg')">
                <div class="absolute inset-0 bg-black/60"></div>
                <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">
                            Transforming Spaces with <span class="text-brand-gold">Modern Design</span>
                        </h1>
                        <p class="max-w-2xl mx-auto mb-6 text-lg">
                            Commercial, Residential, and Retail interiors — designed, built, and delivered.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="{{ route('residential') }}" class="bg-brand-gold text-white px-6 py-3 rounded-lg hover:bg-[#b89458]">Explore Projects</a>
                            <a href="{{ route('contact') }}" class="bg-white text-brand-gold px-6 py-3 rounded-lg hover:bg-brand-light">Book a Consultation</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ⭐ Corrected Slide 2 (Your Content FIXED) -->
            <!-- Slide 2 -->
<div class="swiper-slide relative h-full bg-cover bg-center"
     style="background-image: url('/images/interior.jpg')">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Decorative Shapes -->
    <div class="absolute top-0 left-0 w-40 h-40 bg-[#CEA56C] opacity-20 rounded-full blur-2xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#CEA56C] opacity-30 rounded-full blur-xl translate-x-1/3 translate-y-1/3"></div>

    <!-- Content Center -->
    <div class="relative z-10 w-full h-full flex items-center justify-center">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-center md:text-left">

            <!-- Image Box -->
            <div class="relative">
                <div class="w-full h-[260px] md:h-[420px] overflow-hidden rounded-3xl shadow-lg bg-white mx-auto">
                    <img src="/images/decor-p1.jpg" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Text -->
            <div class="text-white">
                <h5 class="text-[#CEA56C] uppercase tracking-[4px] mb-2 text-sm">Home Décor Products</h5>

                <h1 class="text-4xl md:text-5xl font-serif mb-5">
                    Premium Interior<br> Products & Style
                </h1>

                <p class="text-gray-200 mb-4">
                    Explore premium home décor, modern lighting, elegant furniture & more.
                </p>

                <a href="{{ route('products') }}"
                   class="inline-block px-8 py-3 bg-[#CEA56C] text-black font-semibold rounded-full shadow hover:bg-[#b9914f] transition">
                    Explore Products
                </a>

                <div class="mt-8 text-sm text-[#e6d6c6]">Follow us: @rosary</div>
            </div>
        </div>
    </div>
</div>



            <!-- Slide 3 -->
            <div class="swiper-slide relative h-full bg-cover bg-center"
                style="background-image: url('/images/workspace.jpg')">
                <div class="absolute inset-0 bg-black/60"></div>
                <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">
                            Smart <span class="text-brand-gold">Workspaces</span>
                        </h1>
                        <p class="max-w-2xl mx-auto mb-6 text-lg">
                            Modern commercial interior solutions for enhanced productivity.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="{{ route('commercial') }}" class="bg-brand-gold text-white px-6 py-3 rounded-lg hover:bg-[#b89458]">See Portfolio</a>
                            <a href="{{ route('contact') }}" class="bg-white text-brand-gold px-6 py-3 rounded-lg hover:bg-brand-light">Consult Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

</section>

<!-- ================= SWIPER CSS & JS ================= -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper(".heroSwiper", {
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        effect: "fade",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>




<!-- Explore Categories Section -->
<section class="bg-brand-light py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">
      One-stop shop for all things <span class="text-brand-gold">interiors</span>
    </h2>
    <p class="text-neutral-600 max-w-2xl mx-auto mb-10">
      Explore a range of categories we specialize in — from homes and offices to luxury retail interiors.
    </p>
 
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 mt-10">

    <!-- Card 1 -->
    <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
      <a href="{{ route('commercial') }}" class="block group">  
      <img 
            src="/images/interior-commercial.jpg"
            class="w-full h-[260px] object-cover"
        />
       
    <div class="p-7 text-center relative">

        <h3 class="text-xl font-semibold text-neutral-900 mb-2 group-hover:text-brand-gold transition">
            Commercial Interiors
        </h3>

        <p class="text-neutral-600 text-sm leading-relaxed mb-4">
            Stylish and functional interiors designed for modern workspaces.
        </p>

        <!-- Arrow Icon -->
        <div class="flex justify-center">
            <span class="text-brand-gold text-lg opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition">
                ➜
            </span>
        </div>

    </div>
</a>

    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
      <a href="{{ route('residential') }}" class="block group"> 
        <img 
            src="/images/interior-residential.jpg"
            class="w-full h-[260px] object-cover"
        />
        <div class="p-7 text-center">
             <h3 class="text-xl font-semibold text-neutral-900 mb-2 group-hover:text-brand-gold transition">Residential</h3>
            <p class="text-neutral-600 text-sm leading-relaxed">
                Elegant home interiors that blend comfort with modern design.
            </p>
            <div class="flex justify-center">
            <span class="text-brand-gold text-lg opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition">
                ➜
            </span>
        </div>
        </div>
        </a>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
      <a href="{{ route('retail') }}" class="block group"> 
        <img 
            src="/images/interior-retail.jpg"
            class="w-full h-[260px] object-cover"
        />
        <div class="p-7 text-center">
             <h3 class="text-xl font-semibold text-neutral-900 mb-2 group-hover:text-brand-gold transition">Retail</h3>
            <p class="text-neutral-600 text-sm leading-relaxed">
                High-impact retail environments crafted to elevate customer experience.
            </p>
            <div class="flex justify-center">
            <span class="text-brand-gold text-lg opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition">
                ➜
            </span>
        </div>
        </div>
    </div>
 </a>
</div>


<section class="py-12 bg-[#f9f7f4]">

    <!-- Section Title -->
    <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">
            Explore Our Stunning <span class="text-brand-gold">Spaces</span>
        </h2>
        <div class="w-24 h-[3px] bg-[#cea56c] mx-auto mt-3"></div>
    </div>

    <div class="max-w-7xl mx-auto p-0">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Factories -->
            <a href="{{ route('projects.factories') }}" class="lg:col-span-2 h-72 overflow-hidden relative group border border-black/20 block">
                <img src="/images/factories.jpg"
                     class="w-full h-full object-cover group-hover:scale-105 duration-700" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 duration-500"></div>
                <div class="absolute bottom-0 left-0 w-full text-center bg-black/40 py-2 text-white text-lg font-semibold">
                    Factories
                </div>
            </a>

            <!-- Workspace -->
            <a href="{{ route('projects.workspace') }}" class="h-72 overflow-hidden relative group border border-black/20 block">
                <img src="/images/workspace.jpg"
                     class="w-full h-full object-cover group-hover:scale-105 duration-700" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 duration-500"></div>
                <div class="absolute bottom-0 left-0 w-full text-center bg-black/40 py-2 text-white text-lg font-semibold">
                    Workspace
                </div>
            </a>

            <!-- Apartments -->
            <a href="{{ route('projects.apartments') }}" class="h-72 overflow-hidden relative group border border-black/20 block">
                <img src="/images/apartments.jpg"
                     class="w-full h-full object-cover group-hover:scale-105 duration-700" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 duration-500"></div>
                <div class="absolute bottom-0 left-0 w-full text-center bg-black/40 py-2 text-white text-lg font-semibold">
                    Apartments
                </div>
            </a>

            <!-- Homes -->
            <a href="{{ route('projects.homes') }}" class="lg:col-span-2 h-72 overflow-hidden relative group border border-black/20 block">
                <img src="/images/home.jpg"
                     class="w-full h-full object-cover group-hover:scale-105 duration-700" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 duration-500"></div>
                <div class="absolute bottom-0 left-0 w-full text-center bg-black/40 py-2 text-white text-lg font-semibold">
                    Homes
                </div>
            </a>

            <!-- Showrooms -->
            <a href="{{ route('projects.showroom') }}" class="lg:col-span-2 h-72  overflow-hidden relative group border border-black/20 block">
                <img src="/images/showroom.jpg"
                     class="w-full h-full object-cover group-hover:scale-105 duration-700" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 duration-500"></div>
                <div class="absolute bottom-0 left-0 w-full text-center bg-black/40 py-2 text-white text-lg font-semibold">
                    Showrooms
                </div>
            </a>

            <!-- Home Decor Products -->
           <a href="{{ route('products') }}" 
   class="h-72 overflow-hidden relative group border border-black/20 block">
    <img src="/images/products.jpg"
         class="w-full h-full object-cover group-hover:scale-105 duration-700" />
    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 duration-500"></div>
    <div class="absolute bottom-0 left-0 w-full text-center bg-black/40 py-2 text-white text-lg font-semibold">
        Home Decor Products
    </div>
</a>


        </div>

    </div>
</section>


</div>
<x-best-seller-products :subcategories="$subcategories" :products="$products" />

</div>
</section>
{{-- FAQ SECTION --}}
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">
                Frequently Asked <span class="text-[#CEA56C]">Questions</span>
            </h2>
            <p class="text-gray-500 mt-2">
                Find answers to common queries before placing your order.
            </p>
            <div class="w-24 h-[3px] bg-[#CEA56C] mx-auto mt-4"></div>
        </div>

        <!-- Accordion -->
        <div class="space-y-4" id="faqContainer">

    <!-- 1 -->
    <div class="border border-gray-200 rounded-lg p-4 md:p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-base md:text-lg text-neutral-800">Do you provide customized interior design solutions?</h3>
            <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
        </div>
        <p class="faq-answer text-gray-600 mt-3 hidden">
            Yes. We offer personalized interior design services tailored to your space, lifestyle, and aesthetic preferences. 
            Our team works closely with you from concept creation to final execution.
        </p>
    </div>

    <!-- 2 -->
    <div class="border border-gray-200 rounded-lg p-4 md:p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-base md:text-lg text-neutral-800">How long does a complete interior design project take?</h3>
            <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
        </div>
        <p class="faq-answer text-gray-600 mt-3 hidden">
            The timeline varies depending on the size of the project. 
            Residential rooms usually take 2–6 weeks, while full home or commercial projects may require 2–6 months including planning, execution, and finishing.
        </p>
    </div>

    <!-- 3 -->
    <div class="border border-gray-200 rounded-lg p-4 md:p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-base md:text-lg text-neutral-800">Can you match designs with my existing furniture or decor?</h3>
            <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
        </div>
        <p class="faq-answer text-gray-600 mt-3 hidden">
            Absolutely. We can redesign and enhance your space while keeping your existing furniture and décor elements. 
            Our designers ensure harmony in color, texture, and style.
        </p>
    </div>

    <!-- 4 -->
    <div class="border border-gray-200 rounded-lg p-4 md:p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-base md:text-lg text-neutral-800">Do you provide 3D visualizations before execution?</h3>
            <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
        </div>
        <p class="faq-answer text-gray-600 mt-3 hidden">
            Yes — we provide 3D models and mood boards so you can preview the final look before implementation. 
            This ensures clarity and avoids design uncertainties.
        </p>
    </div>

    <!-- 5 -->
    <div class="border border-gray-200 rounded-lg p-4 md:p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-base md:text-lg text-neutral-800">Do you offer both residential and commercial interior services?</h3>
            <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
        </div>
        <p class="faq-answer text-gray-600 mt-3 hidden">
            Yes, we design homes, offices, showrooms, cafés, and other commercial properties with functionality, creativity, and brand consistency in mind.
        </p>
    </div>

    <!-- 6 -->
    <div class="border border-gray-200 rounded-lg p-4 md:p-5 cursor-pointer transition hover:border-[#CEA56C]" onclick="toggleFAQ(this)">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-base md:text-lg text-neutral-800">Do you assist with materials, furniture, and decor procurement?</h3>
            <span class="toggle-icon text-[#CEA56C] text-xl font-bold">+</span>
        </div>
        <p class="faq-answer text-gray-600 mt-3 hidden">
            Yes — we source premium furniture, furnishings, lighting, and décor directly from trusted manufacturers and artisans, ensuring quality and cost benefits.
        </p>
    </div>

    

</div>

    </div>
</section>
<!-- MINI CONTACT FORM SECTION (HOME PAGE) -->
<section class="py-16 bg-[#f6f2eb]">
    <div class="max-w-4xl mx-auto px-6 text-center">
 <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">
                Have a <span class="text-[#CEA56C]">Project</span> in Mind?
            </h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
            Share your requirements and our team will get in touch to help you begin your dream interior transformation.
        </p>

        <!-- Form -->
        <form class="bg-white rounded-3xl shadow-lg p-8 md:p-10">

            <div class="grid md:grid-cols-2 gap-6">
                <input type="text" placeholder="Your Name"
                    class="border-b-2 border-gray-300 bg-transparent focus:border-[#CEA56C] text-gray-800 w-full py-3 outline-none">
                
                <input type="email" placeholder="Email Address"
                    class="border-b-2 border-gray-300 bg-transparent focus:border-[#CEA56C] text-gray-800 w-full py-3 outline-none">
            </div>

            <textarea placeholder="Your Message"
                class="border-b-2 border-gray-300 bg-transparent focus:border-[#CEA56C] text-gray-800 w-full py-3 mt-6 outline-none"
                rows="3"></textarea>

            <button type="submit"
                class="mt-8 px-10 py-3 bg-[#CEA56C] text-black font-semibold rounded-full shadow-md hover:bg-[#b9914f] transition">
                Send Message
            </button>
        </form>

        <!-- CTA Under Form -->
        <div class="mt-8 text-neutral-700">
            Prefer speaking directly?  
            <a href="tel:+919123456789" class="text-[#CEA56C] font-semibold hover:underline">
                Call Us Now →
            </a>
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

@endsection
