@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="relative h-[70vh] bg-cover bg-center" 
style="background-image: url('/images/commercial-banner.jpg');">
    <div class="absolute inset-0 bg-black/60"></div>
    
    <div class="relative z-10 flex flex-col justify-center items-center text-center h-full text-white px-6">
        <h1 class="text-4xl md:text-5xl font-bold">Commercial <span class="text-brand-gold">Interior</span> Solutions</h1>
        <p class="mt-4 max-w-2xl text-lg">
            Creating modern, functional, and efficient commercial spaces that boost productivity and style.
        </p>
    </div>
</section>


<!-- FACTORY SETUP SECTION -->
<section class="py-12 md:py-16 bg-[#f9f7f4]">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center px-4 sm:px-6">

        <!-- LEFT TEXT -->
         <div class="text-center md:text-left flex flex-col items-center md:items-start">
            <h3 class="text-4xl font-bold text-neutral-900 mb-4">Factory <span class="text-brand-gold">Setup</span></h3>

            <p class="text-neutral-600 text-sm sm:text-base md:text-lg leading-relaxed mb-4">
                Modern industrial workspaces crafted for efficiency and precision.
                Designed to handle heavy operations, improve workflow,
                and support high-performance manufacturing environments.
            </p>

            <p class="text-neutral-600 text-sm sm:text-base md:text-lg leading-relaxed mb-4">
                Our expert designers ensure durability, optimized space utilization,
                and seamless safety compliance for your production facilities.
            </p>

            <a href="{{ route('projects.factories') }}" class="inline-block px-6 py-3 mt-3 rounded-lg border border-[#cea56c] text-[#cea56c] hover:bg-[#cea56c] hover:text-white transition">
                View More →
            </a>
        </div>

        <!-- RIGHT SLIDER -->
        <div class="relative w-full overflow-hidden rounded-xl border-4 border-[#cea56c] shadow-xl">

            <div class="factoryTrack flex transition-transform duration-700 ease-in-out">
                <img src="/images/com-f1.jpg" class="w-full h-[380px] object-cover flex-shrink-0" />
                <img src="/images/com-f2.jpg" class="w-full h-[380px] object-cover flex-shrink-0" />
                <img src="/images/com-f3.jpg" class="w-full h-[380px] object-cover flex-shrink-0" />
            </div>

            <div class="factoryDots absolute bottom-4 w-full flex justify-center gap-3">
                <span class="dot w-3 h-3 bg-white border border-[#cea56c] rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white border border-[#cea56c] rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white border border-[#cea56c] rounded-full cursor-pointer"></span>
            </div>

        </div>
    </div>
</section>


<!-- WORKSPACE SECTION -->
<section class="py-12 md:py-16 bg-[#f9f7f4]">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center px-4 sm:px-6">

        <!-- TEXT (First on Mobile) -->
        <div class="order-1 md:order-2 text-center md:text-left">
            <h3 class="text-4xl font-bold text-neutral-900 mb-4">
                Workspace <span class="text-brand-gold">Design</span>
            </h3>

            <p class="text-neutral-600 text-sm sm:text-base md:text-lg leading-relaxed mb-4">
                Stunning, functional office layouts created to elevate productivity,
                comfort, and team collaboration while enhancing modern aesthetics.
            </p>

            <p class="text-neutral-600 text-sm sm:text-base md:text-lg leading-relaxed mb-4">
                From open-plan corporate environments to minimalist private cabins,
                our designs ensure ideal use of space, lighting, and ergonomics.
            </p>

            <a href="{{ route('projects.workspace') }}"
               class="inline-block px-6 py-3 mt-3 rounded-lg border border-[#cea56c] 
                      text-[#cea56c] hover:bg-[#cea56c] hover:text-white transition">
                View More →
            </a>
        </div>

        <!-- IMAGE (Second on Mobile) -->
        <div class="order-2 md:order-1 relative w-full overflow-hidden rounded-xl border-4 border-[#cea56c] shadow-xl">

            <div class="workspaceTrack flex transition-transform duration-700 ease-in-out">
                <img src="/images/com-w1.jpg" class="w-full h-[380px] object-cover" />
                <img src="/images/com-w2.jpg" class="w-full h-[380px] object-cover" />
                <img src="/images/com-w3.jpg" class="w-full h-[380px] object-cover" />
            </div>

            <div class="workspaceDots absolute bottom-4 w-full flex justify-center gap-3">
                <span class="dot w-3 h-3 bg-white border border-[#cea56c] rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white border border-[#cea56c] rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white border border-[#cea56c] rounded-full cursor-pointer"></span>
            </div>

        </div>

    </div>
</section>


<!-- JS SLIDER SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", () => {

    /* FACTORY SLIDER */
    let index = 0;
    const track = document.querySelector(".factoryTrack");
    const dots = document.querySelectorAll(".factoryDots .dot");
    const slideCount = dots.length;

    function moveSlide(n) {
        index = n;
        track.style.transform = `translateX(-${index * 100}%)`;
        dots.forEach(d => d.classList.remove("bg-[#cea56c]"));
        dots[index].classList.add("bg-[#cea56c]");
    }

    dots.forEach((dot, i) => {
        dot.addEventListener("click", () => moveSlide(i));
    });

    setInterval(() => {
        index = (index + 1) % slideCount;
        moveSlide(index);
    }, 3000);

    moveSlide(0);


    /* WORKSPACE SLIDER */
    let wIndex = 0;
    const wTrack = document.querySelector(".workspaceTrack");
    const wDots = document.querySelectorAll(".workspaceDots .dot");
    const wCount = wDots.length;

    function showWS(n) {
        wIndex = n;
        wTrack.style.transform = `translateX(-${wIndex * 100}%)`;
        wDots.forEach(d => d.classList.remove("bg-[#cea56c]"));
        wDots[wIndex].classList.add("bg-[#cea56c]");
    }

    wDots.forEach((dot, i) => {
        dot.addEventListener("click", () => showWS(i));
    });

    setInterval(() => {
        wIndex = (wIndex + 1) % wCount;
        showWS(wIndex);
    }, 3000);

    showWS(0);
});
</script>


