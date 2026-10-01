<?php
/**
 * Master Services Hub Page (services/index.php)
 * Appliance Repair Knights Ltd.
 *
 * Comprehensive Pillar Page showcasing all 7 certified repair services
 * across Toronto & the Greater Toronto Area (GTA).
 * High-converting CRO layout, rich E-E-A-T trust signals, and Google-compliant schema.
 */

require_once __DIR__ . '/../config.php';

$base_url = '../';
$current_page = 'services';
$page_title = 'All Appliance Repair Services in Toronto & GTA | Appliance Repair Knights';
$page_description = 'Certified same-day appliance repair services across Toronto & the GTA. Expert diagnostics for refrigerators, washers, coffee machines, dishwashers, dryers, stoves & microwaves with written warranty.';
$page_keywords = 'appliance repair services toronto, GTA appliance repair, refrigerator repair, washer repair, coffee machine repair, dishwasher repair, dryer repair, stove repair, microwave repair';
$canonical_url = 'https://www.appliancerepairknights.com/services';
$og_image = 'https://www.appliancerepairknights.com/img/appliance-repair-banner.webp';
$og_type = 'website';
$disable_global_schema = true;

$gmb_rating = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '12';

// 7 Master Services in Standard Site-Wide Sequence
$services = [
    [
        'id'          => 'refrigerator-repair',
        'slug'        => 'fridge-repair',
        'url'         => 'https://www.appliancerepairknights.com/services/fridge-repair',
        'rel_url'     => 'services/fridge-repair',
        'name'        => 'Refrigerator & Freezer Repair',
        'short_name'  => 'Refrigerator Repair',
        'badge'       => 'Same-Day Cooling Service',
        'badge_color' => 'bg-blue-50 text-blue-700 border-blue-200',
        'image'       => 'img/refrigerator-repair-service.webp',
        'image_alt'   => 'Certified Refrigerator and Freezer Repair Service Toronto',
        'summary'     => 'Fast, emergency cooling diagnostics for all major refrigerator types. From dead compressors to frost buildup, we restore your cold storage on the first visit.',
        'types'       => ['French Door', 'Side-by-Side', 'Bottom Freezer', 'Built-In & Panel', 'Wine Coolers'],
        'issues'      => [
            'Not cooling or uneven temperature between fridge and freezer',
            'Excessive frost or ice buildup on back wall and evaporator coils',
            'Compressor clicking, humming loudly, or failing to kick on',
            'Water pooling inside crisper drawers or leaking onto the kitchen floor',
            'Ice maker not producing ice, jamming, or leaking water line'
        ]
    ],
    [
        'id'          => 'washer-repair',
        'slug'        => 'washer-repair',
        'url'         => 'https://www.appliancerepairknights.com/services/washer-repair',
        'rel_url'     => 'services/washer-repair',
        'name'        => 'Washing Machine Repair',
        'short_name'  => 'Washer Repair',
        'badge'       => 'Front & Top-Load Specialist',
        'badge_color' => 'bg-emerald-50 text-emerald-700 border-emerald-200',
        'image'       => 'img/washing-machine-studio.webp',
        'image_alt'   => 'Professional Washing Machine Repair in Toronto and GTA',
        'summary'     => 'Prompt repairs for front-load and top-load washers failing to drain, spin, or lock. Mobile technicians equipped with common OEM pumps, belts, and valves.',
        'types'       => ['Front-Load Washers', 'Top-Load Agitators', 'High-Efficiency Impellers', 'Stackable Laundry Sets'],
        'issues'      => [
            'Washer will not drain standing water at cycle completion',
            'Drum fails to spin or agitate, leaving laundry soaking wet',
            'Violent vibration, shaking, or banging noise during high-speed spin',
            'Door boot seal leaking water or door latch locked shut with error code',
            'Water not entering the machine or taking hours to fill drum'
        ]
    ],
    [
        'id'          => 'coffee-machine-repair',
        'slug'        => 'coffee-machine-repair',
        'url'         => 'https://www.appliancerepairknights.com/services/coffee-machine-repair',
        'rel_url'     => 'services/coffee-machine-repair',
        'name'        => 'Coffee Machine Repair & Maintenance',
        'short_name'  => 'Coffee Machine Repair',
        'badge'       => 'Built-In & Espresso Units',
        'badge_color' => 'bg-amber-50 text-amber-800 border-amber-200',
        'image'       => 'img/coffee-machine-studio.webp',
        'image_alt'   => 'Luxury Built-In and Commercial Coffee Machine Repair',
        'summary'     => 'Specialized diagnostics and on-site servicing for luxury residential built-in coffee systems and commercial office espresso machines across Toronto & GTA.',
        'types'       => ['Built-In Kitchen Systems', 'Bean-to-Cup Units', 'Commercial Office Espresso', 'Prosumer Dual Boilers'],
        'issues'      => [
            'Low brew pressure or coffee trickling slowly drop-by-drop',
            'Steam wand or milk frother not heating or producing weak foam',
            'Grinder jamming, making loud grinding screech, or under-extracting',
            'Persistent descaling error loop that refuses to reset after cycle',
            'Internal water leaks underneath machine or around brew group head'
        ]
    ],
    [
        'id'          => 'dishwasher-repair',
        'slug'        => 'dishwasher-repair',
        'url'         => 'https://www.appliancerepairknights.com/services/dishwasher-repair',
        'rel_url'     => 'services/dishwasher-repair',
        'name'        => 'Dishwasher Repair & Installation',
        'short_name'  => 'Dishwasher Repair',
        'badge'       => 'Full Wash & Drainage Care',
        'badge_color' => 'bg-cyan-50 text-cyan-700 border-cyan-200',
        'image'       => 'img/open-dishwasher-repair.webp',
        'image_alt'   => 'Built-In Dishwasher Repair and Leak Diagnostics',
        'summary'     => 'Eliminate standing dirty water, leaking seals, and cloudy dishware. Certified technicians replace circulation pumps, wash arms, and inlet valves on-site.',
        'types'       => ['Built-In Dishwashers', 'Panel-Ready Units', 'Double Drawer Dishwashers', 'Commercial Undercounter'],
        'issues'      => [
            'Standing dirty water remaining in bottom of basin after cycle',
            'Dishes coming out with food residue, cloudiness, or grease film',
            'Water dripping from door seal edges onto kitchen cabinetry',
            'Dishwasher stopping mid-cycle or flashing drain sensor warning',
            'Loud humming, buzzing, or grinding noise during wash cycles'
        ]
    ],
    [
        'id'          => 'dryer-repair',
        'slug'        => 'dryer-repair',
        'url'         => 'https://www.appliancerepairknights.com/services/dryer-repair',
        'rel_url'     => 'services/dryer-repair',
        'name'        => 'Dryer Repair & Duct Venting',
        'short_name'  => 'Dryer Repair',
        'badge'       => 'Electric & Gas Dryer Care',
        'badge_color' => 'bg-rose-50 text-rose-700 border-rose-200',
        'image'       => 'img/clothes-dryer-repair-service.webp',
        'image_alt'   => 'Electric and Gas Clothes Dryer Repair in Toronto',
        'summary'     => 'Stop wasting energy running multiple cycles. We test and replace heating elements, thermal fuses, rollers, and motors to restore safe, fast drying.',
        'types'       => ['Electric Clothes Dryers', 'Gas Dryers', 'Compact Heat Pump Units', 'Vented Laundry Dryers'],
        'issues'      => [
            'Dryer drum spins normally but unit blows only cool or lukewarm air',
            'Takes 2 to 3 full cycles to dry a standard load of laundry',
            'High-pitched squealing, thumping, or grinding roller noise',
            'Dryer shutting off prematurely after 5 to 10 minutes of running',
            'Burnt smell or excessive exterior cabinet heat indicating airflow hazard'
        ]
    ],
    [
        'id'          => 'stove-repair',
        'slug'        => 'stove-repair',
        'url'         => 'https://www.appliancerepairknights.com/services/stove-repair',
        'rel_url'     => 'services/stove-repair',
        'name'        => 'Oven, Stove & Range Repair',
        'short_name'  => 'Stove & Oven Repair',
        'badge'       => 'Gas, Electric & Induction',
        'badge_color' => 'bg-orange-50 text-orange-700 border-orange-200',
        'image'       => 'img/oven-stove-repair-service.webp',
        'image_alt'   => 'Oven, Cooktop and Stove Repair Service Toronto',
        'summary'     => 'Complete diagnostics for gas burners, electric bake/broil elements, and induction cooktops. Fast, safe troubleshooting of temperature and ignition faults.',
        'types'       => ['Gas Ranges & Stoves', 'Electric Radiant Cooktops', 'Induction Ranges', 'Built-In Wall Ovens'],
        'issues'      => [
            'Gas surface burner clicks continuously or fails to spark and light',
            'Oven bake or broil heating element fails to glow red hot',
            'Oven temperature calibration off by 25°F to 50°F+, burning food',
            'Smooth glass cooktop surface element not heating or cycling off',
            'Oven digital control board displaying error codes or touch panel dead'
        ]
    ],
    [
        'id'          => 'microwave-repair',
        'slug'        => 'microwave-repair',
        'url'         => 'https://www.appliancerepairknights.com/services/microwave-repair',
        'rel_url'     => 'services/microwave-repair',
        'name'        => 'Microwave Repair & Installation',
        'short_name'  => 'Microwave Repair',
        'badge'       => 'Built-In & Over-the-Range',
        'badge_color' => 'bg-indigo-50 text-indigo-700 border-indigo-200',
        'image'       => 'img/microwave-repair-service.webp',
        'image_alt'   => 'Over-the-Range and Built-In Microwave Repair Service',
        'summary'     => 'Expert repair for built-in and over-the-range (OTR) microwaves. Safe diagnostics for magnetrons, high-voltage diodes, and turntable drives.',
        'types'       => ['Over-the-Range (OTR) Microwaves', 'Built-In Drawer Microwaves', 'Speed-Cook Wall Ovens'],
        'issues'      => [
            'Microwave operates and hums but food remains completely cold',
            'Sparking, arcing, or burnt ozone smell inside cooking cavity',
            'Glass turntable plate does not rotate during operation',
            'Keypad control buttons unresponsive or display screen unreadable',
            'Unit shuts down automatically after 2 to 3 seconds of starting'
        ]
    ]
];

