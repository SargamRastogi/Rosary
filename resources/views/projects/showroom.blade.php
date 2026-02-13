@php
  $title = 'Showrooms';
  $banner = '/images/slide-1.jpg';

  $items = [

    [
      'title'  => 'Fashion Flagship',
      'image'  => '/images/slide-3.jpg',
      'desc'   => 'Runway aisle, focal displays, and mirrored depth.',
      'details'=> [
        'Central runway-style layout for visual impact',
        'Statement mannequins with spotlighting',
        'Mirrored depth walls to enhance volume',
        'Premium racks and display podiums',
      ],
      'more' => 'A fashion-forward showroom designed to showcase apparel dramatically. The layout emphasizes movement, spotlight styling, and premium display sections to highlight new collections and seasonal themes.'
    ],


    [
      'title'  => 'Furniture Studio',
      'image'  => '/images/retail-s2.jpg',
      'desc'   => 'Vignettes with layered lighting and pathways.',
      'details'=> [
        'Room-style vignettes for natural product storytelling',
        'Ambient + accent lighting for depth and warmth',
        'Smooth visitor pathways and zoning',
        'Texture combinations for visual richness',
      ],
      'more' => 'A curated furniture studio setup where products are displayed in stylized vignettes, helping customers visualize them in real environments. Perfect balance of lighting, texture, and presentation.'
    ],


    [
      'title'  => 'Electronics Gallery',
      'image'  => '/images/retail-s3.jpg',
      'desc'   => 'Interactive bays, cable management, cool tones.',
      'details'=> [
        'Interactive demo counters and testers',
        'Hidden cable management for clean displays',
        'Cool-toned lighting for futuristic aesthetics',
        'Dedicated zones for gadgets and accessories',
      ],
      'more' => 'A sleek and tech-inspired showroom ideal for electronics and gadgets. Emphasizes clean layouts, smooth customer flow, and interactive touch-points that enhance product engagement.'
    ],


    [
      'title'  => 'Luxury Boutique',
      'image'  => '/images/slide-3.jpg',
      'desc'   => 'Dark walls, spotlighted shelving, brass details.',
      'details'=> [
        'Dark and dramatic wall finishes',
        'Spotlit shelving for visual contrast',
        'Handcrafted brass and gold accents',
        'High-end material palette for elite ambience',
      ],
      'more' => 'A premium boutique environment designed to highlight luxury products with a rich and immersive atmosphere. Deep tones, metallic accents, and focused lighting elevate the retail experience.'
    ],


    [
      'title'  => 'Automotive Studio',
      'image'  => '/images/retail-s2.jpg',
      'desc'   => 'High-gloss floors, halo lighting, brand wall.',
      'details'=> [
        'Showroom-grade high-gloss flooring',
        'Halo lighting around display zones',
        'Brand wall with signature identity',
        'Premium lounge for customer interaction',
      ],
      'more' => 'Designed for automobile display, the studio uses reflective materials and dramatic lighting to enhance vehicle presentations. Provides a luxurious ambiance for customer walk-ins and demos.'
    ],


    [
      'title'  => 'Appliance Arena',
      'image'  => '/images/retail-s3.jpg',
      'desc'   => 'Hands-on demo islands with power rails.',
      'details'=> [
        'Functional demo islands with charging/power rails',
        'Organized category-wise product zoning',
        'Bright balanced lighting for practical clarity',
        'Interactive & hands-on experience design',
      ],
      'more' => 'A practical yet aesthetic appliance showroom designed to let customers test, explore, and interact with products easily. Smart layout and accessible demo counters enhance buying comfort.'
    ],

  ];
@endphp

@include('projects.partials.grid', compact('title','banner','items'))