<!-- PROCESS HEADING -->
<div class="text-center py-12">
    <h2 class="text-4xl font-bold text-neutral-900">
        Our Simple <span class="text-[#CEA56C]">Process</span>
    </h2>
    <div class="mt-3 mx-auto w-24 h-[3px] bg-[#CEA56C]"></div>
       <p class="text-neutral-600 mt-3">From conversation to handover—clear steps, no stress.</p>
</div>


<!-- PROCESS STEPS SECTION -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="relative grid grid-cols-1 md:grid-cols-3 gap-8">

      <span class="hidden md:block absolute left-0 right-0 top-[52px] mx-20 h-[2px] bg-[#CEA56C]/20"></span>

      <!-- Step 1 -->
      <div class="relative bg-neutral-50 border border-neutral-200 rounded-2xl p-6 text-center hover:shadow-lg transition">
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 text-xs font-semibold rounded-full bg-[#CEA56C] text-white">
          Step 1
        </span>

        <div class="mx-auto mb-4 w-14 h-14 rounded-full bg-[#CEA56C]/10 border border-[#CEA56C]/30 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CEA56C" stroke-width="1.8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M3 10h18M5 20h14a2 2 0 0 0 2-2v-8H3v8a2 2 0 0 0 2 2Z"/>
          </svg>
        </div>

        <h3 class="text-lg font-semibold">Book Your Consultation</h3>
        <p class="text-sm text-neutral-600 mt-2">Tell us about your space and goals online or onsite.</p>
      </div>


      <!-- Step 2 -->
      <div class="relative bg-neutral-50 border border-neutral-200 rounded-2xl p-6 text-center hover:shadow-lg transition">
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 text-xs font-semibold rounded-full bg-[#CEA56C] text-white">
          Step 2
        </span>

        <div class="mx-auto mb-4 w-14 h-14 rounded-full bg-[#CEA56C]/10 border border-[#CEA56C]/30 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CEA56C" stroke-width="1.8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5h2m-7 7h12M5 19h14M7 5h.01M17 5h.01"/>
          </svg>
        </div>

        <h3 class="text-lg font-semibold">Design & Proposal</h3>
        <p class="text-sm text-neutral-600 mt-2">We craft layouts, moodboards & a clear quote for your approval.</p>
      </div>


      <!-- Step 3 -->
      <div class="relative bg-neutral-50 border border-neutral-200 rounded-2xl p-6 text-center hover:shadow-lg transition">
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 text-xs font-semibold rounded-full bg-[#CEA56C] text-white">
          Step 3
        </span>

        <div class="mx-auto mb-4 w-14 h-14 rounded-full bg-[#CEA56C]/10 border border-[#CEA56C]/30 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#CEA56C" stroke-width="1.8">
            <path stroke-linecap="round" stroke-linejoin="round" d="m3 7 9 4 9-4-9-4-9 4Zm0 5 9 4 9-4M3 17l9 4 9-4"/>
          </svg>
        </div>

        <h3 class="text-lg font-semibold">Build & Handover</h3>
        <p class="text-sm text-neutral-600 mt-2">Execution with quality control, timeline tracking & clean handover.</p>
      </div>

    </div>
  </div>
</section>




<!-- BOOK CONSULTATION HEADING -->
<div class="text-center py-12">
    <h2 class="text-4xl font-bold text-neutral-900">
        Book Your <span class="text-[#CEA56C]">Consultation</span>
    </h2>
    <div class="mt-3 mx-auto w-24 h-[3px] bg-[#CEA56C]"></div>
</div>


<!-- BOOK CONSULTATION SECTION -->
<section class="py-14 md:py-20 text-center relative 
                bg-gradient-to-r from-[#d4c7b5] via-[#e6d7c3] to-[#c8a97e] overflow-hidden">

    <!-- Decorative Stars (Hide on Mobile for Clean Look) -->
    <div class="hidden md:block absolute top-10 left-10 opacity-20 text-white text-5xl">✦</div>
    <div class="hidden md:block absolute bottom-10 right-10 opacity-20 text-white text-5xl">✦</div>

    <div class="max-w-2xl mx-auto px-4">

        <p class="text-neutral-800 text-sm sm:text-base md:text-lg 
                  mb-6 md:mb-8 leading-relaxed">
            Let’s plan your next commercial interior project with expert guidance 
            and a personalized approach.
        </p>

        <a href="{{ route('contact') }}"
           class="inline-flex items-center justify-center
                  px-6 sm:px-8 py-2 sm:py-3
                  bg-[#CEA56C] hover:bg-[#b9914f]
                  text-white rounded-xl
                  text-sm sm:text-lg
                  shadow-md transition duration-300">
            Book Now
            <span class="ml-2">➜</span>
        </a>

    </div>
</section>

@endsection
