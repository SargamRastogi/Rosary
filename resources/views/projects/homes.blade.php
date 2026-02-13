@php
  $title = 'Homes';
  $banner = '/images/home.jpg';

  $items = [

    [
      'title'  => 'Modern Villa',
      'image'  => '/images/home.jpg',
      'desc'   => 'Courtyard plan with indoor-outdoor flow.',
      'details'=> [
        'Large open living spaces with natural light',
        'Indoor–outdoor connectivity with sliding glass doors',
        'Minimalist landscaping for elegant aesthetics',
        'Energy-efficient spatial planning',
      ],
      'more' => 'This modern villa embraces seamless indoor–outdoor living with open courtyards, long glass openings, and minimalist detailing. Designed for luxury living, the layout enhances air flow, light, and visual comfort.'
    ],


    [
      'title'  => 'Classic Residence',
      'image'  => '/images/slide-2.jpg',
      'desc'   => 'Crown moldings and timeless palette.',
      'details'=> [
        'Elegant crown molding and high-end trim',
        'Warm, timeless interior color palette',
        'Luxury wooden flooring and classic veneer work',
        'Statement lighting for a refined atmosphere',
      ],
      'more' => 'A residence styled with timeless sophistication. Classic wall moldings, layered textures, and rich finishes come together to create a luxurious yet comfortable lifestyle ambience.'
    ],


    [
      'title'  => 'Tropical Home',
      'image'  => '/images/home3.jpg',
      'desc'   => 'Timber louvers, green pockets, breezy feel.',
      'details'=> [
        'Cross ventilation-oriented planning',
        'Natural materials like timber and stone',
        'Integrated green pockets and indoor plants',
        'Earthy tonal palette with warm accents',
      ],
      'more' => 'Designed to capture the essence of tropical living, this home prioritizes ventilation, greenery, and a natural material palette. The result is a refreshing, airy and climate-responsive space.'
    ],


    [
      'title'  => 'Contemporary Duplex',
      'image'  => '/images/home.jpg',
      'desc'   => 'Double-height living and glass bridge.',
      'details'=> [
        'Double-height central living room',
        'Glass bridge walkway for dramatic effect',
        'Open staircase with natural finish',
        'Modern lighting layers enhancing ambience',
      ],
      'more' => 'A blend of openness and dramatic architectural elements, this duplex includes double-height spaces and modern finishes, making it perfect for families who love modern, stylish living.'
    ],


    [
      'title'  => 'Coastal Calm',
      'image'  => '/images/slide-2.jpg',
      'desc'   => 'Light woods, linen, and soft blues.',
      'details'=> [
        'Soft blues and coastal-inspired neutrals',
        'Linen fabrics and breezy textile accents',
        'Light driftwood-style furniture',
        'Relaxing, calm aesthetic for peaceful living',
      ],
      'more' => 'This home captures ocean-inspired tranquility with calming textures, soft fabrics, and pastel tones. Perfect for creating a refreshing “holiday home” feeling every day.'
    ],


    [
      'title'  => 'Luxury Bungalow',
      'image'  => '/images/home3.jpg',
      'desc'   => 'Marble accents and curated lighting.',
      'details'=> [
        'Premium marble stone counters & cladding',
        'High-end lighting fixtures with layered glow',
        'Sophisticated furniture & curated decor pieces',
        'Grand entrance foyer and rich detailing',
      ],
      'more' => 'A high-luxury home concept featuring marble highlights, dramatic lighting, and premium finishes throughout. This design elevates everyday living to a luxurious experience.'
    ],

  ];
@endphp

@include('projects.partials.grid', compact('title','banner','items'))
