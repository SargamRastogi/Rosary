<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Civil Interior Projects') }}</title>

  <!-- Professional & polished – desktop‑first enterprise navigation -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <style>
    /* refined brand accent — subtle gold / warm grey */
    .brand-gold, .hover\:brand-gold:hover { color: #c7a45d; }
    .bg-brand-gold { background-color: #c7a45d; }
    .border-brand-gold { border-color: #c7a45d; }
    /* desktop search field – clean, visible, professional */
    .desktop-search {
      border: 1px solid #e2e8f0;
      background: #f9fafc;
      transition: all 0.15s ease;
      padding-left: 2.5rem;
    }
    .desktop-search:focus {
      border-color: #c7a45d;
      box-shadow: 0 0 0 3px rgba(199,164,93,0.08);
      background: white;
    }
  </style>
</head>

<body x-data="{ mobileMenuOpen:false }"
      class="font-sans bg-neutral-50 text-neutral-900 antialiased">

<!-- 🔹 TOP CONTACT BAR – refined, more spacious, desktop legible -->
<div class="hidden lg:block bg-neutral-900 text-white text-sm">
  <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center px-6 py-3 gap-2">

    <div class="flex flex-wrap items-center gap-6 justify-center sm:justify-start">
      <a href="tel:+91912345678" class="hover:text-[#c7a45d] flex items-center gap-2 transition">
        <i class="fa-solid fa-phone text-xs"></i> +91 12345 67890
      </a>
      <a href="mailto:info@rosaryprojects.com" class="hover:text-[#c7a45d] flex items-center gap-2 transition">
        <i class="fa-solid fa-envelope text-xs"></i> info@rosaryprojects.com
      </a>
    </div>

    

  </div>
</div>

<!-- 🔹 MAIN HEADER – elevated desktop navigation with SEARCH & SIGN IN as per spec -->
<header class="bg-white shadow-sm sticky top-0 z-50 border-b border-neutral-200">

  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

    <!-- Logo -->
    <a href="/" class="shrink-0">
      <img src="/images/logo.jpeg" alt="Rosary Projects" class="h-10 w-auto">
    </a>

    <!-- Center Navigation -->
   <!-- Center Navigation -->
<nav class="hidden lg:flex items-center gap-8 font-semibold text-sm tracking-wide text-neutral-800">

  <!-- Home -->
  <a href="/" class="hover:text-[#c7a45d] transition">Home</a>

  <!-- Residential -->
  <div class="relative group">
    <a href="{{ route('residential') }}"
       class="hover:text-[#c7a45d] transition flex items-center gap-1">
      Residential 
      <i class="fa-solid fa-chevron-down text-[10px]"></i>
    </a>

    <div class="absolute left-0 top-full mt-3 w-48 bg-white shadow-lg rounded-md 
                opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                transition-all duration-200 z-50 border">

      <a href="/projects/apartments"
         class="block px-4 py-2 text-sm hover:bg-neutral-100">
         Apartments
      </a>

      <a href="/projects/homes"
         class="block px-4 py-2 text-sm hover:bg-neutral-100">
         Homes
      </a>
    </div>
  </div>

  <!-- Commercial -->
  <div class="relative group">
    <a href="{{ route('commercial') }}"
       class="hover:text-[#c7a45d] transition flex items-center gap-1">
      Commercial 
      <i class="fa-solid fa-chevron-down text-[10px]"></i>
    </a>

    <div class="absolute left-0 top-full mt-3 w-48 bg-white shadow-lg rounded-md 
                opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                transition-all duration-200 z-50 border">

      <a href="/projects/factories"
         class="block px-4 py-2 text-sm hover:bg-neutral-100">
         Factory
      </a>

      <a href="/projects/workspace"
         class="block px-4 py-2 text-sm hover:bg-neutral-100">
         Workspace
      </a>
    </div>
  </div>

  <!-- Retail -->
  <div class="relative group">
    <a href="{{ route('retail') }}"
       class="hover:text-[#c7a45d] transition flex items-center gap-1">
      Retail 
      <i class="fa-solid fa-chevron-down text-[10px]"></i>
    </a>

    <div class="absolute left-0 top-full mt-3 w-48 bg-white shadow-lg rounded-md 
                opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                transition-all duration-200 z-50 border">

      <a href="/projects/showroom"
         class="block px-4 py-2 text-sm hover:bg-neutral-100">
         Showroom
      </a>
    </div>
  </div>

  <!-- Products -->
  <a href="/products" class="hover:text-[#c7a45d] transition">
    Products
  </a>

  <!-- Contact -->
  <a href="{{ route('contact') }}" class="hover:text-[#c7a45d] transition">
    Contact
  </a>

</nav>

    <!-- Right Section -->
    <div class="hidden lg:flex items-center gap-6">

      <!-- Search -->
      <div class="relative">
        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400 text-sm"></i>
        <input type="text"
               placeholder="Search for products..."
               class="w-72 bg-neutral-100 rounded-md pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#c7a45d]">
      </div>

      <!-- Icons Section (Myntra Style) -->
      <div class="flex items-center gap-8 text-neutral-700 text-xs font-medium">

        <!-- Profile -->
        <a href="#" class="flex flex-col items-center hover:text-[#c7a45d] transition">
          <i class="fa-regular fa-user text-lg"></i>
          <span class="mt-1">Profile</span>
        </a>

        <!-- Wishlist -->
        <a href="#" class="flex flex-col items-center hover:text-[#c7a45d] transition">
          <i class="fa-regular fa-heart text-lg"></i>
          <span class="mt-1">Wishlist</span>
        </a>

        <!-- Bag -->
        <a href="{{ route('cart.index') }}" class="flex flex-col items-center relative hover:text-[#c7a45d] transition">
          <i class="fa-solid fa-bag-shopping text-lg"></i>
          <span class="mt-1">Bag</span>

          <!-- Cart Count -->
          <span class="absolute -top-1 -right-3 bg-[#c7a45d] text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full">
            0
          </span>
        </a>

      </div>

    </div>

    <!-- Mobile Menu Button -->
    <button @click="mobileMenuOpen = true" class="lg:hidden text-2xl">
      <i class="fa-solid fa-bars"></i>
    </button>

  </div>
</header>
<!-- 🔹 MOBILE SLIDE MENU -->
<div 
    x-show="mobileMenuOpen"
    class="fixed inset-0 z-50 lg:hidden"
>

    <!-- Overlay -->
    <div 
        class="absolute inset-0 bg-black/60 backdrop-blur-sm"
        @click="mobileMenuOpen = false"
        x-transition.opacity
    ></div>

    <!-- Slide Panel -->
    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transform transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition ease-in duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="absolute right-0 top-0 h-full w-[80%] max-w-sm bg-white shadow-2xl flex flex-col"
    >

        <!-- Header -->
        <div class="flex items-center justify-between px-6 py-5 border-b">
            <h2 class="text-lg font-semibold">Menu</h2>

            <button 
                type="button"
                @click="mobileMenuOpen = false"
                class="text-2xl text-neutral-600 hover:text-black transition"
            >
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto px-6 py-6 space-y-6 text-base font-medium text-neutral-800">

            <a href="/" class="block hover:text-[#c7a45d] transition">
                Home
            </a>

            <!-- Residential -->
            <div x-data="{ open:false }" class="space-y-2">
                <div class="flex justify-between items-center">
                    <a href="{{ route('residential') }}" class="hover:text-[#c7a45d] transition">
                        Residential
                    </a>
                    <button @click="open = !open" type="button">
                        <i class="fa-solid fa-chevron-down text-xs transition"
                           :class="open ? 'rotate-180' : ''"></i>
                    </button>
                </div>

                <div x-show="open" x-transition class="ml-4 space-y-2 text-sm">
                    <a href="/projects/apartments" class="block hover:text-[#c7a45d]">Apartments</a>
                    <a href="/projects/homes" class="block hover:text-[#c7a45d]">Homes</a>
                </div>
            </div>

            <!-- Commercial -->
            <div x-data="{ open:false }" class="space-y-2">
                <div class="flex justify-between items-center">
                    <a href="{{ route('commercial') }}" class="hover:text-[#c7a45d] transition">
                        Commercial
                    </a>
                    <button @click="open = !open" type="button">
                        <i class="fa-solid fa-chevron-down text-xs transition"
                           :class="open ? 'rotate-180' : ''"></i>
                    </button>
                </div>

                <div x-show="open" x-transition class="ml-4 space-y-2 text-sm">
                    <a href="/projects/factories" class="block hover:text-[#c7a45d]">Factory</a>
                    <a href="/projects/workspace" class="block hover:text-[#c7a45d]">Workspace</a>
                </div>
            </div>

            <!-- Retail -->
            <div x-data="{ open:false }" class="space-y-2">
                <div class="flex justify-between items-center">
                    <a href="{{ route('retail') }}" class="hover:text-[#c7a45d] transition">
                        Retail
                    </a>
                    <button @click="open = !open" type="button">
                        <i class="fa-solid fa-chevron-down text-xs transition"
                           :class="open ? 'rotate-180' : ''"></i>
                    </button>
                </div>

                <div x-show="open" x-transition class="ml-4 space-y-2 text-sm">
                    <a href="/projects/showroom" class="block hover:text-[#c7a45d]">Showroom</a>
                </div>
            </div>

            <a href="/products" class="block hover:text-[#c7a45d] transition">
                Products
            </a>

            <a href="{{ route('contact') }}" class="block hover:text-[#c7a45d] transition">
                Contact
            </a>

            <!-- Sign In -->
            <a href="#"
               class="mt-6 block w-full text-center bg-neutral-900 text-white py-3 rounded-md text-sm font-semibold hover:bg-neutral-800 transition">
                Sign In
            </a>

        </div>

        <!-- Contact Section (Bottom) -->
        <div class="border-t px-6 py-5 space-y-3 text-sm text-neutral-600">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-phone text-[#c7a45d] text-sm"></i>
                <span>+91 12345 67890</span>
            </div>
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-envelope text-[#c7a45d] text-sm"></i>
                <span>info@rosaryprojects.com</span>
            </div>
        </div>

        <!-- Bottom Icons -->
        <div class="border-t py-4 flex justify-around text-xs text-neutral-700 bg-neutral-50">
            <a href="#" class="flex flex-col items-center hover:text-[#c7a45d] transition">
                <i class="fa-regular fa-user text-xl"></i>
                <span class="mt-1">Profile</span>
            </a>

            <a href="#" class="flex flex-col items-center hover:text-[#c7a45d] transition">
                <i class="fa-regular fa-heart text-xl"></i>
                <span class="mt-1">Wishlist</span>
            </a>

            <a href="{{ route('cart.index') }}"
               class="flex flex-col items-center relative hover:text-[#c7a45d] transition">
                <i class="fa-solid fa-bag-shopping text-xl"></i>
                <span class="mt-1">Bag</span>
                <span class="absolute -top-1 -right-3 bg-[#c7a45d] text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full">
                    0
                </span>
            </a>
        </div>

    </div>
</div>
<!-- MAIN CONTENT AREA -->
<main> @yield('content') </main>

@include('layouts.footer')

</body>
</html>