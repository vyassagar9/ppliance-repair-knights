<?php
/**
 * Test Master Location Page Template - Prototype & Preview
 * Appliance Repair Knights Ltd.
 * 
 * Benchmark Pattern based on:
 * - appliancerepaircompany.ca/service-areas/mississauga-appliance-repair/
 * - appliance-repair-team.ca/service-areas/kitchener-appliance-repair/
 * 
 * Key Features:
 * - NO Direct Physical Street Address (100% Service Area / Mobile Dispatch Model)
 * - Strict adherence to AGENTS.md rules (No specific prices, no warranty days, no day counts)
 * - 4 Facility Trust Pillars (Licensed & Insured, Upfront Pricing, Same-Day Dispatch, OEM Parts & Warranty)
 * - Visual Appliance Grid with Deep-Dive Common Problem Diagnostic Accordions
 * - 3 Pillars: TIME, QUALITY, PRICE
 * - Multi-Column 30+ Brand Matrix
 * - Local Neighborhoods & Postal Zones Coverage
 * - Localized FAQ Accordion with JSON-LD Schema
 */

require_once __DIR__ . '/../config.php';

// Load location dataset
$all_locations = require __DIR__ . '/location-data.php';

// Allow testing any slug via query param; default to Mississauga for direct competitor benchmark
$requested_slug = isset($_GET['slug']) ? strtolower(trim($_GET['slug'])) : (isset($_GET['city']) ? strtolower(trim($_GET['city'])) : 'mississauga-appliance-repair');
$slug = preg_replace('/\.php$/', '', $requested_slug);

// Normalize short city names (e.g. ?city=mississauga -> mississauga-appliance-repair)
if (!isset($all_locations[$slug]) && isset($all_locations[$slug . '-appliance-repair'])) {
    $slug = $slug . '-appliance-repair';
}

if (!isset($all_locations[$slug])) {
    $slug = 'mississauga-appliance-repair';
}

$loc = $all_locations[$slug];

// Define Page Meta & Variables
$base_url = defined('BASE_URL') ? BASE_URL : '../';
$current_page = 'test-location';
$page_title = 'TEST PREVIEW: ' . $loc['meta_title'];
$page_description = $loc['meta_description'];
$page_keywords = $loc['keywords'];
$canonical_url = 'https://www.appliancerepairknights.com/locations/' . $slug;

$disable_global_schema = true;
?>
<!DOCTYPE html>
<html lang="en-CA" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#0F4C81">

  <!-- Primary SEO Meta Tags -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
  <meta name="robots" content="noindex, nofollow"> <!-- Prevent indexing for test preview -->

  <!-- Local SEO Geo Meta Tags (City-Level Coordinates Only - No Street Address) -->
  <meta name="geo.region" content="CA-ON">
  <meta name="geo.placename" content="<?php echo htmlspecialchars($loc['city_name']); ?>">
  <meta name="geo.position" content="<?php echo (float)($loc['geo']['latitude'] ?? 43.5890); ?>;<?php echo (float)($loc['geo']['longitude'] ?? -79.6441); ?>">
  <meta name="ICBM" content="<?php echo (float)($loc['geo']['latitude'] ?? 43.5890); ?>, <?php echo (float)($loc['geo']['longitude'] ?? -79.6441); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo $base_url; ?>img/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>img/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>img/apple-touch-icon.png">

  <!-- Zero-Latency Self-Hosted Fonts & CSS -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/tailwind.min.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.min.css">

  <style>
    /* Custom Prototype Styles for Enhanced Polish */
    .test-pill-active {
      background-color: #FF6B00 !important;
      color: #FFFFFF !important;
      border-color: #FF6B00 !important;
    }
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    .accordion-content-open {
      display: block !important;
    }
    .accordion-content-closed {
      display: none !important;
    }
    .brand-pill:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(15, 76, 129, 0.08);
      border-color: #0F4C81;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(10px);
    }
    .tiered-brands-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
    }
    @media (min-width: 768px) {
      .tiered-brands-grid {
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1.25rem;
      }
    }
  </style>

  <!-- SAB (Service-Area Business) Schema Markup (NO Street Address Expose) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": ["LocalBusiness", "HomeAndConstructionBusiness"],
        "@id": "https://www.appliancerepairknights.com/#organization",
        "name": "Appliance Repair Knights Ltd.",
        "image": "https://www.appliancerepairknights.com/img/appliance-repair-banner.webp",
        "logo": "https://www.appliancerepairknights.com/img/logo.webp",
        "url": "https://www.appliancerepairknights.com/",
        "telephone": "905-717-8905",
        "email": "info@appliancerepairknights.com",
        "priceRange": "$$",
        "currenciesAccepted": "CAD",
        "paymentAccepted": "Cash, Credit Card, Debit Card, Interac e-Transfer",
        "hasMap": "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059",
        "sameAs": [
          "https://www.facebook.com/Appliancerepairknights",
          "https://www.instagram.com/appliancerepairknights/",
          "https://www.tiktok.com/@appliance.service1",
          "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059"
        ],
        <?php if (!empty($loc['geo'])): ?>
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": <?php echo $loc['geo']['latitude']; ?>,
          "longitude": <?php echo $loc['geo']['longitude']; ?>
        },
        <?php endif; ?>
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "<?php echo defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0'; ?>",
          "reviewCount": "<?php echo defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '12'; ?>",
          "bestRating": "5",
          "worstRating": "1"
        },
        "openingHoursSpecification": [
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:00",
            "closes": "20:00"
          }
        ],
        "areaServed": [
          {
            "@type": "City",
            "name": "<?php echo htmlspecialchars($loc['city_name']); ?>"
          },
          {
            "@type": "AdministrativeArea",
            "name": "<?php echo htmlspecialchars($loc['region']); ?>"
          }<?php if (!empty($loc['neighborhoods'])): ?>,
          <?php
            $nb_schemas = [];
            foreach (array_slice($loc['neighborhoods'], 0, 5) as $nb) {
              $nb_schemas[] = json_encode(['@type' => 'Place', 'name' => $nb . ', ' . $loc['city_name']], JSON_UNESCAPED_SLASHES);
            }
            echo implode(",\n          ", $nb_schemas);
          ?>
          <?php endif; ?>
        ]
      },
      {
        "@type": "Service",
        "@id": "<?php echo $canonical_url; ?>#service",
        "name": "Appliance Repair in <?php echo htmlspecialchars($loc['city_name']); ?>",
        "serviceType": "Appliance Repair Service",
        "provider": {
          "@id": "https://www.appliancerepairknights.com/#organization"
        },
        "areaServed": {
          "@type": "City",
          "name": "<?php echo htmlspecialchars($loc['city_name']); ?>"
        },
        "description": "<?php echo htmlspecialchars(!empty($loc['intro_text']) ? $loc['intro_text'] : ('Same-day inspection and repair services for refrigerators, washers, dryers, dishwashers, stoves, ovens, and microwaves in ' . $loc['city_name'] . ' by licensed local technicians.')); ?>",
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Appliance Repair Services in <?php echo htmlspecialchars($loc['city_name']); ?>",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Refrigerator Repair in <?php echo htmlspecialchars($loc['city_name']); ?>",
                "url": "https://www.appliancerepairknights.com/services/fridge-repair"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Washing Machine Repair in <?php echo htmlspecialchars($loc['city_name']); ?>",
                "url": "https://www.appliancerepairknights.com/services/washer-repair"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Clothes Dryer Repair in <?php echo htmlspecialchars($loc['city_name']); ?>",
                "url": "https://www.appliancerepairknights.com/services/dryer-repair"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Dishwasher Repair in <?php echo htmlspecialchars($loc['city_name']); ?>",
                "url": "https://www.appliancerepairknights.com/services/dishwasher-repair"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Stove & Oven Repair in <?php echo htmlspecialchars($loc['city_name']); ?>",
                "url": "https://www.appliancerepairknights.com/services/stove-repair"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Microwave Repair in <?php echo htmlspecialchars($loc['city_name']); ?>",
                "url": "https://www.appliancerepairknights.com/services/microwave-repair"
              }
            }
          ]
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "<?php echo $canonical_url; ?>#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.appliancerepairknights.com/"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Service Areas",
            "item": "https://www.appliancerepairknights.com/locations"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "<?php echo htmlspecialchars($loc['city_name']); ?> Appliance Repair",
            "item": "<?php echo $canonical_url; ?>"
          }
        ]
      }<?php if (!empty($loc['faqs'])): ?>,
      {
        "@type": "FAQPage",
        "@id": "<?php echo $canonical_url; ?>#faq",
        "mainEntity": [
          <?php 
          $faq_json_items = [];
          foreach ($loc['faqs'] as $f) {
              $faq_json_items[] = json_encode([
                  '@type' => 'Question',
                  'name' => $f['q'],
                  'acceptedAnswer' => [
                      '@type' => 'Answer',
                      'text' => $f['a']
                  ]
              ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
          }
          echo implode(",\n          ", $faq_json_items);
          ?>
        ]
      }<?php endif; ?>
    ]
  }
  </script>
