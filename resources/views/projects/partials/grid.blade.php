@props([
  'title' => 'Projects',
  'banner' => '/images/slide-1.jpg',
  'items' => [], 
])

@extends('layouts.app')

@section('content')




{{-- HERO --}}
<section class="relative h-[50vh] bg-cover bg-center" style="background-image:url('{{ $banner }}')">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10 h-full flex flex-col items-center justify-center text-center text-white px-6">
    <h1 class="text-4xl md:text-5xl font-bold">{{ $title }}</h1>
    <p class="mt-3 max-w-2xl text-lg opacity-90">Hand-picked projects showcasing design, detail and functionality.</p>
  </div>
</section>

{{-- MODERN FILTER BAR (RESPONSIVE) --}}
<div class="w-full sticky top-[60px] md:top-[70px] z-40 bg-black/95 backdrop-blur-lg shadow-md">

    <div class="max-w-7xl mx-auto">

        <!-- Scrollable container for mobile -->
        <div class="flex md:justify-center gap-3 md:gap-4 
                    py-3 md:py-4 
                    px-4 md:px-6
                    overflow-x-auto 
                    scrollbar-hide">

            <a href="{{ route('projects.factories') }}"
               class="filter-btn whitespace-nowrap text-sm md:text-base px-4 md:px-6 py-2 md:py-2.5 {{ $title=='Factories' ? 'active' : '' }}">
                Factories
            </a>

            <a href="{{ route('projects.workspace') }}"
               class="filter-btn whitespace-nowrap text-sm md:text-base px-4 md:px-6 py-2 md:py-2.5 {{ $title=='Workspace' ? 'active' : '' }}">
                Workspace
            </a>

            <a href="{{ route('projects.showroom') }}"
               class="filter-btn whitespace-nowrap text-sm md:text-base px-4 md:px-6 py-2 md:py-2.5 {{ $title=='Showrooms' ? 'active' : '' }}">
                Showrooms
            </a>

            <a href="{{ route('projects.apartments') }}"
               class="filter-btn whitespace-nowrap text-sm md:text-base px-4 md:px-6 py-2 md:py-2.5 {{ $title=='Apartments' ? 'active' : '' }}">
                Apartments
            </a>

            <a href="{{ route('projects.homes') }}"
               class="filter-btn whitespace-nowrap text-sm md:text-base px-4 md:px-6 py-2 md:py-2.5 {{ $title=='Homes' ? 'active' : '' }}">
                Homes
            </a>

        </div>
    </div>
</div>


{{-- PROJECT GRID --}}
<section class="py-14 bg-[#f9f7f4]">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">

      @foreach($items as $i => $p)
        <div class="bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition cursor-pointer flex flex-col h-full"
             onclick="openProjectModal({{ $i }})">

          <img src="{{ $p['image'] }}" class="w-full h-56 object-cover" alt="{{ $p['title'] }}">

          <div class="p-4 flex flex-col flex-grow">
            <h3 class="font-semibold text-lg">{{ $p['title'] }}</h3>

            <p class="text-sm text-neutral-600 mt-1 flex-grow line-clamp-2">
              {{ $p['desc'] }}
            </p>

            {{-- BUTTONS --}}
            <div class="flex gap-3 mt-4">
              <button 
                type="button"
                onclick="event.stopPropagation(); openProjectModal({{ $i }})"
                class="flex-1 px-4 py-2 h-11 border border-[#cea56c] text-[#cea56c] rounded-lg font-medium hover:bg-[#cea56c] hover:text-white transition">
                View More
              </button>

              <a href="{{ route('contact') }}"
                onclick="event.stopPropagation();"
                class="flex-1 px-4 py-2 h-11 bg-[#cea56c] text-white rounded-lg font-medium text-center hover:bg-[#b9914f] transition flex items-center justify-center">
                Book Now
              </a>
            </div>

          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>

{{-- MODALS --}}
@foreach($items as $i => $p)
  <div id="projModal{{ $i }}" class="fixed inset-0 hidden z-50">
    
    {{-- BACKDROP --}}
    <div class="absolute inset-0 bg-black/70" onclick="closeProjectModal({{ $i }})"></div>

    {{-- MODAL CONTENT WRAPPER --}}
    <div class="relative z-10 h-full flex items-center justify-center px-4 py-10">

      <div class="bg-white w-full max-w-4xl max-h-[90vh] rounded-2xl overflow-y-auto shadow-2xl">

        {{-- IMAGE --}}
        <div class="relative">
          <img src="{{ $p['image'] }}" class="w-full h-[350px] md:h-[420px] object-cover" alt="{{ $p['title'] }}">

          <button class="absolute top-3 right-3 text-white bg-black/70 hover:bg-black rounded-full w-10 h-10 text-2xl leading-10"
                  onclick="closeProjectModal({{ $i }})">×</button>
        </div>

        {{-- CONTENT --}}
        <div class="p-6">
          <h3 class="text-3xl font-bold mb-3">{{ $p['title'] }}</h3>

          <p class="text-neutral-700 leading-relaxed text-lg mb-4">
               {{ $p['more'] ?? $p['desc'] }}
         </p>


          {{-- Additional Details --}}
          @if(isset($p['details']) && is_array($p['details']))
            <ul class="list-disc ml-6 space-y-2 text-neutral-700 text-md">
              @foreach($p['details'] as $detail)
                <li>{{ $detail }}</li>
              @endforeach
            </ul>
          @endif

        </div>

      </div>

    </div>

  </div>
@endforeach


{{-- JS --}}
<script>
  function openProjectModal(i) {
    document.getElementById('projModal' + i).classList.remove('hidden')
  }

  function closeProjectModal(i) {
    document.getElementById('projModal' + i).classList.add('hidden')
  }
</script>



<style>
  .filter-btn {
    padding: 10px 22px;
    border-radius: 40px;
    font-weight: 500;
    font-size: 15px;
     background: rgba(206,165,108,0.15);
    border: 1px solid #cea56c;
    color: #815e2fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    backdrop-filter: blur(8px);
    transition: all 0.3s ease;
  }

  .filter-btn:hover {
    background: rgba(206,165,108,0.15);
    border-color: #c69f69ff;
    color: #b18449;
    transform: translateY(-2px);
  }

  .filter-btn.active {
    background: #cea56c;
    color: white !important;
    border-color: #cea56c;
    box-shadow: 0 4px 12px rgba(206,165,108,0.4);
  }
  .scrollbar-hide::-webkit-scrollbar {
  display: none;
}
.scrollbar-hide {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
</style>



@endsection