// Rich Snippets FAQs
$hub_faqs = [
    [
        'q' => 'Which home and commercial appliances do you repair?',
        'a' => 'We provide certified repairs for all major residential and commercial appliances across Toronto and the GTA, including refrigerators, freezers, washing machines, coffee machines and espresso units, dishwashers, electric and gas dryers, ovens, stoves, induction cooktops, and built-in microwaves.'
    ],
    [
        'q' => 'How does your waived diagnostic service fee work?',
        'a' => 'Our pricing is completely transparent. When our technician inspects your appliance, identifies the fault, and provides an upfront written quote, your diagnostic service call fee is completely waived when you proceed with the repair. You only pay for the necessary parts and labour.'
    ],
    [
        'q' => 'Are your appliance repairs backed by a warranty?',
        'a' => 'Yes. Every repair performed by Appliance Repair Knights is backed by our comprehensive written warranty on parts and labour. We install genuine OEM replacement components directly specified by your appliance manufacturer.'
    ],
    [
        'q' => 'How quickly can a technician arrive at my home?',
        'a' => 'We maintain a dedicated fleet of fully equipped mobile service vehicles across Toronto, Peel, York, Halton, and Durham. We arrange prompt same-day appointments based on schedule availability, carrying the most common factory replacement components on our trucks.'
    ],
    [
        'q' => 'Do you service luxury and high-end appliance brands?',
        'a' => 'Yes. Our licensed technicians are factory-trained and experienced across luxury and European brands including Sub-Zero, Miele, Bosch, Thermador, Viking, Gaggenau, JennAir, and Jura, as well as mainstream manufacturers like Samsung, LG, Whirlpool, GE, Maytag, and Frigidaire.'
    ]
];

