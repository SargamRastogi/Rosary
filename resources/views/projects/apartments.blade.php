@php
  $title = 'Apartments';
  $banner = '/images/apartments.jpg';

  $items = [

    [
      'title'  => 'Studio Refresh',
      'image'  => '/images/res-flat1.jpg',
      'desc'   => 'Space-saving millwork and light palette.',
      'details'=> [
        'Smart storage integrated with millwork',
        'Neutral tones to enhance spaciousness',
        'Functional zoning for compact layouts',
        'Daylight-enhancing reflective surfaces',
      ],
      'more' => 'Perfect for compact living, this studio design emphasizes functionality and aesthetics. With efficient millwork, optimized storage, and a bright palette, even small spaces feel open and inviting.'
    ],


    [
      'title'  => '2BHK Modern',
      'image'  => '/images/res-flat2.jpg',
      'desc'   => 'Open kitchen, muted tones, soft textures.',
      'details'=> [
        'Open kitchen with breakfast counter',
        'Soft textures and muted tones for warmth',
        'Space-efficient modular wardrobe systems',
        'Ambient lighting layered across spaces',
      ],
      'more' => 'Modern comfort meets elegant simplicity. This apartment design uses clean lines, soft tones, and open layouts to create a calm, refreshing space ideal for family living.'
    ],


    [
      'title'  => 'Penthouse Edge',
      'image'  => '/images/apartments.jpg',
      'desc'   => 'Stone feature walls and skyline views.',
      'details'=> [
        'Premium stone accent walls',
        'Panoramic balcony or terrace views',
        'Luxury natural-texture finishes',
        'Feature lighting highlighting material richness',
      ],
      'more' => 'Designed for luxury seekers, this penthouse blends natural stone finishes with panoramic skyline views. The atmosphere exudes class, elegance, and comfort.'
    ],


    [
      'title'  => 'Scandi Minimal',
      'image'  => '/images/res-flat2.jpg',
      'desc'   => 'Birch woods, white walls, and plants.',
      'details'=> [
        'Scandinavian-inspired muted palette',
        'Birch wood textures for warmth',
        'Indoor plants enhancing freshness',
        'Minimalist furniture with clean lines',
      ],
      'more' => 'A calming blend of nature and minimalism, this space is designed using soft woods, light tones, and simple forms that create an effortlessly modern lifestyle environment.'
    ],


    [
      'title'  => 'Warm Contemporary',
      'image'  => '/images/res-flat2.jpg',
      'desc'   => 'Cove lights, textiles, and matte finishes.',
      'details'=> [
        'Warm ambient cove lighting',
        'Rich fabric layering for cozy atmosphere',
        'Matte finishes for premium feel',
        'Well-balanced symmetry in layout',
      ],
      'more' => 'Focused on warmth and comfort, this apartment blends earthy tones with luxurious matte finishes and layered lighting to deliver a sophisticated yet homely ambiance.'
    ],


    [
      'title'  => 'Industrial Chic',
      'image'  => '/images/apartments.jpg',
      'desc'   => 'Exposed brick, metal accents, and leather.',
      'details'=> [
        'Exposed brick feature wall',
        'Dark metal and leather accents',
        'Minimalist industrial lighting fixtures',
        'Urban loft-style aesthetics',
      ],
      'more' => 'Inspired by warehouse lofts, this design combines raw textures, bold materials, and a dramatic color palette to create a stylish urban living feel.'
    ],

  ];
@endphp

@include('projects.partials.grid', compact('title','banner','items'))
