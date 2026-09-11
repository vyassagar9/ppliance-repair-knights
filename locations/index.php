<?php
/**
 * Master Locations Hub / Service Areas Index (locations/index.php)
 * Appliance Repair Knights Ltd.
 *
 * Programmatic Hub-and-Spoke Pillar Page for Local SEO.
 * High-Fidelity City Skyline Avatars, Floating Trust Badges, Interactive Hover Micro-Interactions,
 * and 100% Core Web Vitals Optimization.
 */

require_once __DIR__ . '/../config.php';

// 1. Load the Single Source of Truth
$all_locations = require __DIR__ . '/location-data.php';

// 2. Page Metadata
$base_url = defined('BASE_URL') ? BASE_URL : '../';
$current_page = 'locations';
$page_title = 'Appliance Repair Service Areas in Toronto & GTA | Appliance Repair Knights';
$page_description = 'Find appliance repair service areas across Toronto, the GTA and surrounding Southern Ontario communities. Appliance Repair Knights services refrigerators, washers, dryers, dishwashers, ovens and stoves.';
$page_keywords = 'appliance repair service areas, GTA appliance repair locations, Toronto appliance repair service areas, local appliance repair technicians, refrigerator repair, washer repair, dryer repair, dishwasher repair, oven repair';
$canonical_url = 'https://www.appliancerepairknights.com/locations';
$og_image = 'https://www.appliancerepairknights.com/img/appliance-repair-banner.webp';
$og_type = 'website';
$disable_global_schema = true;

$gmb_rating = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '12';

// 3. Group Locations by Macro Zones & Dedicated Regional Municipalities (High-Authority Localized SEO)
$macro_zones = [
    'gta' => [
        'title' => 'Toronto & Greater Toronto Area (GTA) Service Areas',
        'badge' => 'Core GTA Municipalities',
        'description' => 'Comprehensive same-day appliance diagnostics and certified repairs across Toronto and core suburban regional municipalities.',
        'regions' => [
            'City of Toronto' => [],
            'Peel Region'     => [],
            'York Region'     => [],
            'Halton Region'   => [],
            'Durham Region'   => [],
        ]
    ],
    'southern_ontario' => [
        'title' => 'Additional Southern Ontario Service Areas',
        'badge' => 'Extended Regional Hubs',
        'description' => 'Dedicated mobile service units dispatched daily throughout the Greater Golden Horseshoe and surrounding counties.',
        'regions' => [
            'Waterloo Region'       => [],
            'Greater Hamilton Area' => [],
            'Wellington County'     => [],
            'Simcoe County'         => [],
        ]
    ]
];

foreach ($all_locations as $slug => $data) {
    $raw_region = $data['region'] ?? 'Peel Region';
    if ($raw_region === 'Greater Toronto Area' || $raw_region === 'City of Toronto') {
        $zone = 'City of Toronto';
    } else {
        $zone = $raw_region;
    }
    
    // Sort into appropriate macro zone
    if (isset($macro_zones['gta']['regions'][$zone])) {
        $macro_zones['gta']['regions'][$zone][$slug] = $data;
    } elseif (isset($macro_zones['southern_ontario']['regions'][$zone])) {
        $macro_zones['southern_ontario']['regions'][$zone][$slug] = $data;
    }
}

// 4. Build Structured Schema Entities (areaServed array with City objects)
$area_served_entities = [];
$collection_has_parts = [];

foreach ($all_locations as $slug => $loc) {
    $city_name = $loc['city_name'];
    $city_url = 'https://www.appliancerepairknights.com/locations/' . $slug;

    $area_served_entities[] = [
        '@type' => 'City',
        'name' => $city_name . ', ON'
    ];

    $collection_has_parts[] = [
        '@type' => 'WebPage',
        '@id' => $city_url,
        'name' => $city_name . ' Appliance Repair Services',
        'url' => $city_url,
        'description' => $loc['meta_description']
    ];
}

// Common Hub FAQs for Rich Snippets
$hub_faqs = [
    [
        'q' => 'Which cities and regions do you service?',
        'a' => 'We provide comprehensive appliance repair throughout Toronto, Peel, York, Halton, and Durham in the Greater Toronto Area, as well as extended service across Hamilton, the Waterloo Region, Guelph, and Barrie. Our local mobile technicians are dispatched daily to cover all major neighborhoods across these communities.'
    ],
    [
        'q' => 'Do you charge a travel or diagnostic fee between different GTA cities?',
        'a' => 'No! Our policy is transparent and identical across every single service city: our service call fee is completely waived off when you proceed with the repair. You only pay for parts and labour.'
    ],
    [
        'q' => 'How quickly can a technician arrive at my home in outer regions like Caledon or Milton?',
        'a' => 'We provide mobile service coverage across Peel, Halton, York, Durham, and Waterloo. When you contact us, our technician arranges a prompt same-day appointment based on schedule availability, equipped with common OEM replacement parts.'
    ],
    [
        'q' => 'What appliances do your certified technicians repair in each location?',
        'a' => 'We repair all major household appliances regardless of location, including refrigerators, freezers, dishwashers, washing machines, electric & gas dryers, induction cooktops, gas stoves, and built-in ovens from brands like Samsung, LG, Whirlpool, Bosch, GE, and KitchenAid.'
    ],
    [
        'q' => 'Are repairs covered by warranty in all service locations?',
        'a' => 'Yes. Every repair performed across all 20+ service locations includes our written parts and labour warranty.'
    ]
];

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