// Build Structured Schema (@graph)
$faq_schema_items = [];
foreach ($hub_faqs as $faq) {
    $faq_schema_items[] = [
        '@type' => 'Question',
        'name' => $faq['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['a']
        ]
    ];
}

$item_list_elements = [];
$collection_parts = [];
foreach ($services as $index => $srv) {
    $item_list_elements[] = [
        '@type' => 'ListItem',
        'position' => $index + 1,
        'name' => $srv['name'],
        'url' => $srv['url']
    ];
    $collection_parts[] = [
        '@type' => 'Service',
        '@id' => $srv['url'] . '#service',
        'name' => $srv['name'],
        'url' => $srv['url'],
        'description' => $srv['summary'],
        'provider' => [
            '@id' => 'https://www.appliancerepairknights.com/#organization'
        ]
    ];
}

$custom_head_schema = '<script type="application/ld+json">' . "\n" . json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['LocalBusiness', 'HomeAndConstructionBusiness'],
            '@id' => 'https://www.appliancerepairknights.com/#organization',
            'name' => 'Appliance Repair Knights Ltd.',
            'url' => 'https://www.appliancerepairknights.com/',
            'logo' => 'https://www.appliancerepairknights.com/img/logo.webp',
            'image' => 'https://www.appliancerepairknights.com/img/appliance-repair-banner.webp',
            'telephone' => '905-717-8905',
            'email' => 'info@appliancerepairknights.com',
            'priceRange' => '$$',
            'currenciesAccepted' => 'CAD',
            'paymentAccepted' => 'Cash, Credit Card, Debit Card, Interac e-Transfer',
            'hasMap' => defined('BUSINESS_MAPS_URL') ? BUSINESS_MAPS_URL : 'https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059',
            'sameAs' => [
                'https://www.facebook.com/Appliancerepairknights',
                'https://www.instagram.com/appliancerepairknights/',
                'https://www.tiktok.com/@appliance.service1',
                'https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059'
            ],
            'knowsAbout' => [
                'Refrigerator Repair',
                'Washing Machine Repair',
                'Coffee Machine Repair',
                'Dishwasher Repair',
                'Dryer Repair',
                'Stove and Oven Repair',
                'Microwave Repair'
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '100 King St W',
                'addressLocality' => 'Toronto',
                'addressRegion' => 'ON',
                'postalCode' => 'M5X 1A9',
                'addressCountry' => 'CA'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 43.6487,
                'longitude' => -79.3817
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => (string)$gmb_rating,
                'reviewCount' => (string)$gmb_reviews
            ],
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    'opens' => '08:00',
                    'closes' => '20:00'
                ]
            ]
        ],
        [
            '@type' => 'CollectionPage',
            '@id' => $canonical_url . '#collection',
            'url' => $canonical_url,
            'name' => $page_title,
            'description' => $page_description,
            'isPartOf' => [
                '@type' => 'WebSite',
                '@id' => 'https://www.appliancerepairknights.com/#website',
                'name' => 'Appliance Repair Knights',
                'url' => 'https://www.appliancerepairknights.com/'
            ],
            'hasPart' => $collection_parts
        ],
        [
            '@type' => 'ItemList',
            '@id' => $canonical_url . '#services-list',
            'name' => 'Major Appliance Repair Services',
            'itemListElement' => $item_list_elements
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id' => $canonical_url . '#breadcrumb',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => 'https://www.appliancerepairknights.com/'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Services',
                    'item' => $canonical_url
                ]
            ]
        ],
        [
            '@type' => 'FAQPage',
            '@id' => $canonical_url . '#faq',
            'mainEntity' => $faq_schema_items
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n</script>\n";

require_once __DIR__ . '/../head.php';
?>

<body class="bg-[#F8FAFC] text-secondary font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white">
  <?php require_once __DIR__ . '/../header.php'; ?>

  <!-- BREADCRUMBS NAVIGATION -->
  <nav class="bg-white border-b border-bordercolor" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="<?php echo $base_url; ?>" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Services</span>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="bg-primary text-white py-12 md:py-16 overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <div class="inline-flex items-center gap-2 bg-brandOrange/20 border border-brandOrange/40 text-accent text-xs md:text-sm font-bold uppercase tracking-widest px-3.5 py-1 rounded-full mb-4">
        <span class="w-2 h-2 rounded-full bg-accent animate-ping"></span>
        CERTIFIED RESIDENTIAL &amp; COMMERCIAL APPLIANCE REPAIR
      </div>

      <h1 class="text-3xl sm:text-4xl md:text-5xl font-heading font-extrabold text-white tracking-tight leading-tight max-w-4xl mx-auto">
        Appliance Repair Services in Toronto &amp; the GTA
      </h1>

      <p class="text-slate-300 text-base md:text-lg max-w-3xl mx-auto mt-4 leading-relaxed">
        Prompt, reliable diagnostics and factory-grade repairs for all major household and commercial appliances. Backed by our <strong class="text-white font-semibold">written parts and labour warranty</strong>, with our <strong class="text-white font-semibold">diagnostic service fee completely waived</strong> when you proceed with the repair.
      </p>

      <!-- Trust Badges Strip -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3 max-w-4xl mx-auto mt-8 text-left">
        <div class="bg-slate-900/60 border border-slate-700/60 rounded-xl p-3.5 flex items-center gap-3">
          <div class="w-10 h-10 rounded-lg bg-brandOrange/20 text-brandOrange flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <div>
            <div class="text-xs font-bold text-white uppercase tracking-wider">Prompt Dispatch</div>
            <div class="text-xs text-slate-300">Same-Day Availability</div>
          </div>
        </div>

        <div class="bg-slate-900/60 border border-slate-700/60 rounded-xl p-3.5 flex items-center gap-3">
          <div class="w-10 h-10 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <div>
            <div class="text-xs font-bold text-white uppercase tracking-wider">Written Warranty</div>
            <div class="text-xs text-slate-300">Parts &amp; Labour Guarantee</div>
          </div>
        </div>

        <div class="bg-slate-900/60 border border-slate-700/60 rounded-xl p-3.5 flex items-center gap-3">
          <div class="w-10 h-10 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <div>
            <div class="text-xs font-bold text-white uppercase tracking-wider">Fee Waived</div>
            <div class="text-xs text-slate-300">When Repair Proceeds</div>
          </div>
        </div>

        <div class="bg-slate-900/60 border border-slate-700/60 rounded-xl p-3.5 flex items-center gap-3">
          <div class="w-10 h-10 rounded-lg bg-amber-500/20 text-amber-400 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          </div>
          <div>
            <div class="text-xs font-bold text-white uppercase tracking-wider">5.0 Star Rating</div>
            <div class="text-xs text-slate-300">Google Verified Reviews</div>
          </div>
        </div>
      </div>

      <!-- Quick Action Buttons -->
      <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
        <a href="tel:9057178905" class="gtm-web-call bg-brandOrange hover:bg-brandOrangeHover text-white font-black text-sm px-6 py-3.5 rounded-xl shadow-lg transition-transform hover:scale-105 flex items-center gap-2">
          <svg class="w-4 h-4 pointer-events-none" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
          <span>CALL FOR IMMEDIATE SERVICE: 905-717-8905</span>
        </a>
        <a href="<?php echo $base_url; ?>schedule" class="bg-white/10 hover:bg-white/20 text-white font-bold text-sm px-6 py-3.5 rounded-xl border border-white/20 transition-all flex items-center gap-2">
          <span>SCHEDULE DIAGNOSTICS ONLINE</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ALL 7 SERVICES MAIN SECTION -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <span class="text-xs uppercase font-extrabold tracking-wider text-brandOrange bg-orange-50 border border-orange-200 px-3 py-1 rounded-full">
        OUR CORE SPECIALTIES
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-extrabold text-primary tracking-tight mt-3">
        Comprehensive Appliance Repair Portfolio
      </h2>
      <p class="text-secondary text-sm sm:text-base mt-2">
        Select your appliance below for in-depth diagnostic symptoms, troubleshooting steps, and certified technician dispatch across Toronto &amp; the GTA.
      </p>
    </div>

    <!-- 7 Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($services as $srv): ?>
        <article class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group hover:-translate-y-1">
          <!-- Card Image Header -->
          <div class="relative bg-slate-50 border-b border-slate-100 p-6 flex items-center justify-center h-64 overflow-hidden">
            <img 
              src="<?php echo $base_url . $srv['image']; ?>" 
              alt="<?php echo htmlspecialchars($srv['image_alt']); ?>" 
              width="360" 
              height="240" 
              loading="lazy" 
              decoding="async" 
              class="max-h-52 w-auto object-contain transition-transform duration-500 group-hover:scale-105"
            >
          </div>

          <!-- Card Body -->
          <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
              <h3 class="text-xl font-heading font-extrabold text-primary group-hover:text-brandOrange transition-colors">
                <a href="<?php echo $base_url . $srv['rel_url']; ?>">
                  <?php echo $srv['name']; ?>
                </a>
              </h3>
              
              <p class="text-secondary text-sm mt-2.5 leading-relaxed">
                <?php echo $srv['summary']; ?>
              </p>

              <!-- Supported Types Pills -->
              <div class="mt-4 pt-4 border-t border-slate-100">
                <span class="text-xs uppercase font-extrabold tracking-wider text-slate-500 block mb-2">Supported Units:</span>
                <div class="flex flex-wrap gap-1.5">
                  <?php foreach ($srv['types'] as $type): ?>
                    <span class="text-[11px] font-semibold bg-slate-100 text-slate-700 px-2 py-0.5 rounded-md">
                      <?php echo $type; ?>
                    </span>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- Top Common Issues -->
              <div class="mt-4 pt-4 border-t border-slate-100">
                <span class="text-xs uppercase font-extrabold tracking-wider text-slate-500 block mb-2">Common Problems Solved:</span>
                <ul class="space-y-1.5 text-xs text-slate-600">
                  <?php foreach (array_slice($srv['issues'], 0, 3) as $issue): ?>
                    <li class="flex items-start gap-1.5">
                      <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                      <span><?php echo $issue; ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>

            <!-- Card Action Footer -->
            <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between gap-3">
              <a href="<?php echo $base_url . $srv['rel_url']; ?>" class="inline-flex items-center gap-1.5 text-xs font-extrabold text-brandOrange hover:text-brandOrangeHover group-hover:translate-x-0.5 transition-all">
                <span>View Full Details</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </a>
              <a href="tel:9057178905" class="gtm-web-call text-xs font-bold text-primary hover:text-brandOrange transition-colors flex items-center gap-1">
                <svg class="w-3.5 h-3.5 text-brandOrange pointer-events-none" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                <span>Call 905-717-8905</span>
              </a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </main>

  <!-- MAJOR APPLIANCE BRANDS WE SERVICE -->
  <section class="bg-white py-14 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-10">
        <span class="text-xs uppercase font-extrabold tracking-wider text-brandOrange bg-orange-50 border border-orange-200 px-3 py-1 rounded-full">
          EXPERIENCE WITH 40+ APPLIANCE BRANDS
        </span>
        <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary tracking-tight mt-3">
          Factory-Trained On All Major &amp; Luxury Manufacturers
        </h2>
        <p class="text-secondary text-sm mt-2">
          From North American staples to high-end European appliances, our technicians carry the specialized diagnostic computers and OEM parts to service your unit correctly.
        </p>
      </div>

      <!-- Brand Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
        <?php
        $brands = [
            ['name' => 'Samsung', 'color' => '#1428A0'],
            ['name' => 'LG', 'color' => '#A50034'],
            ['name' => 'Whirlpool', 'color' => '#00529B'],
            ['name' => 'Bosch', 'color' => '#EA1A24'],
            ['name' => 'GE Appliances', 'color' => '#005EA6'],
            ['name' => 'Maytag', 'color' => '#003366'],
            ['name' => 'KitchenAid', 'color' => '#9B1B30'],
            ['name' => 'Frigidaire', 'color' => '#003B71'],
            ['name' => 'Electrolux', 'color' => '#011E41'],
            ['name' => 'Miele', 'color' => '#5C0612'],
            ['name' => 'Sub-Zero', 'color' => '#000000'],
            ['name' => 'Kenmore', 'color' => '#006699'],
            ['name' => 'Viking', 'color' => '#8B0000'],
            ['name' => 'JennAir', 'color' => '#1A1A1A'],
            ['name' => 'Dacor', 'color' => '#1F2937'],
            ['name' => 'Amana', 'color' => '#005596'],
            ['name' => 'Thermador', 'color' => '#1C3F94'],
            ['name' => 'Jura', 'color' => '#990000']
        ];
        foreach ($brands as $b): ?>
          <div class="bg-slate-50 border border-slate-200 rounded-xl p-3.5 text-center flex flex-col items-center justify-center hover:border-slate-400 hover:shadow-sm transition-all group">
            <span class="w-3 h-3 rounded-full mb-1.5" style="background-color: <?php echo $b['color']; ?>;"></span>
            <span class="text-xs font-bold text-slate-800 group-hover:text-primary transition-colors"><?php echo $b['name']; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- GTA SERVICE AREAS CROSS-LINK STRIP -->
  <section class="bg-slate-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-8 border-b border-slate-800">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-brandOrange">LOCAL COVERAGE</span>
          <h2 class="text-xl sm:text-2xl font-heading font-extrabold text-white mt-1">Available Daily Across Toronto &amp; 20+ GTA Municipalities</h2>
          <p class="text-slate-400 text-xs sm:text-sm mt-1">Our mobile units are dispatched across all major GTA regional municipalities daily.</p>
        </div>
        <a href="<?php echo $base_url; ?>locations" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase px-4 py-2.5 rounded-lg border border-slate-700 transition-colors whitespace-nowrap">
          <span>View All Service Areas</span>
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
      </div>

      <!-- Quick Municipality Link Pills -->
      <div class="flex flex-wrap gap-2 pt-6">
        <?php
        $quick_cities = [
            ['Toronto', 'locations/toronto-appliance-repair'],
            ['Mississauga', 'locations/mississauga-appliance-repair'],
            ['Brampton', 'locations/brampton-appliance-repair'],
            ['Caledon', 'locations/caledon-appliance-repair'],
            ['Vaughan', 'locations/vaughan-appliance-repair'],
            ['Markham', 'locations/markham-appliance-repair'],
            ['Oakville', 'locations/oakville-appliance-repair'],
            ['Richmond Hill', 'locations/richmond-hill-appliance-repair'],
            ['Burlington', 'locations/burlington-appliance-repair'],
            ['Hamilton', 'locations/hamilton-appliance-repair'],
            ['Kitchener', 'locations/kitchener-appliance-repair'],
            ['Waterloo', 'locations/waterloo-appliance-repair'],
            ['Milton', 'locations/milton-appliance-repair'],
            ['Scarborough', 'locations/scarborough-appliance-repair']
        ];
        foreach ($quick_cities as $city): ?>
          <a href="<?php echo $base_url . $city[1]; ?>" class="text-xs bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white px-3 py-1.5 rounded-lg transition-colors border border-slate-700/60">
            <?php echo $city[0]; ?> Appliance Repair
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FAQS SECTION -->
  <section class="py-14 bg-white border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-10">
        <span class="text-xs uppercase font-extrabold tracking-wider text-brandOrange bg-orange-50 border border-orange-200 px-3 py-1 rounded-full">
          FREQUENTLY ASKED QUESTIONS
        </span>
        <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary tracking-tight mt-3">
          Appliance Service &amp; Repair FAQs
        </h2>
        <p class="text-secondary text-sm mt-2">
          Find answers to common questions about our service coverage, warranties, and diagnostic process.
        </p>
      </div>

      <div class="space-y-4">
        <?php foreach ($hub_faqs as $i => $faq): ?>
          <details class="group bg-slate-50 border border-slate-200 rounded-xl overflow-hidden p-4 sm:p-5 transition-all">
            <summary class="flex justify-between items-center font-heading font-bold text-sm sm:text-base text-primary cursor-pointer list-none select-none">
              <span><?php echo $faq['q']; ?></span>
              <svg class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </summary>
            <div class="mt-3 pt-3 border-t border-slate-200/80 text-xs sm:text-sm text-secondary leading-relaxed">
              <?php echo $faq['a']; ?>
            </div>
          </details>
        <?php endforeach; ?>
      </div>

      <!-- FAQ BOTTOM ACTION BUTTONS -->
      <div class="mt-10 pt-8 border-t border-slate-200 text-center">
        <p class="text-xs sm:text-sm font-semibold text-secondary mb-5">
          Have more questions or need immediate diagnostics for your appliance?
        </p>
        <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4">
          <a href="tel:9057178905" class="gtm-web-call bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold text-xs sm:text-sm px-6 py-3.5 rounded-xl shadow-lg transition-transform hover:scale-105 flex items-center justify-center gap-2">
            <svg class="w-4 h-4 pointer-events-none" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            <span>CALL: 905-717-8905</span>
          </a>
          <a href="<?php echo $base_url; ?>schedule" class="bg-primary hover:bg-brandDarkBlue text-white font-extrabold text-xs sm:text-sm px-6 py-3.5 rounded-xl shadow-md transition-all flex items-center justify-center gap-2">
            <svg class="w-4 h-4 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span>BOOK ONLINE (FEE WAIVED WITH REPAIR)</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php require_once __DIR__ . '/../footer.php'; ?>
</body>
</html>