</head>
<body class="bg-[#F8FAFC] text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white">

  <?php include __DIR__ . '/../header.php'; ?>

  <!-- BREADCRUMBS NAVIGATION -->
  <nav class="bg-white border-b border-slate-200" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 py-2.5 text-xs font-semibold flex items-center gap-2 overflow-x-auto whitespace-nowrap no-scrollbar">
      <a href="<?php echo $base_url; ?>" class="text-slate-500 hover:text-brandOrange transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <a href="<?php echo $base_url; ?>locations" class="text-slate-500 hover:text-brandOrange transition-colors">Service Areas</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-brandBlue font-bold"><?php echo htmlspecialchars($loc['city_name']); ?> Appliance Repair</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- ========================================================================= -->
    <!-- 1. HERO SECTION: Light, Modern & Minimalist Split Layout                  -->
    <!-- ========================================================================= -->
    <section class="bg-gradient-to-b from-slate-50 via-white to-slate-50 border-b border-slate-200/80 py-6 sm:py-8 lg:py-10 relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10 items-center">
          
          <!-- Hero Copy Left (7 cols) -->
          <div class="lg:col-span-7 space-y-4 sm:space-y-4.5 text-center lg:text-left flex flex-col justify-center">

            <!-- Location Pill Badge with Radar Ping -->
            <div class="inline-flex items-center gap-2.5 px-3 py-1.5 rounded-full bg-gradient-to-r from-orange-50 via-amber-50/60 to-orange-50 border border-brandOrange/25 shadow-2xs w-fit mx-auto lg:mx-0">
              <span class="relative flex h-2 w-2 flex-shrink-0">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brandOrange opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-brandOrange"></span>
              </span>
              <span class="text-xs font-black tracking-wider uppercase text-brandDarkBlue">Same-Day Dispatch &bull; <span class="text-brandOrange"><?php echo htmlspecialchars($loc['city_name']); ?></span></span>
            </div>

            <!-- Crisp High-Impact H1 -->
            <?php
              $h1_text = !empty($loc['h1_title']) ? $loc['h1_title'] : ('Fast & Reliable Appliance Repair in ' . $loc['city_name']);
              // Highlight 'Appliance Repair Services' or 'Appliance Repair' with brandBlue span to maintain exact design aesthetic
              $formatted_h1 = preg_replace(
                '/(Appliance Repair Services|Appliance Repair)/i',
                '<span class="text-brandBlue">$1</span>',
                htmlspecialchars($h1_text),
                1
              );
            ?>
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-black tracking-tight leading-[1.18] text-slate-900">
              <?php echo $formatted_h1; ?>
            </h1>

            <!-- Scannable 1-2 sentence Subtitle -->
            <p class="text-[14px] sm:text-base text-slate-700 max-w-xl mx-auto lg:mx-0 leading-relaxed font-normal">
              <?php echo htmlspecialchars(!empty($loc['intro_text']) ? $loc['intro_text'] : ('Prompt, licensed in-home diagnostics and repairs across ' . $loc['city_name'] . '. Diagnostic service call fee is completely waived when you proceed with the repair.')); ?>
            </p>

            <!-- Minimalist Trust Highlights Bar -->
            <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2 pt-1 text-xs text-slate-700 font-semibold">
              <div class="inline-flex items-center gap-1.5 bg-white text-slate-800 px-3 py-1.5 rounded-full border border-slate-200 shadow-2xs">
                <span class="text-amber-400 text-sm leading-none">★</span>
                <span class="font-extrabold text-slate-900">5.0</span>
                <span class="text-slate-600 text-xs">(Google Rated)</span>
              </div>
              <div class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-900 px-3 py-1.5 rounded-full border border-emerald-200 shadow-2xs font-extrabold">
                <svg class="w-3.5 h-3.5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <span>Affordable Rates</span>
              </div>
              <div class="inline-flex items-center gap-1.5 bg-blue-50 text-brandBlue px-3 py-1.5 rounded-full border border-blue-200 shadow-2xs font-bold">
                <svg class="w-3.5 h-3.5 text-brandBlue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                <span>Highly Skilled Technicians</span>
              </div>
            </div>

            <!-- Primary Actions (Call & Anchor to Form) -->
            <div class="flex flex-col sm:flex-row items-center gap-2.5 pt-1 justify-center lg:justify-start">
              <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-brandOrange hover:bg-orange-600 text-white font-extrabold px-6 py-3.5 rounded-xl text-sm sm:text-base shadow-md shadow-brandOrange/20 transition-all uppercase tracking-wide">
                <svg class="w-4 h-4 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <span>Call (905) 717-8905</span>
              </a>

              <a href="#quick-booking" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-brandDarkBlue border border-slate-300 font-bold px-5 py-3.5 rounded-xl text-sm sm:text-base shadow-2xs transition-all">
                <span>Request Service Online</span>
                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </a>
            </div>

          </div>

          <!-- Hero Right: Interactive Quote Form (5 cols) -->
          <div id="quick-booking" class="lg:col-span-5">
            <?php 
              $defaultAppliance = 'Refrigerator'; 
              include __DIR__ . '/../forms/quote-form.php'; 
            ?>
          </div>

        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. TRUST PILLARS STRIP: Minimalist 4-Pillar Bar                           -->
    <!-- ========================================================================= -->
    <section class="bg-white border-b border-slate-200/80 py-3.5 sm:py-4">
      <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-6 text-center">
          
          <div class="flex items-center justify-center sm:justify-start gap-2.5">
            <div class="w-9 h-9 sm:w-8 sm:h-8 rounded-lg bg-orange-50 text-brandOrange flex items-center justify-center flex-shrink-0 border border-orange-100">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="text-left">
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Same-Day Repair</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Serving <?php echo htmlspecialchars($loc['city_name']); ?><?php echo !empty($loc['neighborhoods'][0]) ? ' &amp; ' . htmlspecialchars($loc['neighborhoods'][0]) : ''; ?></span>
            </div>
          </div>

          <div class="flex items-center justify-center sm:justify-start gap-2.5">
            <div class="w-9 h-9 sm:w-8 sm:h-8 rounded-lg bg-blue-50 text-brandBlue flex items-center justify-center flex-shrink-0 border border-blue-100">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div class="text-left">
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Licensed &amp; Insured</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5"><?php echo htmlspecialchars(!empty($loc['region']) ? $loc['region'] : $loc['city_name']); ?> certified techs</span>
            </div>
          </div>

          <div class="flex items-center justify-center sm:justify-start gap-2.5">
            <div class="w-9 h-9 sm:w-8 sm:h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 border border-emerald-100">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
            </div>
            <div class="text-left">
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Highly Skilled Technicians</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Factory-trained specialists</span>
            </div>
          </div>

          <div class="flex items-center justify-center sm:justify-start gap-2.5">
            <div class="w-9 h-9 sm:w-8 sm:h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0 border border-amber-100">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="text-left">
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Affordable Rates</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Upfront written transparency</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. SERVICES WE OFFER IN CITY (Clean Minimalist Appliance Grid)             -->
    <!-- ========================================================================= -->
    <section class="py-10 md:py-14 bg-white border-b border-slate-200/80">
      <div class="max-w-7xl mx-auto px-4">
        
        <!-- Clean Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-6 sm:mb-10">
          <!-- Small text with proper icon badge -->
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-50 border border-orange-200/70 text-brandOrange text-xs font-bold tracking-wide uppercase mb-2 sm:mb-3">
            <svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
            <span>Certified Appliance Services</span>
          </div>

          <!-- Main Heading -->
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-heading font-extrabold text-slate-900 tracking-tight">
            Appliances We Repair in <span class="text-brandBlue"><?php echo htmlspecialchars($loc['city_name']); ?></span>
          </h2>

          <!-- Sub text -->
          <p class="text-[14px] sm:text-base text-slate-700 mt-2 leading-relaxed font-normal">
            Fast, reliable diagnostics and same-day on-site repairs across all major kitchen and laundry appliances.
          </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
          
          <!-- Item 1: Refrigerator -->
          <?php 
            $fridge_link = ($slug === 'toronto-appliance-repair' || (isset($loc['city_name']) && strtolower($loc['city_name']) === 'toronto')) 
              ? ($base_url . 'locations/toronto/refrigerator-repair') 
              : ($base_url . 'services/fridge-repair'); 
          ?>
          <a href="<?php echo $fridge_link; ?>" class="group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
            <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
              <img src="<?php echo $base_url; ?>img/refrigerator-repair-service.webp" alt="Refrigerator Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Refrigerator</h3>
              <span class="text-xs font-bold text-brandOrange block mt-1">Repair Service</span>
            </div>
          </a>

          <!-- Item 2: Stove & Oven -->
          <a href="<?php echo $base_url; ?>services/stove-repair" class="group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
            <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
              <img src="<?php echo $base_url; ?>img/oven-stove-repair-service.webp" alt="Stove and Oven Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Stove &amp; Oven</h3>
              <span class="text-xs font-bold text-brandOrange block mt-1">Repair Service</span>
            </div>
          </a>

          <!-- Item 3: Washer -->
          <a href="<?php echo $base_url; ?>services/washer-repair" class="group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
            <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
              <img src="<?php echo $base_url; ?>img/washing-machine-repair-service.webp" alt="Washer Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Washer</h3>
              <span class="text-xs font-bold text-brandOrange block mt-1">Repair Service</span>
            </div>
          </a>

          <!-- Item 4: Dryer -->
          <a href="<?php echo $base_url; ?>services/dryer-repair" class="group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
            <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
              <img src="<?php echo $base_url; ?>img/clothes-dryer-repair-service.webp" alt="Dryer Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Dryer</h3>
              <span class="text-xs font-bold text-brandOrange block mt-1">Repair Service</span>
            </div>
          </a>

          <!-- Item 5: Dishwasher -->
          <a href="<?php echo $base_url; ?>services/dishwasher-repair" class="group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
            <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
              <img src="<?php echo $base_url; ?>img/open-dishwasher-repair.webp" alt="Dishwasher Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Dishwasher</h3>
              <span class="text-xs font-bold text-brandOrange block mt-1">Repair Service</span>
            </div>
          </a>

          <!-- Item 6: Microwave -->
          <a href="<?php echo $base_url; ?>services/microwave-repair" class="group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
            <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
              <img src="<?php echo $base_url; ?>img/microwave-repair.webp" alt="Microwave Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Microwave</h3>
              <span class="text-xs font-bold text-brandOrange block mt-1">Repair Service</span>
            </div>
          </a>

        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. APPLIANCE COMMON PROBLEMS ACCORDION (Diagnostic Intelligence)           -->
    <!-- ========================================================================= -->
    <section class="py-10 md:py-14 bg-white border-t border-slate-200/80">
      <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
          <span class="text-xs font-black uppercase text-brandOrange tracking-widest">Diagnostic Intelligence</span>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-extrabold text-brandDarkBlue mt-1">
            Common Appliance Problems We Solve in <span class="text-brandBlue"><?php echo htmlspecialchars($loc['city_name']); ?></span>
          </h2>
          <p class="text-[14px] sm:text-base text-slate-700 mt-2 max-w-xl mx-auto leading-relaxed">
            Select your appliance type below to see common symptoms our licensed technicians encounter and fix daily across <?php echo htmlspecialchars($loc['city_name']); ?> homes.
          </p>

          <!-- Interactive Appliance Switcher Pills (Horizontal Swipe on Mobile, Grid on Tablet/Desktop) -->
          <div class="pt-5 sm:pt-6 w-full max-w-5xl mx-auto">
            <div class="flex overflow-x-auto gap-2 no-scrollbar py-1 -mx-4 px-4 sm:mx-0 sm:px-0 sm:grid sm:grid-cols-6" id="problem-tabs">
              <button onclick="switchProblemTab('fridge')" id="tab-btn-fridge" class="flex-shrink-0 sm:w-full px-4 py-2.5 rounded-xl text-[13px] sm:text-sm font-bold border border-slate-300 bg-white text-slate-700 hover:border-brandOrange transition-all test-pill-active cursor-pointer whitespace-nowrap text-center shadow-2xs inline-flex items-center justify-center gap-1.5">
                <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"></rect><line x1="5" y1="10" x2="19" y2="10"></line><line x1="9" y1="6" x2="9" y2="7"></line><line x1="9" y1="13" x2="9" y2="16"></line></svg>
                <span>Refrigerator</span>
              </button>
              <button onclick="switchProblemTab('washer')" id="tab-btn-washer" class="flex-shrink-0 sm:w-full px-4 py-2.5 rounded-xl text-[13px] sm:text-sm font-bold border border-slate-300 bg-white text-slate-700 hover:border-brandOrange transition-all cursor-pointer whitespace-nowrap text-center shadow-2xs inline-flex items-center justify-center gap-1.5">
                <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"></rect><circle cx="12" cy="13" r="5"></circle><circle cx="8" cy="6" r="1" fill="currentColor"></circle><circle cx="11" cy="6" r="1" fill="currentColor"></circle></svg>
                <span>Washer</span>
              </button>
              <button onclick="switchProblemTab('dryer')" id="tab-btn-dryer" class="flex-shrink-0 sm:w-full px-4 py-2.5 rounded-xl text-[13px] sm:text-sm font-bold border border-slate-300 bg-white text-slate-700 hover:border-brandOrange transition-all cursor-pointer whitespace-nowrap text-center shadow-2xs inline-flex items-center justify-center gap-1.5">
                <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"></rect><circle cx="12" cy="13" r="5"></circle><path d="M12 10.5c1 .5 1.5 1.5.5 2.5s-1.5 1.5-.5 2.5"></path></svg>
                <span>Dryer</span>
              </button>
              <button onclick="switchProblemTab('dishwasher')" id="tab-btn-dishwasher" class="flex-shrink-0 sm:w-full px-4 py-2.5 rounded-xl text-[13px] sm:text-sm font-bold border border-slate-300 bg-white text-slate-700 hover:border-brandOrange transition-all cursor-pointer whitespace-nowrap text-center shadow-2xs inline-flex items-center justify-center gap-1.5">
                <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"></rect><line x1="4" y1="8" x2="20" y2="8"></line><line x1="8" y1="5.5" x2="11" y2="5.5"></line></svg>
                <span>Dishwasher</span>
              </button>
              <button onclick="switchProblemTab('oven')" id="tab-btn-oven" class="flex-shrink-0 sm:w-full px-4 py-2.5 rounded-xl text-[13px] sm:text-sm font-bold border border-slate-300 bg-white text-slate-700 hover:border-brandOrange transition-all cursor-pointer whitespace-nowrap text-center shadow-2xs inline-flex items-center justify-center gap-1.5">
                <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"></rect><circle cx="8" cy="6" r="1" fill="currentColor"></circle><circle cx="16" cy="6" r="1" fill="currentColor"></circle><rect x="7" y="11" width="10" height="7" rx="1"></rect></svg>
                <span>Oven &amp; Stove</span>
              </button>
              <button onclick="switchProblemTab('microwave')" id="tab-btn-microwave" class="flex-shrink-0 sm:w-full px-4 py-2.5 rounded-xl text-[13px] sm:text-sm font-bold border border-slate-300 bg-white text-slate-700 hover:border-brandOrange transition-all cursor-pointer whitespace-nowrap text-center shadow-2xs inline-flex items-center justify-center gap-1.5">
                <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><rect x="6" y="8" width="9" height="8" rx="1"></rect><line x1="18" y1="9" x2="18" y2="9.01"></line><line x1="18" y1="13" x2="18" y2="13.01"></line></svg>
                <span>Microwave</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Problem Tab Content Container -->
        <div class="max-w-6xl mx-auto">
          
          <!-- TAB 1: FRIDGE -->
          <div id="problem-panel-fridge" class="space-y-4">
            <div class="bg-slate-50/80 -mx-4 sm:mx-0 rounded-none sm:rounded-3xl px-4 py-5 sm:p-7 border-y sm:border border-slate-200/90 shadow-xs">
              
              <div class="mb-4 sm:mb-6 pb-3 sm:pb-4 border-b border-slate-200/80">
                <h3 class="text-lg sm:text-xl font-heading font-extrabold text-brandDarkBlue flex items-center gap-2">
                  Common Refrigerator Faults in <?php echo htmlspecialchars($loc['city_name']); ?>
                </h3>
              </div>

              <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
                <!-- Left: Fault Accordions -->
                <div class="w-full lg:col-span-7 space-y-3">
                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden" open>
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ The Refrigerator is Not Cooling</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      One of the most urgent household problems. Common causes include a failed start relay, malfunctioning compressor inverter board, dust-clogged condenser coils, or a burned-out evaporator fan motor. Our vans carry genuine universal replacement relays and fans for same-day cooling restoration.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Water Leaking Onto the Kitchen Floor</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Usually caused by a blocked or frozen defrost drain line that forces meltwater into the bottom vegetable crispers and onto your hardwood floor. Another frequent cause is a cracked water inlet valve or brittle plastic ice maker tubing.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Strange Clicking, Humming, or Buzzing Noises</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      A clicking sound every few minutes indicates the compressor motor is trying to start but tripping its overload protector. Loud whirring that stops when opening the freezer door points directly to fan blade ice interference or worn motor bearings.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Heavy Frost or Ice Buildup on Freezer Back Wall</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Indicates failure in the automated defrost system — defective bimetal defrost thermostat, open-circuit defrost heating element, or malfunctioning defrost control timer board.
                    </div>
                  </details>
                </div>

                <!-- Right: Dedicated Appliance Image Showcase (Hidden on Mobile) -->
                <div class="hidden lg:flex lg:col-span-5 flex-col gap-3">
                  <div class="rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs bg-white flex flex-col">
                    <div class="h-52 sm:h-60 lg:h-64 overflow-hidden bg-slate-100 relative group">
                      <img src="<?php echo $base_url; ?>img/refrigerator-repair-service.webp" alt="Refrigerator Diagnostics and Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" width="798" height="448" loading="lazy" decoding="async" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 bg-white flex items-center justify-between gap-2 border-t border-slate-100">
                      <div class="min-w-0">
                        <p class="text-xs font-bold text-brandDarkBlue truncate">OEM Parts &amp; Quick Diagnosis</p>
                        <p class="text-[11px] text-slate-500 truncate">Compressor, start relay, inverter &amp; defrost</p>
                      </div>
                      <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1 text-xs font-extrabold text-brandOrange hover:text-orange-600 transition-colors flex-shrink-0">
                        <span>Call Now</span>
                        <span aria-hidden="true">&rarr;</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- TAB 2: WASHER -->
          <div id="problem-panel-washer" class="hidden space-y-4">
            <div class="bg-slate-50/80 -mx-4 sm:mx-0 rounded-none sm:rounded-3xl px-4 py-5 sm:p-7 border-y sm:border border-slate-200/90 shadow-xs">
              
              <div class="mb-4 sm:mb-6 pb-3 sm:pb-4 border-b border-slate-200/80">
                <h3 class="text-lg sm:text-xl font-heading font-extrabold text-brandDarkBlue flex items-center gap-2">
                  Common Washing Machine Faults in <?php echo htmlspecialchars($loc['city_name']); ?>
                </h3>
              </div>

              <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
                <!-- Left: Fault Accordions -->
                <div class="w-full lg:col-span-7 space-y-3">
                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden" open>
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Washer Fails to Drain Water (Standing Water in Drum)</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Usually triggered by small items (coins, socks, hairpins) obstructing the coin trap filter, an impeller broken inside the drain pump, or a kinked discharge hose. Our techs clear obstructions and replace damaged pumps on-site.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Washing Machine Won’t Spin or Agitate</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Can be caused by a defective lid switch lock assembly, broken drive belt, worn motor coupling, or inverter motor control board breakdown.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Excessive Shaking, Banging, or Walking During Spin Cycle</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Common in both top-loaders and front-loaders when suspension damping rods or shock absorbers weaken, or when the rear tub spider arm cracks.
                    </div>
                  </details>
                </div>

                <!-- Right: Dedicated Appliance Image Showcase (Hidden on Mobile) -->
                <div class="hidden lg:flex lg:col-span-5 flex-col gap-3">
                  <div class="rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs bg-white flex flex-col">
                    <div class="h-52 sm:h-60 lg:h-64 overflow-hidden bg-slate-100 relative group">
                      <img src="<?php echo $base_url; ?>img/washing-machine-not-draining-toronto.webp" alt="Washing Machine Repair Diagnosed in <?php echo htmlspecialchars($loc['city_name']); ?>" width="798" height="448" loading="lazy" decoding="async" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 bg-white flex items-center justify-between gap-2 border-t border-slate-100">
                      <div class="min-w-0">
                        <p class="text-xs font-bold text-brandDarkBlue truncate">Drain Pump &amp; Motor Repair</p>
                        <p class="text-[11px] text-slate-500 truncate">Pumps, lid locks, spider arms &amp; belts</p>
                      </div>
                      <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1 text-xs font-extrabold text-brandOrange hover:text-orange-600 transition-colors flex-shrink-0">
                        <span>Call Now</span>
                        <span aria-hidden="true">&rarr;</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- TAB 3: DRYER -->
          <div id="problem-panel-dryer" class="hidden space-y-4">
            <div class="bg-slate-50/80 -mx-4 sm:mx-0 rounded-none sm:rounded-3xl px-4 py-5 sm:p-7 border-y sm:border border-slate-200/90 shadow-xs">
              
              <div class="mb-4 sm:mb-6 pb-3 sm:pb-4 border-b border-slate-200/80">
                <h3 class="text-lg sm:text-xl font-heading font-extrabold text-brandDarkBlue flex items-center gap-2">
                  Common Clothes Dryer Faults in <?php echo htmlspecialchars($loc['city_name']); ?>
                </h3>
              </div>

              <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
                <!-- Left: Fault Accordions -->
                <div class="w-full lg:col-span-7 space-y-3">
                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden" open>
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Dryer Drum Turns but Does Not Heat</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      The most common dryer repair. Usually caused by a broken heating element coil, a tripped non-resettable thermal cutoff fuse, or a failed operating thermostat. In gas dryers, faulty solenoid gas coils or a worn hot-surface igniter are typical culprits.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ High-Pitched Squeaking, Thumping or Grinding Sounds</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Worn drum support rollers, a dry idler pulley bearing, or damaged front drum glides. Replacing these components restores whisper-quiet operation.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Dryer Shuts Off Prematurely After a Few Minutes</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Often a protective safety shutoff triggered by severe exhaust duct lint blockage or a malfunctioning high-limit thermal safety sensor.
                    </div>
                  </details>
                </div>

                <!-- Right: Dedicated Appliance Image Showcase (Hidden on Mobile) -->
                <div class="hidden lg:flex lg:col-span-5 flex-col gap-3">
                  <div class="rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs bg-white flex flex-col">
                    <div class="h-52 sm:h-60 lg:h-64 overflow-hidden bg-slate-100 relative group">
                      <img src="<?php echo $base_url; ?>img/clothes-dryer-repair-service.webp" alt="Dryer Repair Diagnosed in <?php echo htmlspecialchars($loc['city_name']); ?>" width="798" height="448" loading="lazy" decoding="async" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 bg-white flex items-center justify-between gap-2 border-t border-slate-100">
                      <div class="min-w-0">
                        <p class="text-xs font-bold text-brandDarkBlue truncate">Heating &amp; Airflow Restoration</p>
                        <p class="text-[11px] text-slate-500 truncate">Heating coils, thermal fuses &amp; rollers</p>
                      </div>
                      <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1 text-xs font-extrabold text-brandOrange hover:text-orange-600 transition-colors flex-shrink-0">
                        <span>Call Now</span>
                        <span aria-hidden="true">&rarr;</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- TAB 4: DISHWASHER -->
          <div id="problem-panel-dishwasher" class="hidden space-y-4">
            <div class="bg-slate-50/80 -mx-4 sm:mx-0 rounded-none sm:rounded-3xl px-4 py-5 sm:p-7 border-y sm:border border-slate-200/90 shadow-xs">
              
              <div class="mb-4 sm:mb-6 pb-3 sm:pb-4 border-b border-slate-200/80">
                <h3 class="text-lg sm:text-xl font-heading font-extrabold text-brandDarkBlue flex items-center gap-2">
                  Common Dishwasher Faults in <?php echo htmlspecialchars($loc['city_name']); ?>
                </h3>
              </div>

              <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
                <!-- Left: Fault Accordions -->
                <div class="w-full lg:col-span-7 space-y-3">
                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden" open>
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Standing Water at the Bottom of the Tub</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Often caused by a clogged sump filter basin, an obstructed drain flapper check valve, or an electrical failure within the dedicated drain motor.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Dishes Come Out Grimy or White-Filmed</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Signals weak circulation motor pressure, clogged spray arm nozzles, or a burned-out water heating element that prevents water from reaching sanitizing temperatures.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Water Leaking From the Front Door Corner</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Caused by hard water mineral buildup along the perimeter door gasket, split lower door sweep seals, or cracked plastic wash arms spraying directly against the door seam.
                    </div>
                  </details>
                </div>

                <!-- Right: Dedicated Appliance Image Showcase (Hidden on Mobile) -->
                <div class="hidden lg:flex lg:col-span-5 flex-col gap-3">
                  <div class="rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs bg-white flex flex-col">
                    <div class="h-52 sm:h-60 lg:h-64 overflow-hidden bg-slate-100 relative group">
                      <img src="<?php echo $base_url; ?>img/open-dishwasher-repair.webp" alt="Dishwasher Repair Diagnosed in <?php echo htmlspecialchars($loc['city_name']); ?>" width="798" height="448" loading="lazy" decoding="async" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 bg-white flex items-center justify-between gap-2 border-t border-slate-100">
                      <div class="min-w-0">
                        <p class="text-xs font-bold text-brandDarkBlue truncate">Drainage &amp; Wash Cycle Fixes</p>
                        <p class="text-[11px] text-slate-500 truncate">Circulation motor, spray arms &amp; seals</p>
                      </div>
                      <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1 text-xs font-extrabold text-brandOrange hover:text-orange-600 transition-colors flex-shrink-0">
                        <span>Call Now</span>
                        <span aria-hidden="true">&rarr;</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- TAB 5: OVEN -->
          <div id="problem-panel-oven" class="hidden space-y-4">
            <div class="bg-slate-50/80 -mx-4 sm:mx-0 rounded-none sm:rounded-3xl px-4 py-5 sm:p-7 border-y sm:border border-slate-200/90 shadow-xs">
              
              <div class="mb-4 sm:mb-6 pb-3 sm:pb-4 border-b border-slate-200/80">
                <h3 class="text-lg sm:text-xl font-heading font-extrabold text-brandDarkBlue flex items-center gap-2">
                  Common Stove, Range &amp; Oven Faults in <?php echo htmlspecialchars($loc['city_name']); ?>
                </h3>
              </div>

              <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
                <!-- Left: Fault Accordions -->
                <div class="w-full lg:col-span-7 space-y-3">
                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden" open>
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Oven Does Not Heat to Set Temperature</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      A defective bake element, failing temperature sensor probe (RTD), or burned relay contacts on the electronic control board. In gas ovens, an igniter drawing insufficient amperage will fail to open the safety gas valve.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Gas Range Burner Clicks Repeatedly Without Lighting</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Moisture trapped under the burner cap after cleaning, clogged burner gas orifices, or a defective spark electrode / spark module.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Glass Cooktop Element Stays on High Heat</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      A stuck contact inside the infinite heat control switch behind the dial. Our technicians carry standard replacement switches for fast resolution.
                    </div>
                  </details>
                </div>

                <!-- Right: Dedicated Appliance Image Showcase (Hidden on Mobile) -->
                <div class="hidden lg:flex lg:col-span-5 flex-col gap-3">
                  <div class="rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs bg-white flex flex-col">
                    <div class="h-52 sm:h-60 lg:h-64 overflow-hidden bg-slate-100 relative group">
                      <img src="<?php echo $base_url; ?>img/oven-stove-repair-service.webp" alt="Oven and Stove Repair Diagnosed in <?php echo htmlspecialchars($loc['city_name']); ?>" width="798" height="448" loading="lazy" decoding="async" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 bg-white flex items-center justify-between gap-2 border-t border-slate-100">
                      <div class="min-w-0">
                        <p class="text-xs font-bold text-brandDarkBlue truncate">Temperature &amp; Ignition Repair</p>
                        <p class="text-[11px] text-slate-500 truncate">Bake elements, spark igniters &amp; valves</p>
                      </div>
                      <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1 text-xs font-extrabold text-brandOrange hover:text-orange-600 transition-colors flex-shrink-0">
                        <span>Call Now</span>
                        <span aria-hidden="true">&rarr;</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- TAB 6: MICROWAVE -->
          <div id="problem-panel-microwave" class="hidden space-y-4">
            <div class="bg-slate-50/80 -mx-4 sm:mx-0 rounded-none sm:rounded-3xl px-4 py-5 sm:p-7 border-y sm:border border-slate-200/90 shadow-xs">
              
              <div class="mb-4 sm:mb-6 pb-3 sm:pb-4 border-b border-slate-200/80">
                <h3 class="text-lg sm:text-xl font-heading font-extrabold text-brandDarkBlue flex items-center gap-2">
                  Common Microwave Faults in <?php echo htmlspecialchars($loc['city_name']); ?>
                </h3>
              </div>

              <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
                <!-- Left: Fault Accordions -->
                <div class="w-full lg:col-span-7 space-y-3">
                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden" open>
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Microwave Runs but Does Not Heat</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      The most common microwave issue. Usually caused by a failed high-voltage magnetron, shorted high-voltage diode, or blown internal thermal capacitor. Our certified technicians test high-voltage circuitry safely and carry genuine replacement components for same-day resolution.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Sparks or Electrical Arcing Inside Cavity</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Dangerous sparking is typically triggered by carbon burn marks on the mica waveguide cover, chipped cavity paint exposing bare metal, or damaged cooking racks. Replacing the waveguide cover restores safe, spark-free cooking.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Turntable Glass Tray Fails to Rotate</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Results in uneven heating spots. Commonly caused by a worn bottom turntable motor, cracked drive coupler hub, or misaligned roller ring track beneath the glass tray.
                    </div>
                  </details>

                  <details class="group bg-white rounded-xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <summary class="flex items-center justify-between p-4 font-bold text-[15px] sm:text-base text-brandDarkBlue cursor-pointer hover:text-brandOrange select-none">
                      <span class="flex items-center gap-2">⚠️ Microwave Shuts Off After a Few Seconds</span>
                      <span class="text-brandOrange font-bold group-open:rotate-180 transition-transform flex-shrink-0 ml-2">▼</span>
                    </summary>
                    <div class="px-4 pb-4 pt-1 sm:pt-0 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-100">
                      Often caused by defective door interlock micro-switches that signal an open door under vibration, a restricted ventilation blower tripping the thermal protector, or main control board relay degradation.
                    </div>
                  </details>
                </div>

                <!-- Right: Dedicated Appliance Image Showcase (Hidden on Mobile) -->
                <div class="hidden lg:flex lg:col-span-5 flex-col gap-3">
                  <div class="rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs bg-white flex flex-col">
                    <div class="h-52 sm:h-60 lg:h-64 overflow-hidden bg-slate-100 relative group">
                      <img src="<?php echo $base_url; ?>img/microwave-repair.webp" alt="Microwave Repair Diagnosed in <?php echo htmlspecialchars($loc['city_name']); ?>" width="798" height="448" loading="lazy" decoding="async" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 bg-white flex items-center justify-between gap-2 border-t border-slate-100">
                      <div class="min-w-0">
                        <p class="text-xs font-bold text-brandDarkBlue truncate">Magnetron &amp; Cavity Repair</p>
                        <p class="text-[11px] text-slate-500 truncate">Magnetrons, diodes, switches &amp; waveguides</p>
                      </div>
                      <a href="<?php echo $base_url; ?>services/microwave-repair" class="inline-flex items-center gap-1 text-xs font-extrabold text-brandOrange hover:text-orange-600 transition-colors flex-shrink-0">
                        <span>Learn More</span>
                        <span aria-hidden="true">&rarr;</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Bottom Diagnostic Prompt -->
          <div class="mt-6 sm:mt-8 bg-blue-50/80 border border-blue-200/80 rounded-xl sm:rounded-2xl p-4 sm:p-5 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
            <div class="flex items-start sm:items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brandBlue/10 text-brandBlue flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-brandBlue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
              </div>
              <div>
                <h4 class="text-[15px] sm:text-base font-bold text-brandDarkBlue leading-snug">Experiencing one of these appliance symptoms in <?php echo htmlspecialchars($loc['city_name']); ?>?</h4>
                <p class="text-[14px] sm:text-[15px] text-slate-700 leading-relaxed mt-1 font-normal">Describe what’s happening and our local dispatch team will pair you with the right specialist.</p>
              </div>
            </div>
            <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto bg-brandOrange hover:bg-orange-600 text-white font-extrabold text-sm px-6 py-3.5 rounded-xl transition-all shadow-md flex-shrink-0 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
              <span>Call For Same-Day Help</span>
            </a>
          </div>

        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- ========================================================================= -->
    <!-- 5. CHOOSE APPLIANCE REPAIR KNIGHTS: TIME - QUALITY - PRICE                -->
    <!-- ========================================================================= -->
    <section class="py-10 md:py-16 bg-slate-50/70 border-t border-slate-200/80">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        
        <!-- Clean Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-6 sm:mb-10">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border text-xs font-bold tracking-wide uppercase mb-2.5 sm:mb-3" style="background-color: #EFF6FF; border-color: #BFDBFE; color: #0F4C81;">
            <svg class="w-3.5 h-3.5 flex-shrink-0" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0F4C81" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            <span>Our Service Commitment</span>
          </div>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-heading font-extrabold text-slate-900 tracking-tight">
            Why Choose <span class="text-brandBlue">Appliance Repair Knights</span>
          </h2>
          <p class="text-[14px] sm:text-base text-slate-700 mt-2 max-w-xl mx-auto leading-relaxed">
            Quality &amp; reliable in-home repairs across <?php echo htmlspecialchars($loc['city_name']); ?> built on speed, technical precision, and upfront written pricing.
          </p>
        </div>

        <!-- 2-Column Layout with Balanced Spacing -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-8 lg:gap-10 items-stretch">
          
          <!-- Left Column: 3 Cards (TIME, QUALITY, PRICE) -->
          <div class="lg:col-span-7 flex flex-col gap-3.5 sm:gap-4 justify-between">
            
            <!-- Card 1: TIME -->
            <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-5.5 border border-slate-200/80 shadow-2xs hover:shadow-xs transition-all duration-200">
              <div class="flex items-start gap-3.5 sm:gap-4.5">
                <!-- Icon with Explicit SVG & Fallback Styling -->
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl flex items-center justify-center flex-shrink-0 shadow-2xs border mt-0.5" style="background-color: #FFF7ED; border-color: #FED7AA;">
                  <svg class="w-5 h-5 flex-shrink-0" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                  </svg>
                </div>
                
                <div class="min-w-0 flex-1">
                  <div class="flex flex-wrap items-center justify-between gap-1.5 mb-1.5">
                    <div class="flex items-center gap-1.5">
                      <span class="text-xs font-black uppercase tracking-wider text-brandOrange">TIME</span>
                      <span class="text-slate-300">•</span>
                      <h3 class="font-heading font-extrabold text-slate-900 text-[15px] sm:text-base">Prompt In-Home Arrival</h3>
                    </div>
                    <span class="text-[11px] sm:text-xs font-bold text-orange-700 bg-orange-50 border border-orange-200/70 px-2.5 py-0.5 rounded-full uppercase tracking-wide">Daily Dispatch</span>
                  </div>
                  
                  <p class="text-[14px] sm:text-[15px] text-slate-700 leading-relaxed">
                    We understand that your time is valuable. Our priority in <?php echo htmlspecialchars($loc['city_name']); ?> is prompt mobile dispatch and efficient same-day diagnosis with minimal disruption.
                  </p>
                </div>
              </div>
            </div>

            <!-- Card 2: QUALITY -->
            <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-5.5 border border-slate-200/80 shadow-2xs hover:shadow-xs transition-all duration-200">
              <div class="flex items-start gap-3.5 sm:gap-4.5">
                <!-- Icon with Explicit SVG & Fallback Styling -->
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl flex items-center justify-center flex-shrink-0 shadow-2xs border mt-0.5" style="background-color: #ECFDF5; border-color: #A7F3D0;">
                  <svg class="w-5 h-5 flex-shrink-0" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
                </div>
                
                <div class="min-w-0 flex-1">
                  <div class="flex flex-wrap items-center justify-between gap-1.5 mb-1.5">
                    <div class="flex items-center gap-1.5">
                      <span class="text-xs font-black uppercase tracking-wider text-emerald-600">QUALITY</span>
                      <span class="text-slate-300">•</span>
                      <h3 class="font-heading font-extrabold text-slate-900 text-[15px] sm:text-base">Factory OEM Precision</h3>
                    </div>
                    <span class="text-[11px] sm:text-xs font-bold text-emerald-700 bg-emerald-50 border border-emerald-200/70 px-2.5 py-0.5 rounded-full uppercase tracking-wide">OEM Parts</span>
                  </div>
                  
                  <p class="text-[14px] sm:text-[15px] text-slate-700 leading-relaxed">
                    Our technicians are certified across all major brands. We install factory OEM components and back our work with a solid written warranty on parts and labour.
                  </p>
                </div>
              </div>
            </div>

            <!-- Card 3: PRICE -->
            <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-5.5 border border-slate-200/80 shadow-2xs hover:shadow-xs transition-all duration-200">
              <div class="flex items-start gap-3.5 sm:gap-4.5">
                <!-- Icon with Explicit SVG & Fallback Styling -->
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl flex items-center justify-center flex-shrink-0 shadow-2xs border mt-0.5" style="background-color: #EFF6FF; border-color: #BFDBFE;">
                  <svg class="w-5 h-5 flex-shrink-0" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0F4C81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                  </svg>
                </div>
                
                <div class="min-w-0 flex-1">
                  <div class="flex flex-wrap items-center justify-between gap-1.5 mb-1.5">
                    <div class="flex items-center gap-1.5">
                      <span class="text-xs font-black uppercase tracking-wider text-brandBlue">PRICE</span>
                      <span class="text-slate-300">•</span>
                      <h3 class="font-heading font-extrabold text-slate-900 text-[15px] sm:text-base">Upfront Written Transparency</h3>
                    </div>
                    <span class="text-[11px] sm:text-xs font-bold text-brandBlue bg-blue-50 border border-blue-200/70 px-2.5 py-0.5 rounded-full uppercase tracking-wide">Waived Fee</span>
                  </div>
                  
                  <p class="text-[14px] sm:text-[15px] text-slate-700 leading-relaxed">
                    Diagnostic service call fee is completely waived when you proceed with the repair. Our technician provides a clear written quote before repair work starts.
                  </p>
                </div>
              </div>
            </div>

          </div>

          <!-- Right Column: Proportional Photo Card with Specialist Overlay -->
          <div class="lg:col-span-5 relative mt-4 lg:mt-0 flex flex-col justify-center">
            <div class="relative rounded-xl sm:rounded-2xl overflow-hidden border border-slate-200/90 shadow-sm bg-slate-900 h-52 sm:h-72 lg:h-full min-h-[220px] lg:min-h-[440px] flex items-center justify-center group">
              <img src="<?php echo $base_url; ?>img/appliance-repair-knights-brand-expert.webp" alt="Certified Appliance Repair Knights Expert Technician with Kitchen and Laundry Appliances in <?php echo htmlspecialchars($loc['city_name']); ?>" class="w-full h-full object-cover object-center group-hover:scale-[1.02] transition-transform duration-500" width="600" height="480" loading="lazy" decoding="async">
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent pointer-events-none"></div>

              <!-- Bottom Floating Badge: Certified Local Specialists -->
              <div class="absolute bottom-3 left-3 right-3 sm:bottom-4 sm:left-4 sm:right-4 bg-white/95 backdrop-blur-md rounded-xl p-3 sm:p-3.5 border border-white/80 shadow-lg">
                <div class="flex items-center justify-between gap-2.5">
                  <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg flex items-center justify-center flex-shrink-0 border" style="background-color: #EFF6FF; border-color: #BFDBFE;">
                      <svg class="w-4 h-4 flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0F4C81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                      </svg>
                    </div>
                    <div class="min-w-0">
                      <div class="text-sm sm:text-base font-bold text-slate-900 leading-tight truncate">Certified Specialists</div>
                      <div class="text-xs text-slate-600 truncate mt-0.5">Prompt in <?php echo htmlspecialchars($loc['city_name']); ?></div>
                    </div>
                  </div>
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 bg-brandOrange hover:bg-orange-600 text-white font-extrabold text-xs sm:text-sm px-3.5 py-2.5 rounded-lg transition-all shadow-xs flex-shrink-0">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" width="14" height="14" viewBox="0 0 20 20" fill="#ffffff">
                      <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                    </svg>
                    <span>Call</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. TIERED APPLIANCE BRANDS SHOWCASE (Distinctive & High Authority)        -->
    <!-- ========================================================================= -->
    <section class="py-10 md:py-14 bg-white border-t border-slate-200/80">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        
        <!-- Clean Minimalist Header -->
        <div class="text-center max-w-xl mx-auto mb-6 sm:mb-10">
          <span class="text-xs font-bold uppercase tracking-wider text-brandOrange">Universal Compatibility</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900 mt-1 sm:mt-1.5">
            Appliance Brands We Repair in <span class="text-brandBlue"><?php echo htmlspecialchars($loc['city_name']); ?></span>
          </h2>
          <p class="text-[14px] sm:text-base text-slate-700 mt-2 max-w-xl mx-auto leading-relaxed">
            Certified service and genuine OEM replacement parts across major household names, high-end European built-ins, and universal manufacturers.
          </p>
        </div>

        <?php
        $everyday_brands = ['Samsung', 'LG', 'Whirlpool', 'GE Appliances', 'Maytag', 'Frigidaire', 'KitchenAid', 'Kenmore', 'Electrolux', 'Amana'];
        $luxury_brands = ['Bosch', 'Miele', 'Sub-Zero', 'Wolf', 'Thermador', 'JennAir', 'Gaggenau', 'Asko', 'Bertazzoni', 'Viking', 'Dacor'];
        $universal_brands = ['Blomberg', 'Fisher &amp; Paykel', 'Danby', 'Haier', 'Inglis', 'Hotpoint', 'Speed Queen', 'Panasonic', 'Siemens', 'Liebherr', 'U-Line'];
        ?>

        <!-- 3-Tier Authority Grid -->
        <div class="tiered-brands-grid max-w-5xl mx-auto">
          
          <!-- Tier 1: Everyday Household -->
          <div class="bg-slate-50/70 border border-slate-200/90 rounded-xl sm:rounded-2xl p-4 sm:p-5 hover:border-brandBlue/40 transition-all flex flex-col justify-between shadow-2xs">
            <div>
              <div class="flex items-center gap-2.5 sm:gap-3 mb-3">
                <div class="w-8 h-8 rounded-lg bg-blue-50 text-brandBlue flex items-center justify-center flex-shrink-0 border border-blue-100">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-bold text-slate-900 text-sm sm:text-base font-heading">Everyday Essentials</h3>
                  <p class="text-slate-600 text-xs leading-tight mt-0.5">Popular GTA Kitchen &amp; Laundry</p>
                </div>
              </div>
              <div class="flex flex-wrap gap-2 pt-0.5">
                <?php foreach ($everyday_brands as $b): ?>
                  <span class="px-2.5 py-1.5 rounded-lg bg-white border border-slate-200/80 text-slate-800 hover:text-brandBlue hover:border-brandBlue/40 text-xs sm:text-[13px] font-semibold transition-all shadow-2xs cursor-default">
                    <?php echo $b; ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Tier 2: Luxury & European -->
          <div class="bg-slate-50/70 border border-slate-200/90 rounded-xl sm:rounded-2xl p-4 sm:p-5 hover:border-brandOrange/40 transition-all flex flex-col justify-between shadow-2xs">
            <div>
              <div class="flex items-center gap-2.5 sm:gap-3 mb-3">
                <div class="w-8 h-8 rounded-lg bg-orange-50 text-brandOrange flex items-center justify-center flex-shrink-0 border border-orange-100">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-bold text-slate-900 text-sm sm:text-base font-heading">Luxury &amp; European</h3>
                  <p class="text-slate-600 text-xs leading-tight mt-0.5">Built-In &amp; Precision Specialists</p>
                </div>
              </div>
              <div class="flex flex-wrap gap-2 pt-0.5">
                <?php foreach ($luxury_brands as $b): ?>
                  <span class="px-2.5 py-1.5 rounded-lg bg-white border border-slate-200/80 text-slate-800 hover:text-brandOrange hover:border-brandOrange/40 text-xs sm:text-[13px] font-semibold transition-all shadow-2xs cursor-default">
                    <?php echo $b; ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Tier 3: Universal OEM Coverage -->
          <div class="bg-slate-50/70 border border-slate-200/90 rounded-xl sm:rounded-2xl p-4 sm:p-5 hover:border-emerald-500/40 transition-all flex flex-col justify-between shadow-2xs">
            <div>
              <div class="flex items-center gap-2.5 sm:gap-3 mb-3">
                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 border border-emerald-100">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-bold text-slate-900 text-sm sm:text-base font-heading">Universal OEM Network</h3>
                  <p class="text-slate-600 text-xs leading-tight mt-0.5">Direct Ontario Parts Supply</p>
                </div>
              </div>
              <div class="flex flex-wrap gap-2 pt-0.5">
                <?php foreach ($universal_brands as $b): ?>
                  <span class="px-2.5 py-1.5 rounded-lg bg-white border border-slate-200/80 text-slate-800 hover:text-emerald-600 hover:border-emerald-500/40 text-xs sm:text-[13px] font-semibold transition-all shadow-2xs cursor-default">
                    <?php echo $b; ?>
                  </span>
                <?php endforeach; ?>
                <span class="px-2.5 py-1.5 rounded-lg bg-orange-50 border border-orange-200 text-brandOrange text-xs sm:text-[13px] font-bold shadow-2xs">
                  + All Other Makes
                </span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. SERVICE AREAS (Minimalist Pattern per Competitor Screenshot)           -->
    <!-- ========================================================================= -->
    <?php
      // Build unified alphabetical service areas list for the clean minimalist layout
      $loc_link_prefix = basename($_SERVER['PHP_SELF']) === 'test-location.php' ? 'test-location.php?slug=' : $base_url . 'locations/';
      $service_areas_list = [];

      // 1. All regional cities from dataset
      foreach ($all_locations as $c_slug => $c_data) {
        $c_name = $c_data['city_name'];
        $service_areas_list[$c_name] = [
          'name' => $c_name,
          'url' => $loc_link_prefix . urlencode($c_slug),
          'is_current' => ($c_slug === $slug),
        ];
      }

      // 2. City local neighborhoods (if present)
      if (!empty($loc['neighborhoods'])) {
        foreach ($loc['neighborhoods'] as $nb) {
          if (!isset($service_areas_list[$nb])) {
            $service_areas_list[$nb] = [
              'name' => $nb,
              'url' => '#quick-booking',
              'is_current' => false,
            ];
          }
        }
      }

      // Sort alphabetically by name
      ksort($service_areas_list);
    ?>
    <section class="py-10 md:py-14 bg-slate-50/60 border-t border-slate-200/80">
      <div class="max-w-5xl mx-auto px-4 sm:px-6">
        
        <!-- Section Header (Uniform with Brands, FAQs, and Appliance Grid) -->
        <div class="text-center max-w-xl mx-auto mb-6 sm:mb-10">
          <span class="text-xs font-bold uppercase tracking-wider text-brandOrange">Regional Coverage</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900 mt-1 sm:mt-1.5">
            Service Areas in <span class="text-brandBlue"><?php echo htmlspecialchars($loc['city_name']); ?></span> &amp; GTA
          </h2>
          <p class="text-[14px] sm:text-base text-slate-700 mt-2 max-w-xl mx-auto leading-relaxed">
            Our appliance repair technicians service locations across <?php echo htmlspecialchars($loc['city_name']); ?> and surrounding Greater Toronto &amp; Southern Ontario communities, including:
          </p>
        </div>

        <!-- Clean Multi-Column Bullet List: Orange Bullet Dots + Screenshot Text Color -->
        <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-x-4 sm:gap-x-6 gap-y-2 sm:gap-y-2.5 text-left">
          <?php foreach ($service_areas_list as $area): ?>
            <li class="flex items-center gap-1.5 min-w-0">
              <span class="text-brandOrange text-base leading-none select-none">•</span>
              <a href="<?php echo htmlspecialchars($area['url']); ?>" 
                 class="text-[13.5px] sm:text-[14.5px] font-medium text-[#558b2f] hover:text-brandOrange hover:underline truncate transition-colors <?php echo $area['is_current'] ? 'font-bold' : ''; ?>">
                <?php echo htmlspecialchars($area['name']); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 9. LOCAL FAQS SECTION (Schema FAQPage ready)                              -->
    <!-- ========================================================================= -->
    <?php if (!empty($loc['faqs'])): ?>
    <section class="py-10 md:py-14 bg-white border-t border-slate-200/80">
      <div class="max-w-4xl mx-auto px-4">
        
        <div class="text-center mb-6 sm:mb-10">
          <span class="text-xs font-black uppercase text-brandOrange tracking-widest">Clear Answers</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-brandDarkBlue mt-1">
            Frequently Asked Questions – <?php echo htmlspecialchars($loc['city_name']); ?> Appliance Repair
          </h2>
          <p class="text-[14px] sm:text-base text-slate-700 mt-2 max-w-xl mx-auto leading-relaxed">Have a question before booking? Here are transparent answers to common inquiries.</p>
        </div>

        <div class="space-y-3">
          <?php foreach ($loc['faqs'] as $index => $faq): ?>
            <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
              <button onclick="toggleTestFAQ('test-faq-<?php echo $index; ?>')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
                <span class="flex items-center gap-2">
                  <span class="text-brandOrange font-black">Q.</span>
                  <span><?php echo htmlspecialchars($faq['q']); ?></span>
                </span>
                <span id="test-faq-icon-<?php echo $index; ?>" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3"><?php echo $index === 0 ? '−' : '+'; ?></span>
              </button>
              <div id="test-faq-<?php echo $index; ?>" class="<?php echo $index === 0 ? 'block' : 'hidden'; ?> px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
                <?php echo htmlspecialchars($faq['a']); ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Post-FAQ CTA -->
        <div class="mt-8 sm:mt-10 text-center space-y-2.5">
          <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-brandOrange hover:bg-orange-600 text-white font-extrabold px-6 py-3.5 rounded-xl text-sm sm:text-base shadow-md hover:shadow-lg transition-all uppercase tracking-wide">
            <svg class="w-4 h-4 animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            <span>Have Questions? Call 905-717-8905</span>
          </a>
          <p class="text-xs sm:text-[13px] text-slate-600 font-semibold flex items-center justify-center gap-2 flex-wrap">
            <span>🛡️ Diagnostic Fee Waived With Repairs</span>
            <span class="text-slate-300">•</span>
            <span>Speak Directly With a Technician</span>
            <span class="text-slate-300">•</span>
            <span>Same-Day Availability</span>
          </p>
        </div>

      </div>
    </section>
    <?php endif; ?>

    <!-- ========================================================================= -->
    <!-- 10. HIGH-IMPACT CLOSING CALL TO ACTION BANNER                             -->
    <!-- ========================================================================= -->
    <section class="text-white py-10 md:py-14 border-t border-slate-800" style="background: linear-gradient(135deg, #06223B 0%, #0F4C81 100%);">
      <div class="max-w-7xl mx-auto px-4 text-center space-y-4 sm:space-y-5">
        <span class="text-xs font-black uppercase text-amber-300 tracking-widest">Fast Reliable Resolution</span>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-extrabold leading-tight">
          Ready to Get Your Appliance Working in <span class="text-brandOrange"><?php echo htmlspecialchars($loc['city_name']); ?></span>?
        </h2>
        <p class="text-slate-200 max-w-xl mx-auto text-[14px] sm:text-base leading-relaxed">
          Book online in under 60 seconds or call our local dispatch hotline now. Diagnostic service call fee is completely waived when you proceed with your repair.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2">
          <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto bg-brandOrange hover:bg-orange-600 text-white font-extrabold text-sm sm:text-base px-7 py-3.5 rounded-xl shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            <span>Call 905-717-8905</span>
          </a>
          <a href="#quick-booking" class="w-full sm:w-auto bg-white/10 hover:bg-white/20 text-white font-bold text-sm sm:text-base px-6 py-3.5 rounded-xl border border-white/25 transition-all text-center">
            Book In-Home Appointment
          </a>
        </div>
      </div>
    </section>

  </main>

  <?php include __DIR__ . '/../footer.php'; ?>

  <!-- Interactive Scripts for Prototype -->
  <script>
    // FAQ Toggle
    function toggleTestFAQ(id) {
      const el = document.getElementById(id);
      const icon = document.getElementById(id.replace('test-faq-', 'test-faq-icon-'));
      if (!el) return;
      if (el.classList.contains('hidden')) {
        el.classList.remove('hidden');
        el.classList.add('block');
        if (icon) icon.textContent = '−';
      } else {
        el.classList.add('hidden');
        el.classList.remove('block');
        if (icon) icon.textContent = '+';
      }
    }

    // Problem Tab Switcher
    function switchProblemTab(tabKey) {
      const panels = ['fridge', 'washer', 'dryer', 'dishwasher', 'oven', 'microwave'];
      panels.forEach(function(p) {
        const panelEl = document.getElementById('problem-panel-' + p);
        const btnEl = document.getElementById('tab-btn-' + p);
        if (panelEl) {
          if (p === tabKey) {
            panelEl.classList.remove('hidden');
            panelEl.classList.add('block');
          } else {
            panelEl.classList.add('hidden');
            panelEl.classList.remove('block');
          }
        }
        if (btnEl) {
          if (p === tabKey) {
            btnEl.classList.add('test-pill-active');
            try {
              btnEl.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
            } catch(e) {}
          } else {
            btnEl.classList.remove('test-pill-active');
          }
        }
      });
    }
  </script>

</body>
</html>