// 5. UNIFIED JSON-LD SCHEMA (@graph: LocalBusiness + CollectionPage + BreadcrumbList + FAQPage)
$custom_head_schema = '<script type="application/ld+json">' . "\n" . json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'LocalBusiness',
            '@id' => 'https://www.appliancerepairknights.com/#organization',
            'name' => 'Appliance Repair Knights Ltd.',
            'url' => 'https://www.appliancerepairknights.com/',
            'logo' => 'https://www.appliancerepairknights.com/img/logo.webp',
            'image' => 'https://www.appliancerepairknights.com/img/appliance-repair-banner.webp',
            'telephone' => '905-717-8905',
            'email' => 'info@appliancerepairknights.com',
            'priceRange' => '$$',
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
                    'closes' => '21:00'
                ]
            ],
            'areaServed' => $area_served_entities
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
            'hasPart' => $collection_has_parts
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
                    'name' => 'Service Areas',
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
      <span class="text-primary font-bold">Service Areas</span>
    </div>
  </nav>

  <!-- UNIFIED HERO SECTION (Exact Dark Navy Brand Design Tokens) -->
  <section class="bg-primary text-white py-12 md:py-16 overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <div class="inline-flex items-center gap-2 bg-brandOrange/20 border border-brandOrange/40 text-accent text-xs md:text-sm font-bold uppercase tracking-widest px-3.5 py-1 rounded-full mb-4">
        <span class="w-2 h-2 rounded-full bg-accent animate-ping"></span>
        20 COMMUNITIES ACROSS TORONTO, THE GTA &amp; SOUTHERN ONTARIO
      </div>

      <h1 class="text-3xl sm:text-4xl md:text-5xl font-heading font-extrabold text-white tracking-tight leading-tight max-w-4xl mx-auto">
        Appliance Repair Service Areas in Toronto &amp; the GTA
      </h1>

      <p class="text-slate-300 text-base md:text-lg max-w-3xl mx-auto mt-4 leading-relaxed">
        Fast, dependable same-day diagnostics for refrigerators, washers, dryers, dishwashers, and stoves. Select your municipality below to view local service coverage, and learn how our <strong class="text-white font-semibold">service call fee is waived with repair</strong>.
      </p>

      <!-- Trust Badges Strip -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3 max-w-3xl mx-auto mt-8 pt-8 border-t border-slate-800/80 text-xs font-semibold text-slate-300">
        <div class="flex items-center justify-center gap-2">
          <span class="text-accent">✓</span>
          <span>Service Fee Waived w/ Repair</span>
        </div>
        <div class="flex items-center justify-center gap-2">
          <span class="text-accent">✓</span>
          <span>Same-Day Priority Dispatch</span>
        </div>
        <div class="flex items-center justify-center gap-2">
          <span class="text-accent">✓</span>
          <span>Parts &amp; Labour Warranty</span>
        </div>
        <div class="flex items-center justify-center gap-2">
          <span class="text-accent">✓</span>
          <span>5.0★ Google Rated (GTA)</span>
        </div>
      </div>
    </div>
  </section>

  <!-- MASTER LOCATIONS SECTION (Reference Match: Section Heading & Regional Cards) -->
  <main class="flex-grow py-14 sm:py-20 bg-[#F8FAFC]" id="locations-grid-container">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Section Header (Matches Site Standard) -->
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="text-xs font-bold text-accent uppercase tracking-widest block mb-2">
          Service Coverage
        </span>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-extrabold text-primary">
          Find Appliance Repair in <span class="text-accent">Your Area</span>
        </h2>
        <p class="text-slate-600 mt-3 text-sm md:text-base leading-relaxed">
          We provide fast, professional appliance repair services across Toronto, the Greater Toronto Area, and surrounding Southern Ontario communities.
        </p>
      </div>

      <!-- REGIONS CONTAINER (Macro Geographic Zones & Regional Grouping) -->
      <div class="space-y-16" id="regions-wrapper">
        <?php foreach ($macro_zones as $zone_key => $zone): 
          $zone_has_cities = false;
          foreach ($zone['regions'] as $reg_cities) {
            if (!empty($reg_cities)) { $zone_has_cities = true; break; }
          }
          if (!$zone_has_cities) continue;
        ?>
        <div class="macro-zone-section space-y-8">
          
          <!-- Macro Zone Banner Header -->
          <div class="bg-white rounded-2xl p-6 sm:p-7 border border-bordercolor shadow-xs flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="space-y-1">
              <span class="inline-block text-[11px] font-extrabold uppercase tracking-widest text-brandOrange bg-brandOrange/10 px-3 py-1 rounded-full mb-1">
                <?php echo htmlspecialchars($zone['badge']); ?>
              </span>
              <h2 class="text-xl sm:text-2xl md:text-3xl font-heading font-extrabold text-primary">
                <?php echo htmlspecialchars($zone['title']); ?>
              </h2>
              <p class="text-slate-500 text-xs sm:text-sm max-w-2xl leading-relaxed">
                <?php echo htmlspecialchars($zone['description']); ?>
              </p>
            </div>
            <div class="flex-shrink-0 text-left md:text-right">
              <?php 
                $zone_city_count = 0;
                foreach ($zone['regions'] as $reg_cities) { $zone_city_count += count($reg_cities); }
              ?>
              <span class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-700 bg-slate-50 border border-slate-200 px-3.5 py-1.5 rounded-xl shadow-2xs">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <?php echo $zone_city_count; ?> Active Municipalities
              </span>
            </div>
          </div>

          <!-- Regions within this Macro Zone -->
          <div class="space-y-10">
            <?php foreach ($zone['regions'] as $region_name => $cities): 
              if (empty($cities)) continue;
            ?>
            <section class="region-section space-y-4">
              
              <!-- Region Section Header with Service Hubs Count Badge -->
              <div class="flex items-center justify-between pb-2 border-b border-bordercolor">
                <h3 class="text-lg sm:text-xl font-heading font-bold text-primary flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-accent"></span>
                  <?php echo htmlspecialchars($region_name); ?>
                </h3>
                <span class="text-xs font-semibold text-secondary bg-white border border-bordercolor px-3 py-1 rounded-full shadow-xs">
                  <?php echo count($cities); ?> Service <?php echo count($cities) === 1 ? 'Hub' : 'Hubs'; ?>
                </span>
              </div>

              <!-- Cards Grid (3 columns on Desktop, 2 on Tablet, 1 on Mobile) -->
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <?php foreach ($cities as $loc_slug => $loc): ?>
                <article class="location-card bg-white border border-bordercolor hover:border-accent/40 rounded-2xl p-4 shadow-xs hover:shadow-lg transition-all duration-200 flex items-start gap-3.5 group">
                  
                  <!-- City Avatar -->
                  <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl overflow-hidden flex-shrink-0 bg-primary flex items-center justify-center p-2 relative shadow-inner group-hover:scale-105 transition-transform duration-300 mt-0.5">
                    <!-- SVG Cityscape Skyline Silhouette -->
                    <svg class="w-10 h-10 sm:w-12 sm:h-12 text-white/80 group-hover:text-amber-400 transition-colors duration-300" fill="currentColor" viewBox="0 0 64 64">
                      <path d="M6 56h52v4H6z M10 32h8v24h-8z M12 28h4v4h-4z M22 20h10v36h-10z M24 16h6v4h-6z M36 12h8v44h-8z M38 6h4v6h-4z M48 26h8v30h-8z M50 22h4v4h-4z"/>
                      <circle cx="32" cy="10" r="1.5" fill="#FF6B00"/>
                    </svg>
                    <!-- Mini City Initial Tag -->
                    <span class="absolute bottom-1 right-1 text-[8px] font-extrabold uppercase bg-brandOrange text-white px-1.5 py-0.2 rounded tracking-wider shadow-xs">
                      <?php echo substr($loc['city_name'], 0, 3); ?>
                    </span>
                  </div>

                  <!-- Card Content -->
                  <div class="flex-grow min-w-0 space-y-1.5">
                    <h4 class="text-sm sm:text-base font-heading font-bold text-primary group-hover:text-accent transition-colors truncate">
                      <a href="<?php echo $base_url; ?>locations/<?php echo htmlspecialchars($loc_slug); ?>" class="focus:outline-none">
                        <?php echo htmlspecialchars($loc['city_name']); ?> Appliance Repair
                      </a>
                    </h4>

                    <p class="text-[11px] sm:text-xs text-slate-500 leading-relaxed">
                      <?php echo htmlspecialchars($loc['card_desc'] ?? $loc['intro_text']); ?>
                    </p>

                    <!-- Postal Codes (Subtle Secondary Metadata) -->
                    <?php if (!empty($loc['postal_codes'])): ?>
                    <div class="flex flex-wrap items-center gap-1 pt-0.5 text-[10px] text-slate-400">
                      <span class="font-medium text-slate-400">Postal:</span>
                      <?php 
                        $display_pcs = array_slice($loc['postal_codes'], 0, 3);
                        $extra_count = count($loc['postal_codes']) - count($display_pcs);
                        foreach ($display_pcs as $pc): 
                      ?>
                        <span class="px-1.5 py-0.2 bg-slate-50 border border-slate-200/80 text-slate-500 rounded text-[9.5px]">
                          <?php echo htmlspecialchars($pc); ?>
                        </span>
                      <?php endforeach; ?>
                      <?php if ($extra_count > 0): ?>
                        <span class="text-[9.5px] text-slate-400" title="All covered postal codes: <?php echo htmlspecialchars(implode(', ', $loc['postal_codes'])); ?>">
                          +<?php echo $extra_count; ?> more
                        </span>
                      <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <!-- View Details link -->
                    <div class="pt-0.5 flex items-center justify-between text-xs font-semibold text-accent">
                      <a href="<?php echo $base_url; ?>locations/<?php echo htmlspecialchars($loc_slug); ?>" 
                         class="inline-flex items-center gap-1 group-hover:text-accent-hover transition-colors">
                        <span>Explore <?php echo htmlspecialchars($loc['city_name']); ?> Repair</span>
                        <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                      </a>
                    </div>
                  </div>

                </article>
                <?php endforeach; ?>
              </div>

            </section>
            <?php endforeach; ?>
          </div>

        </div>
        <?php endforeach; ?>
      </div>

    <!-- FAQS ACCORDION (Exact UI Match with Services Pages) -->
    <section class="bg-slate-50 border-t border-bordercolor py-16 -mx-4 sm:-mx-6 lg:-mx-8 px-4 sm:px-6 lg:px-8 mt-20" id="service-area-faqs">
      <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center space-y-2">
          <h3 class="text-xs uppercase tracking-widest text-brandOrange font-extrabold">Got Questions?</h3>
          <h2 class="text-2xl sm:text-3xl font-heading font-bold text-primary">Service Areas &amp; Dispatch FAQ</h2>
        </div>
        
        <div class="space-y-4">
          <?php foreach ($hub_faqs as $f_idx => $faq): ?>
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors cursor-pointer" onclick="toggleFaq(this)">
              <span>Q. <?php echo htmlspecialchars($faq['q']); ?></span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300 flex-shrink-0 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-600 leading-relaxed">
              <?php echo htmlspecialchars($faq['a']); ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Post-FAQ CTA & Trust Line (Exact Services Page Match) -->
        <div class="mt-10 text-center space-y-4">
          <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
            <a href="tel:9057178905"
              class="gtm-web-call inline-flex items-center justify-center gap-2.5 bg-brandOrange hover:bg-orange-600 text-white font-extrabold px-6 py-3.5 sm:px-8 sm:py-4 rounded-xl text-xs sm:text-sm md:text-base shadow-lg hover:shadow-xl transition-all uppercase tracking-wide w-full sm:w-auto">
              <svg class="w-5 h-5 animate-pulse flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
              </svg>
              <span class="whitespace-nowrap">Still Have Questions? Call 905-717-8905</span>
            </a>
            <a href="<?php echo $base_url; ?>schedule"
              class="gtm-web-lead inline-flex items-center justify-center gap-2.5 bg-primary hover:bg-brandDarkBlue text-white font-extrabold px-6 py-3.5 sm:px-8 sm:py-4 rounded-xl text-xs sm:text-sm md:text-base shadow-lg hover:shadow-xl transition-all uppercase tracking-wide w-full sm:w-auto">
              <svg class="w-5 h-5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              <span class="whitespace-nowrap">Schedule Repair Online</span>
            </a>
          </div>
          <p class="text-xs text-slate-700 font-semibold flex items-center justify-center gap-2 flex-wrap pt-1">
            <span>🛡️ Service Call Fee Waived With Repairs</span>
            <span class="text-slate-400">•</span>
            <span>⚡ Speak Directly With a Technician</span>
            <span class="text-slate-400">•</span>
            <span>Same-Day Availability</span>
          </p>
        </div>

      </div>
    </section>

    </div>
  </main>

  <script>
  // FAQ Accordion Handler
  function toggleFaq(button) {
    var content = button.nextElementSibling;
    var icon = button.querySelector('svg');
    var isHidden = content.classList.contains('hidden');
    content.classList.toggle('hidden', !isHidden);
    if (icon) {
      icon.classList.toggle('rotate-180', isHidden);
    }
  }
  </script>

  <?php require_once __DIR__ . '/../footer.php'; ?>
</body>
</html>
