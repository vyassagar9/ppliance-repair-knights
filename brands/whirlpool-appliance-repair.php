<?php
require_once __DIR__ . '/../config.php';
$all_locations = require __DIR__ . '/../locations/location-data.php';

$base_url = '../';
$current_page = 'brands';
$page_title = 'Whirlpool Appliance Repair Toronto & GTA | Same-Day Certified Service';
$page_description = 'Looking for reliable Whirlpool appliance repair near you? Certified same-day diagnostics across Toronto & GTA for Whirlpool washers, fridges, dryers, dishwashers & ovens. Call 905-717-8905!';
$page_keywords = 'whirlpool appliance repair, whirlpool washer repair, whirlpool dryer repair, whirlpool fridge repair, whirlpool dishwasher repair toronto, whirlpool repair near me, whirlpool error code f21';
$canonical_url = 'https://www.appliancerepairknights.com/brands/whirlpool-appliance-repair';

$gmb_rating = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '15';

$custom_head_schema = <<<HTML
  <!-- UNIFIED JSON-LD SCHEMA (@graph: LocalBusiness + Service + BreadcrumbList) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": ["LocalBusiness", "HomeAndConstructionBusiness"],
        "@id": "https://www.appliancerepairknights.com/#organization",
        "name": "Appliance Repair Knights Ltd.",
        "url": "https://www.appliancerepairknights.com/",
        "logo": "https://www.appliancerepairknights.com/img/logo.webp",
        "image": "https://www.appliancerepairknights.com/img/appliance-repair-banner.webp",
        "telephone": "905-717-8905",
        "email": "info@appliancerepairknights.com",
        "priceRange": "$$",
        "hasMap": "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059",
        "sameAs": [
          "https://www.facebook.com/Appliancerepairknights",
          "https://www.instagram.com/appliancerepairknights/",
          "https://www.tiktok.com/@appliance.service1",
          "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059"
        ],
        "knowsAbout": [
          "Whirlpool Appliance Repair",
          "Whirlpool Washing Machine Repair",
          "Whirlpool Cabrio Washer Repair",
          "Whirlpool Duet Front Load Washer Repair",
          "Whirlpool Refrigerator Repair",
          "Whirlpool French Door Fridge Diagnostics",
          "Whirlpool Dryer Heating Element Repair",
          "Whirlpool TotalCoverage Dishwasher Repair",
          "Whirlpool AccuBake Stove and Oven Repair",
          "Whirlpool Error Code F21 Drain Diagnostics",
          "Whirlpool Error Code F5E2 Lid Lock Replacement"
        ],
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "100 King St W",
          "addressLocality": "Toronto",
          "addressRegion": "ON",
          "postalCode": "M5X 1A9",
          "addressCountry": "CA"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 43.6487,
          "longitude": -79.3817
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "{$gmb_rating}",
          "reviewCount": "{$gmb_reviews}"
        }
      },
      {
        "@type": "Service",
        "@id": "https://www.appliancerepairknights.com/brands/whirlpool-appliance-repair#service",
        "name": "Whirlpool Appliance Repair in the Greater Toronto Area (GTA)",
        "serviceType": "Whirlpool Household Appliance Diagnostic & Repair",
        "provider": {
          "@id": "https://www.appliancerepairknights.com/#organization"
        },
        "areaServed": [
          { "@type": "City", "name": "Toronto" },
          { "@type": "City", "name": "Mississauga" },
          { "@type": "City", "name": "Brampton" },
          { "@type": "City", "name": "Vaughan" },
          { "@type": "City", "name": "Markham" },
          { "@type": "City", "name": "Richmond Hill" },
          { "@type": "City", "name": "Oakville" },
          { "@type": "City", "name": "Burlington" },
          { "@type": "City", "name": "Hamilton" },
          { "@type": "City", "name": "Milton" },
          { "@type": "City", "name": "Oshawa" },
          { "@type": "City", "name": "Barrie" }
        ],
        "description": "Certified same-day Whirlpool appliance repair across Toronto and the GTA. Professional diagnostics for Whirlpool Cabrio and Duet washers, French door refrigerators, dryers, dishwashers, and AccuBake ranges.",
        "offers": {
          "@type": "Offer",
          "priceCurrency": "CAD",
          "price": "0",
          "priceSpecification": {
            "@type": "UnitPriceSpecification",
            "priceCurrency": "CAD",
            "price": "0",
            "name": "Diagnostic Fee Waived with Repair",
            "description": "Our transparent diagnostic inspection fee is completely waived when you proceed with your Whirlpool repair."
          }
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://www.appliancerepairknights.com/brands/whirlpool-appliance-repair#breadcrumb",
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
            "name": "Brands We Repair",
            "item": "https://www.appliancerepairknights.com/brands"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Whirlpool Appliance Repair",
            "item": "https://www.appliancerepairknights.com/brands/whirlpool-appliance-repair"
          }
        ]
      }
    ]
  }
  </script>

  <!-- DEDICATED FAQPage JSON-LD SCHEMA (Google Voice Search & Rich Snippets Ready) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.appliancerepairknights.com/brands/whirlpool-appliance-repair#faq",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How quickly can a Whirlpool appliance repair technician near me arrive?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide prompt same-day service across Toronto, Mississauga, Brampton, Vaughan, Oakville, Burlington, Hamilton, and the Greater Toronto Area based on daily scheduling availability. Our mobile service vans stock genuine factory-grade Whirlpool replacement components—including shift actuators, lid locks, drain pumps, thermal fuses, and heating elements—allowing most repairs to be completed on the first visit."
        }
      },
      {
        "@type": "Question",
        "name": "Why is my Whirlpool washer flashing error code F02 or F21?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Error codes F02 and F21 indicate a long drain timeout on Whirlpool washing machines—the control board detects that water cannot be pumped out within the standard time limit. Common causes include a foreign object blocking the pump impeller, a clogged coin trap filter, a kinked drain hose, or a failed drain pump motor. Our certified technicians inspect the drainage circuit, clear blockages safely, and replace failing pump assemblies on-site."
        }
      },
      {
        "@type": "Question",
        "name": "What causes error code F5E2 on a Whirlpool washing machine?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Error code F5E2 signals a lid lock failure—the control board cannot lock or verify the closed status of the washer lid. Because modern Whirlpool washers disable the spin and agitate cycles when the safety lid latch is compromised, our technicians test the lid lock solenoid, wiring harness, and strike bezel to install a genuine replacement assembly."
        }
      },
      {
        "@type": "Question",
        "name": "Why is my Whirlpool dryer tumbling but producing zero heat?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "When a Whirlpool dryer tumbles without generating heat, the primary cause is a burned-out 240V dual heating element coil, a tripped thermal cutoff fuse, or a failed cycling thermostat. Our technicians test component continuity with precision multimeters, verify exhaust vent airflow to prevent dangerous lint buildup, and replace burnt heating coils on-site."
        }
      },
      {
        "@type": "Question",
        "name": "Why is water pooling under the crisper drawers of my Whirlpool refrigerator?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Water pooling under the bottom crisper drawers in Whirlpool French door and side-by-side refrigerators is typically caused by a clogged or frozen defrost drain tube grommet (often called the duckbill valve). When condensation cannot flow into the drain pan beneath the compressor, it backs up into the fresh food compartment and freezes into a solid sheet of ice. Our technicians clear the drain line, install an updated drain grommet, and inspect the defrost thermostat."
        }
      },
      {
        "@type": "Question",
        "name": "Do you use genuine quality parts for Whirlpool appliance repairs?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We source and install genuine quality, manufacturer-approved replacement parts engineered specifically for Whirlpool household appliances. Every replacement part and labour procedure is backed by our comprehensive written warranty."
        }
      },
      {
        "@type": "Question",
        "name": "How does the diagnostic service call fee work for Whirlpool repairs?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our diagnostic service call fee covers complete on-site inspection, digital error code retrieval, and electrical component testing on your Whirlpool appliance. When you approve and proceed with the recommended repair, this service call fee is completely waived. You only pay for the necessary replacement parts and repair labour detailed in your transparent, upfront written quote."
        }
      }
    ]
  }
  </script>

  <style>
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    #appliance-scroll-row {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 0.75rem;
    }
    .appliance-carousel-card {
      width: 100%;
    }
    #appliance-track-wrapper {
      display: none;
    }
    @media (min-width: 640px) {
      #appliance-scroll-row {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        overflow-x: auto !important;
        gap: 1rem !important;
        padding-top: 0.25rem;
        padding-bottom: 0.5rem;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
        cursor: grab;
      }
      #appliance-scroll-row:active {
        cursor: grabbing;
      }
      .appliance-carousel-card {
        flex: 0 0 calc((100% - 2rem) / 3) !important;
        width: calc((100% - 2rem) / 3) !important;
        min-width: 170px !important;
        scroll-snap-align: start;
      }
      #appliance-track-wrapper {
        display: flex !important;
      }
    }
    @media (min-width: 1024px) {
      .appliance-carousel-card {
        flex: 0 0 calc((100% - 5rem) / 6) !important;
        width: calc((100% - 5rem) / 6) !important;
        min-width: 0 !important;
      }
    }
  </style>
