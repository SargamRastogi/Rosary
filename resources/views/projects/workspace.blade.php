@php
  $title = 'Workspace';
  $banner = '/images/workspace.jpg';

  $items = [

    [
      'title'  => 'Open Plan Office',
      'image'  => '/images/com-w1.jpg',
      'desc'   => 'Hot-desking with acoustic baffles and natural light.',
      'details'=> [
        'Hot-desking layout for flexible work culture',
        'Acoustic baffles to reduce noise',
        'Large windows for maximum natural daylight',
        'Collaborative islands for team interaction',
      ],
      'more' => 'A beautifully designed open-plan workspace focusing on comfort and energy flow. With natural light, ergonomic seating, and acoustic planning, the layout promotes productivity and seamless team communication.'
    ],


    [
      'title'  => 'Board Room',
      'image'  => '/images/com-w2.jpg',
      'desc'   => 'Integrated VC, lighting scenes, and timber accents.',
      'details'=> [
        'Video conferencing integration',
        'Layered lighting moods for meetings',
        'Timber paneling for warm ambience',
        'Sound-treated walls and seamless cabling',
      ],
      'more' => 'A premium board room designed for impactful decision making. Combines technology, elegance, and comfort with a professional atmosphere and perfect acoustic balance.'
    ],


    [
      'title'  => 'Collab Hub',
      'image'  => '/images/com-w3.jpg',
      'desc'   => 'Soft seating, writable walls, and agile zones.',
      'details'=> [
        'Creative collaboration spaces',
        'Soft seating arrangements',
        'Writable glass/whiteboard walls',
        'Flexible partitions for activity-based working',
      ],
      'more' => 'Designed for teamwork and innovation, this collaboration hub creates an inspiring environment for brainstorming, team huddles, and creative sessions.'
    ],


    [
      'title'  => 'Reception & Lounge',
      'image'  => '/images/com-w1.jpg',
      'desc'   => 'Brand-forward entry with warm textures.',
      'details'=> [
        'Brand-centric backdrop wall design',
        'Warm textures and soft lighting',
        'Comfort seating for visitors',
        'Elegant display and welcome stations',
      ],
      'more' => 'A welcoming reception space styled to create a strong first impression. Designed with brand identity, visitor experience, and ambience in mind.'
    ],


    [
      'title'  => 'Private Cabins',
      'image'  => '/images/com-w2.jpg',
      'desc'   => 'Calm palette, layered lighting, ergonomic furniture.',
      'details'=> [
        'Premium ergonomic office furniture',
        'Soft pastel color palette',
        'Layered lighting setup',
        'Storage-integrated design for clutter-free work',
      ],
      'more' => 'Private cabins designed for focused work. The calm tones, comfortable seating, and thoughtful spatial planning promote peace and personal productivity.'
    ],


    [
      'title'  => 'Cafeteria',
      'image'  => '/images/com-w3.jpg',  // Fixed path
      'desc'   => 'Zoned seating, easy service, and durable finishes.',
      'details'=> [
        'Zoned seating for different group sizes',
        'Quick-service counters for smooth flow',
        'Durable and easy-to-maintain surfaces',
        'Ambient lighting for relaxing breaks',
      ],
      'more' => 'A functional and refreshing cafeteria designed to offer comfort and style. Ideal seating flow, modern décor, and smart material use create a beautiful break space for employees.'
    ],

  ];
@endphp

@include('projects.partials.grid', compact('title','banner','items'))
