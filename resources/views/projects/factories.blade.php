@php
  $title = 'Factories';
  $banner = '/images/factories.jpg';

  $items = [
    [
      'title'  => 'Assembly Line Hall',
      'image'  => '/images/com-f1.jpg',
      'desc'   => 'High-throughput layout with safety lanes and modular bays.',
      'details'=> [
        'Optimized flow for assembly operations',
        'Clear safety zones and walkways',
        'High visibility lighting arrangement',
        'Space for modular expansion',
      ],
      'more' => 'This assembly hall is designed to support uninterrupted workflow with strong focus on safety, visibility and modular expansion. It offers a highly adaptable environment for multi-stage manufacturing processes.'
    ],

    [
      'title'  => 'Heavy Fabrication Unit',
      'image'  => '/images/com-f2.jpg',
      'desc'   => 'Dust control, crane access, optimized material flow.',
      'details'=> [
        'Overhead crane integration',
        'Heat-resistant flooring',
        'Dust & fume extraction system',
        'Safe heavy equipment movement planning',
      ],
      'more' => 'Built for large-scale fabrication, this unit features robust load-bearing structures, efficient dust management, and crane accessibility to streamline heavy-duty operations.'
    ],

    [
      'title'  => 'Precision Shop Floor',
      'image'  => '/images/com-f3.jpg',
      'desc'   => 'Vibration-isolated zones and tool shadow boards.',
      'details'=> [
        'Anti-vibration flooring',
        'Tool shadow boards for quick access',
        'Temperature-controlled zones',
        'High-quality surface finishing',
      ],
      'more' => 'Ideal for precision machining and fine engineering work. This environment is controlled, stable, and optimized for extremely accurate and high-quality manufacturing output.'
    ],

    [
      'title'  => 'Packaging & QA Zone',
      'image'  => '/images/com-f1.jpg',
      'desc'   => 'Inline QA, labeling, and dispatch staging.',
      'details'=> [
        'Inline inspection and testing',
        'Labeling, barcoding & packaging setup',
        'Ergonomic workstation layout',
        'FIFO-based staging area design',
      ],
      'more' => 'Ensuring seamless product packaging and quality checks, this zone is designed to maintain accuracy, traceability, and efficient flow before final dispatch.'
    ],

    [
      'title'  => 'R&D Prototype Lab',
      'image'  => '/images/com-f2.jpg',
      'desc'   => 'Flexible benches, EHS compliance, ESD flooring.',
      'details'=> [
        'Flexible high-utility benches',
        'ESD-compliant flooring standards',
        'Environment-safe material storage',
        'Ideal space for prototype testing',
      ],
      'more' => 'A fully adaptable research environment where innovation meets safe engineering. This lab supports prototype development and technical experimentation.'
    ],

    [
      'title'  => 'Maintenance Bay',
      'image'  => '/images/com-f3.jpg',
      'desc'   => 'Spare storage, pit access, and safe MHE routes.',
      'details'=> [
        'Organized spare parts storage system',
        'Pit-access maintenance zones',
        'Safe MHE pathways',
        'Dedicated lubrication and wash stations',
      ],
      'more' => 'Designed to support efficient maintenance operations, this bay includes dedicated servicing zones, storage systems, and safe routing for equipment handling.'
    ],
  ];
@endphp

@include('projects.partials.grid', compact('title','banner','items'))