HTML;

include __DIR__ . '/../head.php';
?>

<body class="bg-white text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white">

<?php include __DIR__ . '/../header.php'; ?>

  <!-- BREADCRUMBS -->
  <nav class="bg-slate-50 border-b border-slate-200/80 py-2.5 sm:py-3" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-xs font-semibold text-slate-600 flex items-center gap-1.5 sm:gap-2">
      <a href="<?php echo $base_url; ?>" class="text-slate-500 hover:text-brandOrange transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <a href="<?php echo $base_url; ?>brands" class="text-slate-500 hover:text-brandOrange transition-colors">Brands We Service</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-brandBlue font-bold">Whirlpool Appliance Repair</span>
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
              <span class="text-xs font-black tracking-wider uppercase text-brandDarkBlue">Same-Day Dispatch &bull; <span class="text-brandOrange">Whirlpool Brand Specialists</span></span>
            </div>

            <!-- Crisp High-Impact H1 -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-black tracking-tight leading-[1.18] text-slate-900">
              Whirlpool <span class="text-brandBlue">Appliance Repair Services</span> in the Greater Toronto Area
            </h1>

            <!-- Scannable Subtitle with Voice Search & Local Entity Trigger -->
            <p class="text-[14px] sm:text-base text-slate-700 max-w-xl mx-auto lg:mx-0 leading-relaxed font-normal">
              Looking for reliable Whirlpool appliance repair near you in Toronto, Mississauga, Brampton, or across the GTA? We provide fast, certified same-day diagnostics for Whirlpool Cabrio and Duet washing machines, French door refrigerators, dryers, dishwashers, and AccuBake ranges. Diagnostic service call fee is completely waived when you proceed with your repair.
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
                <span>Certified Technicians</span>
              </div>
            </div>

            <!-- Primary Actions (Call & Anchor to Form) -->
            <div class="flex flex-col sm:flex-row items-center gap-2.5 pt-1 justify-center lg:justify-start">
              <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-brandOrange hover:bg-orange-600 text-white font-extrabold px-6 py-3.5 rounded-xl text-sm sm:text-base shadow-md shadow-brandOrange/20 transition-all uppercase tracking-wide cursor-pointer">
                <svg class="w-4 h-4 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <span>Call (905) 717-8905</span>
              </a>

              <a href="#quick-booking" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-brandDarkBlue border border-slate-300 font-bold px-5 py-3.5 rounded-xl text-sm sm:text-base shadow-2xs transition-all">
                <span>Request Whirlpool Service</span>
                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </a>
            </div>

          </div>

          <!-- Hero Right: Interactive Quote Form (5 cols) -->
          <div id="quick-booking" class="lg:col-span-5">
            <?php 
              $defaultAppliance = 'Washing Machine'; 
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
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Same-Day Dispatch</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Toronto, Mississauga, Brampton &amp; GTA</span>
            </div>
          </div>

          <div class="flex items-center justify-center sm:justify-start gap-2.5">
            <div class="w-9 h-9 sm:w-8 sm:h-8 rounded-lg bg-blue-50 text-brandBlue flex items-center justify-center flex-shrink-0 border border-blue-100">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div class="text-left">
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Licensed &amp; Insured</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Certified Whirlpool technicians</span>
            </div>
          </div>

          <div class="flex items-center justify-center sm:justify-start gap-2.5">
            <div class="w-9 h-9 sm:w-8 sm:h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 border border-emerald-100">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
            </div>
            <div class="text-left">
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Factory-Grade Parts</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Genuine quality replacements</span>
            </div>
          </div>

          <div class="flex items-center justify-center sm:justify-start gap-2.5">
            <div class="w-9 h-9 sm:w-8 sm:h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center flex-shrink-0 border border-amber-100">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="text-left">
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Diagnostic Waived</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Fee waived with repair</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. WHIRLPOOL APPLIANCES CAROUSEL / GRID (With Internal Links)             -->
    <!-- ========================================================================= -->
    <section class="py-10 md:py-14 bg-white border-b border-slate-200/80">
      <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center max-w-2xl mx-auto mb-6 sm:mb-10">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-50 border border-orange-200/70 text-brandOrange text-xs font-bold tracking-wide uppercase mb-2 sm:mb-3">
            <svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
            <span>Certified Brand Coverage</span>
          </div>

          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-heading font-extrabold text-slate-900 tracking-tight">
            Whirlpool Appliance Repair in the <span class="text-brandBlue">Greater Toronto Area (GTA)</span>
          </h2>

          <p class="text-[14px] sm:text-base text-slate-700 mt-2 leading-relaxed font-normal">
            Fast, dependable diagnostics and same-day on-site repairs across all Whirlpool kitchen and laundry systems.
          </p>
        </div>

        <!-- Appliances Carousel / Scrollable Row with 6 Items -->
        <div class="relative group/scroll">
          <div id="appliance-scroll-row" class="no-scrollbar select-none">
            
            <!-- Item 1: Washing Machine (Whirlpool Core Hero) -->
            <a href="<?php echo $base_url; ?>services/washer-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-washer.webp" alt="Whirlpool Washing Machine Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Washing Machine Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">Cabrio &bull; Duet &bull; F21 / F5E2</span>
              </div>
            </a>

            <!-- Item 2: Refrigerator -->
            <a href="<?php echo $base_url; ?>services/fridge-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-refrigerator.webp" alt="Whirlpool Refrigerator Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Refrigerator Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">French Door &bull; Defrost Drain</span>
              </div>
            </a>

            <!-- Item 3: Dryer -->
            <a href="<?php echo $base_url; ?>services/dryer-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-dryer.webp" alt="Whirlpool Clothes Dryer Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Dryer Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">Thermal Fuse &bull; Element Coils</span>
              </div>
            </a>

            <!-- Item 4: Dishwasher -->
            <a href="<?php echo $base_url; ?>services/dishwasher-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-dishwasher.webp" alt="Whirlpool Dishwasher Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Dishwasher Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">TotalCoverage &bull; Wash Pump</span>
              </div>
            </a>

            <!-- Item 5: Range & Oven -->
            <a href="<?php echo $base_url; ?>services/stove-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-stove.webp" alt="Whirlpool Range and Oven Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Range &amp; Oven Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">AccuBake &bull; Bake Elements</span>
              </div>
            </a>

            <!-- Item 6: Microwave -->
            <a href="<?php echo $base_url; ?>services/microwave-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-microwave.webp" alt="Whirlpool Microwave Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Microwave Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">Over-The-Range &bull; Diode / Switch</span>
              </div>
            </a>

          </div>

          <!-- Carousel Controls -->
          <div id="appliance-track-wrapper" class="mt-4 sm:mt-5 items-center justify-center gap-3">
            <button type="button" id="appliance-scroll-left" class="w-8 h-8 rounded-full bg-white border border-slate-200 text-slate-600 hover:text-brandOrange hover:border-brandOrange flex items-center justify-center shadow-xs transition-colors cursor-pointer" aria-label="Scroll left">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
            </button>
            
            <div id="appliance-scroll-track" class="w-48 sm:w-64 md:w-80 h-2 bg-slate-200/90 rounded-full overflow-hidden relative cursor-pointer shadow-inner">
              <div id="appliance-scroll-thumb" class="h-full bg-brandOrange rounded-full transition-all duration-75 ease-out shadow-xs" style="width: 35%; transform: translateX(0%);"></div>
            </div>

            <button type="button" id="appliance-scroll-right" class="w-8 h-8 rounded-full bg-white border border-slate-200 text-slate-600 hover:text-brandOrange hover:border-brandOrange flex items-center justify-center shadow-xs transition-colors cursor-pointer" aria-label="Scroll right">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </button>
          </div>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. ERROR CODE QUICK REFERENCE MATRIX (Clean, No DIY Solutions)             -->
    <!-- ========================================================================= -->
    <section class="py-10 md:py-14 bg-white border-t border-slate-200/80">
      <div class="max-w-4xl mx-auto px-4 sm:px-6">
        
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10">
          <span class="text-xs font-bold uppercase tracking-widest text-brandOrange">Troubleshooting Matrix</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900 mt-2">
            Whirlpool Error Code Quick Reference Guide
          </h2>
          <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
            If your Whirlpool digital display is flashing an alphanumeric error code, professional diagnostic testing is required to protect internal motors and restore reliable operation:
          </p>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto rounded-2xl border border-slate-200 shadow-2xs mb-6">
          <table class="w-full text-left text-xs sm:text-sm border-collapse">
            <thead>
              <tr class="bg-slate-900 text-white font-heading">
                <th class="py-3.5 px-4 sm:px-6 font-bold">Error Code</th>
                <th class="py-3.5 px-4 sm:px-6 font-bold">Appliance &amp; Fault Description</th>
                <th class="py-3.5 px-4 sm:px-6 font-bold text-right">Immediate Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700 bg-white">
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">F02 / F21</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Washer (Drain Time Exceeded / Pump Impeller Blocked)</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">F5E2</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Washer (Lid Lock Mechanism Will Not Engage)</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">uL</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Washer (Unbalanced Load / Suspension Rod Dampers Worn)</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">E1 / F9</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Dishwasher (Slow Drain / Float Switch Actuation)</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">F01</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Washer / Dryer (Central Control Board Communication Failure)</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">F3E1</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Range &amp; Oven (Bake Oven Temperature Sensor Shorted)</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="bg-amber-50 border border-amber-200/80 rounded-2xl p-4 sm:p-5 flex items-start gap-3.5">
          <svg class="w-5 h-5 text-amber-700 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <div class="text-xs sm:text-sm text-amber-900 leading-relaxed">
            <strong>Important Safety Notice:</strong> While error codes indicate the affected electronic subsystem, testing high-voltage circuits, drive motors, and thermal cutoffs carries significant electrical hazard and flood risk. For your safety and appliance warranty protection, certified in-home diagnosis is strongly recommended.
          </div>
        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. SERVICE AREAS INTERNAL LINKING GRID (Massive SEO Mesh)                 -->
    <!-- ========================================================================= -->
    <section class="py-10 md:py-14 bg-white border-t border-slate-200/80">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10">
          <span class="text-xs font-bold uppercase tracking-wider text-brandOrange">Regional Coverage</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900 mt-1 sm:mt-1.5">
            Whirlpool Repair Service Areas Across the <span class="text-brandBlue">GTA &amp; Southern Ontario</span>
          </h2>
          <p class="text-[14px] sm:text-base text-slate-600 mt-2 max-w-xl mx-auto leading-relaxed">
            Our certified mobile technicians carry genuine factory-grade Whirlpool replacement parts across Toronto, Mississauga, Brampton, Vaughan, Markham, Oakville, Burlington, and surrounding GTA communities:
          </p>
        </div>

        <!-- 20-City Internal Linking Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-y-3.5 gap-x-6 text-sm sm:text-base">
          <?php foreach ($all_locations as $c_slug => $c_data): ?>
            <a href="<?php echo $base_url . 'locations/' . urlencode($c_slug); ?>" 
               class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors"
               title="Appliance Repair <?php echo htmlspecialchars($c_data['city_name']); ?>">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange flex-shrink-0"></span>
              <span class="truncate sm:overflow-visible"><?php echo htmlspecialchars($c_data['city_name']); ?></span>
            </a>
          <?php endforeach; ?>
        </div>

        <p class="text-xs text-slate-500 text-center pt-5 sm:pt-6 mt-8 sm:mt-10 border-t border-slate-200/80">
          Don't see your specific community? We dispatch mobile service vans daily across Toronto, Peel, York, Halton, Durham, and Waterloo regions. Call <a href="tel:9057178905" class="gtm-web-call text-brandOrange font-bold hover:underline">905-717-8905</a> to confirm immediate technician dispatch.
        </p>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. REVIEWS WIDGET                                                         -->
    <!-- ========================================================================= -->
    <?php include __DIR__ . '/../reviews-widget.php'; ?>

    <!-- ========================================================================= -->
    <!-- 7. FAQS SECTION (Schema FAQPage ready with Interactive Toggle)            -->
    <!-- ========================================================================= -->
    <section class="py-10 md:py-14 bg-white border-t border-slate-200/80">
      <div class="max-w-4xl mx-auto px-4">
        
        <div class="text-center mb-6 sm:mb-10">
          <span class="text-xs font-black uppercase text-brandOrange tracking-widest">Clear Answers</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-brandDarkBlue mt-1">
            Frequently Asked Questions – Whirlpool Appliance Repair
          </h2>
          <p class="text-[14px] sm:text-base text-slate-700 mt-2 max-w-xl mx-auto leading-relaxed">
            Have a question before booking your Whirlpool repair? Here are transparent answers to common inquiries.
          </p>
        </div>

        <div class="space-y-3">
          
          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('whirlpool-faq-0')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>How quickly can a Whirlpool appliance repair technician near me arrive?</span>
              </span>
              <span id="whirlpool-faq-icon-0" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">−</span>
            </button>
            <div id="whirlpool-faq-0" class="block px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              We provide prompt same-day service across Toronto, Mississauga, Brampton, Vaughan, Oakville, Burlington, Hamilton, and the Greater Toronto Area based on daily scheduling availability. Our mobile service units carry genuine Whirlpool factory-grade replacement components—including shift actuators, drain pumps, thermal fuses, and electronic control modules—allowing most repairs to be completed in a single visit.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('whirlpool-faq-1')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Why is my Whirlpool washer making a loud buzzing noise and not draining?</span>
              </span>
              <span id="whirlpool-faq-icon-1" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="whirlpool-faq-1" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              A loud humming or buzzing sound combined with standing water in the tub typically indicates a jammed or burned-out drain pump. Small items such as coins, socks, or debris often bypass the tub seal and lodge in the pump impeller chamber. If the pump runs while jammed, the electric motor can overheat and fail. Our technicians safely access the lower pump housing, extract obstructions, and replace damaged pump assemblies.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('whirlpool-faq-2')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Why is my Whirlpool Cabrio washer shaking violently on spin cycle (uL error)?</span>
              </span>
              <span id="whirlpool-faq-icon-2" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="whirlpool-faq-2" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              When a Whirlpool top-load washer flashes the uL (Unbalanced Load) error and bangs violently against the cabinet, the internal tub suspension rod dampers have lost their hydraulic dampening resistance. Over time, spring fatigue causes the inner drum to oscillate wildly during high-speed extraction. Our technicians replace the complete 4-corner heavy-duty suspension rod kit to restore smooth, quiet spinning.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('whirlpool-faq-3')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Why is my Whirlpool dryer running cold air without heating?</span>
              </span>
              <span id="whirlpool-faq-icon-3" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="whirlpool-faq-3" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              A Whirlpool dryer tumbling without heat is most commonly caused by an open 240V dual heating element coil, a tripped high-limit thermal cutoff, or a blown thermal fuse. When exhaust ductwork becomes constricted with lint, the trapped heat triggers the safety fuse to prevent house fires. Our technicians diagnose the complete heating circuit, install genuine replacement element assemblies, and verify proper ventilation airflow.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('whirlpool-faq-4')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Do you use genuine quality parts for Whirlpool appliance repairs?</span>
              </span>
              <span id="whirlpool-faq-icon-4" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="whirlpool-faq-4" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              Yes. We install genuine quality, manufacturer-approved replacement parts engineered specifically for Whirlpool appliances—including direct drive shift actuators, heavy-duty suspension dampers, electronic control boards, and heating coils. Every replacement part and labour procedure is backed by our comprehensive written warranty.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('whirlpool-faq-5')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>How does the diagnostic service call fee work for Whirlpool repairs?</span>
              </span>
              <span id="whirlpool-faq-icon-5" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="whirlpool-faq-5" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              Our diagnostic service call fee covers full in-home inspection, electrical testing, and error code troubleshooting. When you approve and proceed with the repair, this diagnostic fee is completely waived. You only pay for the necessary replacement parts and repair labour outlined in your transparent, upfront written quote.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('whirlpool-faq-6')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Is it worth repairing my Whirlpool appliance rather than replacing it?</span>
              </span>
              <span id="whirlpool-faq-icon-6" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="whirlpool-faq-6" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              In most instances, yes. Whirlpool appliances are known for robust mechanical engineering and excellent component availability in Ontario. High-wear items—such as lid switches, suspension rods, drain pumps, and heating coils—can be replaced for a fraction of the cost of purchasing a new appliance. If our technician inspects extensive transmission damage or severe tub corrosion where replacement makes better financial sense, we provide an honest, upfront assessment.
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. BOTTOM HIGH-CONVERTING CTA BANNER                                      -->
    <!-- ========================================================================= -->
    <section class="py-12 md:py-16 bg-gradient-to-br from-brandDarkBlue via-slate-900 to-brandDarkBlue text-white border-t border-slate-200/80">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center space-y-4 sm:space-y-5">
        <span class="inline-block px-3 py-1 rounded-full text-xs font-black tracking-wider uppercase bg-brandOrange/20 border border-brandOrange/40 text-brandOrange">
          Prompt In-Home Diagnostics
        </span>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-black tracking-tight leading-tight">
          Ready for Fast, Professional Whirlpool Appliance Repair?
        </h2>
        <p class="text-[14px] sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed font-normal">
          Looking for trusted Whirlpool appliance repair near you in Toronto, Mississauga, Brampton, or across the GTA? Book online in under 60 seconds or call our local dispatch hotline now. Diagnostic service call fee is completely waived when you proceed with your repair.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2">
          <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-brandOrange hover:bg-orange-600 text-white font-extrabold px-7 py-3.5 rounded-xl text-sm sm:text-base shadow-lg shadow-brandOrange/20 transition-all uppercase tracking-wide cursor-pointer">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
            </svg>
            <span>Call (905) 717-8905</span>
          </a>

          <a href="#quick-booking" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 text-white border border-white/20 font-bold px-6 py-3.5 rounded-xl text-sm sm:text-base shadow-2xs transition-all">
            <span>Book Online in 60s</span>
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Interactive Scripts -->
  <script>
    // FAQ Toggle
    function toggleLocFAQ(id) {
      const el = document.getElementById(id);
      const icon = document.getElementById(id.replace('whirlpool-faq-', 'whirlpool-faq-icon-'));
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

    // Appliance Carousel Scroll & Progress Bar Sync
    (function initApplianceScroll() {
      const row = document.getElementById('appliance-scroll-row');
      const track = document.getElementById('appliance-scroll-track');
      const thumb = document.getElementById('appliance-scroll-thumb');
      const btnLeft = document.getElementById('appliance-scroll-left');
      const btnRight = document.getElementById('appliance-scroll-right');
      if (!row || !track || !thumb) return;

      function updateThumb() {
        const maxScroll = row.scrollWidth - row.clientWidth;
        if (maxScroll <= 0) {
          thumb.style.width = '100%';
          thumb.style.transform = 'translateX(0)';
          if (btnLeft) btnLeft.classList.add('opacity-40', 'pointer-events-none');
          if (btnRight) btnRight.classList.add('opacity-40', 'pointer-events-none');
          return;
        }
        if (btnLeft) {
          if (row.scrollLeft <= 5) {
            btnLeft.classList.add('opacity-40', 'pointer-events-none');
          } else {
            btnLeft.classList.remove('opacity-40', 'pointer-events-none');
          }
        }
        if (btnRight) {
          if (row.scrollLeft >= maxScroll - 5) {
            btnRight.classList.add('opacity-40', 'pointer-events-none');
          } else {
            btnRight.classList.remove('opacity-40', 'pointer-events-none');
          }
        }

        const visibleRatio = row.clientWidth / row.scrollWidth;
        const thumbWidthPct = Math.max(18, Math.min(50, visibleRatio * 100));
        const scrollPct = row.scrollLeft / maxScroll;
        const maxTranslatePct = ((100 - thumbWidthPct) / thumbWidthPct) * 100;
        const translatePct = scrollPct * maxTranslatePct;

        thumb.style.width = thumbWidthPct + '%';
        thumb.style.transform = 'translateX(' + translatePct + '%)';
      }

      row.addEventListener('scroll', updateThumb, { passive: true });
      window.addEventListener('resize', updateThumb);
      window.addEventListener('load', updateThumb);
      setTimeout(updateThumb, 250);

      function getScrollStep() {
        const firstCard = row.querySelector('.appliance-carousel-card');
        if (!firstCard) return 220;
        const gap = window.innerWidth >= 640 ? 16 : 12;
        return firstCard.offsetWidth + gap;
      }

      if (btnLeft) {
        btnLeft.addEventListener('click', function() {
          row.scrollBy({ left: -getScrollStep(), behavior: 'smooth' });
        });
      }
      if (btnRight) {
        btnRight.addEventListener('click', function() {
          row.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
        });
      }

      track.addEventListener('click', function(e) {
        const rect = track.getBoundingClientRect();
        const clickX = e.clientX - rect.left;
        const pct = Math.max(0, Math.min(1, clickX / rect.width));
        const maxScroll = row.scrollWidth - row.clientWidth;
        row.scrollTo({ left: pct * maxScroll, behavior: 'smooth' });
      });

      let isDown = false;
      let hasDragged = false;
      let startX = 0;
      let scrollLeft = 0;

      row.addEventListener('mousedown', function(e) {
        if (window.innerWidth < 640) return;
        isDown = true;
        hasDragged = false;
        startX = e.pageX - row.offsetLeft;
        scrollLeft = row.scrollLeft;
      });

      window.addEventListener('mouseup', function() {
        if (!isDown) return;
        isDown = false;
      });

      row.addEventListener('mousemove', function(e) {
        if (!isDown) return;
        const x = e.pageX - row.offsetLeft;
        const walk = (x - startX) * 1.5;
        if (Math.abs(walk) > 6) {
          hasDragged = true;
          e.preventDefault();
        }
        row.scrollLeft = scrollLeft - walk;
      });

      row.querySelectorAll('a').forEach(function(link) {
        link.addEventListener('click', function(e) {
          if (hasDragged) {
            e.preventDefault();
            e.stopPropagation();
            hasDragged = false;
          }
        });
      });
    })();
  </script>

<?php include __DIR__ . '/../footer.php'; ?>
