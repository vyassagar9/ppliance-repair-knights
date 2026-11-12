<?php
require_once __DIR__ . '/../config.php';
$all_locations = require __DIR__ . '/../locations/location-data.php';

$base_url = '../';
$current_page = 'brands';
$page_title = 'Samsung Appliance Repair Toronto & GTA | Same-Day Service';
$page_description = 'Looking for Samsung appliance repair near you? Certified same-day diagnostics across Toronto & GTA for Samsung fridges, washers, dryers & stoves. Call 905-717-8905!';
$page_keywords = 'samsung appliance repair, samsung fridge repair, samsung washer repair, samsung appliance repair near me, samsung dryer repair, samsung appliance repair knights';
$canonical_url = 'https://www.appliancerepairknights.com/brands/samsung-appliance-repair';

$gmb_rating = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '15';

$custom_head_schema = <<<HTML
  <!-- UNIFIED JSON-LD SCHEMA (@graph: LocalBusiness + Service + BreadcrumbList + FAQPage) -->
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
          "Samsung Appliance Repair",
          "Samsung Refrigerator Repair",
          "Samsung French Door Refrigerator Repair",
          "Samsung Ice Maker Repair",
          "Samsung Twin Cooling Plus Diagnostics",
          "Samsung Washing Machine Repair",
          "Samsung VRT Plus Washer Repair",
          "Samsung Clothes Dryer Repair",
          "Samsung Dishwasher Repair",
          "Samsung Electric Range and Induction Repair"
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
        "@id": "https://www.appliancerepairknights.com/brands/samsung-appliance-repair#service",
        "name": "Samsung Appliance Repair in the Greater Toronto Area (GTA)",
        "serviceType": "Samsung Household Appliance Diagnostic & Repair",
        "provider": {
          "@id": "https://www.appliancerepairknights.com/#organization"
        },
        "areaServed": [
          { "@type": "AdministrativeArea", "name": "Greater Toronto Area" },
          { "@type": "City", "name": "Toronto" },
          { "@type": "City", "name": "Mississauga" },
          { "@type": "City", "name": "Brampton" },
          { "@type": "City", "name": "Vaughan" },
          { "@type": "City", "name": "Markham" },
          { "@type": "City", "name": "Oakville" },
          { "@type": "City", "name": "Burlington" },
          { "@type": "City", "name": "Hamilton" },
          { "@type": "City", "name": "Richmond Hill" }
        ],
        "description": "Professional same-day Samsung appliance repair services across Toronto and the Greater Toronto Area. We diagnose and fix Samsung French-door refrigerators, ice makers, VRT washers, dryers, dishwashers, and ranges using genuine quality replacement parts."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://www.appliancerepairknights.com/brands/samsung-appliance-repair#breadcrumb",
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
            "name": "Samsung Appliance Repair",
            "item": "https://www.appliancerepairknights.com/brands/samsung-appliance-repair"
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
    "@id": "https://www.appliancerepairknights.com/brands/samsung-appliance-repair#faq",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How quickly can a Samsung appliance repair technician near me arrive?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide prompt same-day service across Toronto, the GTA, Hamilton, and surrounding regions based on daily scheduling availability. Our mobile service units carry common Samsung factory-grade replacement components—such as drain pumps, heating elements, sensors, and defrost parts—allowing most repairs to be completed in a single visit."
        }
      },
      {
        "@type": "Question",
        "name": "Why is my Samsung French-door refrigerator freezing up or leaking under the crisper drawer?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Ice buildup in the ice room compartment and water pooling beneath the deli or crisper drawer are common symptoms in Samsung Twin Cooling models. This typically stems from a frozen defrost drain tube, a failed defrost sensor clip, or air infiltration around the ice maker seal. Our technicians thaw, clear, and install updated drain tubes and replacement defrost harnesses to eliminate recurring moisture."
        }
      },
      {
        "@type": "Question",
        "name": "What does error code 5E or nd mean on my Samsung washer?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Error codes 5E (or nd on older units) indicate a drainage failure—the washer cannot expel water within the allotted cycle time. While this can sometimes be caused by a coin or debris clogging the lower coin trap, it frequently signals an internal drain pump motor failure or faulty pressure sensor. Our technician tests pump continuity and installs genuine quality replacement pumps on-site."
        }
      },
      {
        "@type": "Question",
        "name": "Why is my Samsung dryer tumbling but producing no heat?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "When a Samsung dryer runs without heat, the most frequent cause is a burned-out heating element coil, a tripped high-limit thermal cutoff fuse, or a failing cycling thermostat. Because Samsung dryers operate at high temperatures, our technicians inspect the entire heating assembly, thermal safety cutoffs, and vent airflow to ensure safe, dependable drying."
        }
      },
      {
        "@type": "Question",
        "name": "Do you use genuine quality parts for Samsung appliance repairs?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We source and install genuine quality, manufacturer-approved replacement parts engineered specifically for Samsung appliances. Every replacement part and labour procedure is backed by our comprehensive written warranty."
        }
      },
      {
        "@type": "Question",
        "name": "How does the diagnostic service call fee work for Samsung repairs?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our diagnostic service call fee covers complete inspection, error code retrieval, and component testing. When you approve and proceed with the recommended repair, this service call fee is completely waived. You only pay for the necessary replacement parts and repair labour detailed in your transparent, upfront written quote."
        }
      },
      {
        "@type": "Question",
        "name": "Is it worth repairing my 7 to 10 year old Samsung appliance?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "In the majority of cases, yes. High-frequency wear components—such as washer drain pumps, dryer thermal fuses, and refrigerator defrost thermostats—can be replaced for a fraction of the cost of a brand new unit. If our technician discovers an obsolete electronic board or compressor failure where replacement is the more practical economic option, we will provide an honest, upfront assessment."
        }
      }
    ]
  }
  </script>

  <style>
    /* Location-Style Prototype CSS for Perfect Alignment */
    .test-pill-active {
      background-color: #FF6B00 !important;
      color: #FFFFFF !important;
      border-color: #FF6B00 !important;
      box-shadow: 0 4px 12px rgba(255, 107, 0, 0.22) !important;
    }
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    /* Responsive Appliance Row: 2-Col Grid on Mobile, Carousel on Tablet & Desktop */
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
<body class="bg-[#F8FAFC] text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white">

<?php include __DIR__ . '/../header.php'; ?>

  <!-- BREADCRUMBS NAVIGATION -->
  <nav class="bg-white border-b border-slate-200" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 py-2.5 text-xs font-semibold flex items-center gap-2 overflow-x-auto whitespace-nowrap no-scrollbar">
      <a href="<?php echo $base_url; ?>" class="text-slate-500 hover:text-brandOrange transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <a href="<?php echo $base_url; ?>brands" class="text-slate-500 hover:text-brandOrange transition-colors">Brands We Service</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-brandBlue font-bold">Samsung Appliance Repair</span>
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
              <span class="text-xs font-black tracking-wider uppercase text-brandDarkBlue">Same-Day Dispatch &bull; <span class="text-brandOrange">Samsung Brand Specialists</span></span>
            </div>

            <!-- Crisp High-Impact H1 -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-black tracking-tight leading-[1.18] text-slate-900">
              Samsung <span class="text-brandBlue">Appliance Repair Services</span> in the Greater Toronto Area
            </h1>

            <!-- Scannable Subtitle with Voice Search Trigger -->
            <p class="text-[14px] sm:text-base text-slate-700 max-w-xl mx-auto lg:mx-0 leading-relaxed font-normal">
              Looking for reliable Samsung appliance repair near you? We provide fast, certified same-day diagnostics for Twin Cooling refrigerators, frost-bound ice makers, VRT washers, dryers, and ranges. Diagnostic service call fee is completely waived when you proceed with your repair.
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
                <span>Request Samsung Service</span>
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
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Same-Day Dispatch</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Across Toronto, Peel &amp; York</span>
            </div>
          </div>

          <div class="flex items-center justify-center sm:justify-start gap-2.5">
            <div class="w-9 h-9 sm:w-8 sm:h-8 rounded-lg bg-blue-50 text-brandBlue flex items-center justify-center flex-shrink-0 border border-blue-100">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div class="text-left">
              <span class="block text-[13.5px] sm:text-sm font-bold text-slate-900 leading-tight">Licensed &amp; Insured</span>
              <span class="hidden sm:block text-xs text-slate-600 mt-0.5">Certified Samsung technicians</span>
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
    <!-- 3. SAMSUNG APPLIANCES CAROUSEL / GRID (With Internal Links)               -->
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
            Samsung Appliance Repair in the <span class="text-brandBlue">Greater Toronto Area (GTA)</span>
          </h2>

          <p class="text-[14px] sm:text-base text-slate-700 mt-2 leading-relaxed font-normal">
            Fast, reliable diagnostics and same-day on-site repairs across all Samsung kitchen and laundry equipment.
          </p>
        </div>

        <!-- Appliances Carousel / Scrollable Row with 6 Items -->
        <div class="relative group/scroll">
          <div id="appliance-scroll-row" class="no-scrollbar select-none">
            
            <!-- Item 1: Refrigerator -->
            <a href="<?php echo $base_url; ?>services/fridge-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-refrigerator.webp" alt="Samsung Refrigerator Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Refrigerator Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">Twin Cooling &bull; Ice Room</span>
              </div>
            </a>

            <!-- Item 2: Washer -->
            <a href="<?php echo $base_url; ?>services/washer-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-washer.webp" alt="Samsung Washer Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Washing Machine Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">VRT Plus &bull; 5E &amp; UB Error</span>
              </div>
            </a>

            <!-- Item 3: Dryer -->
            <a href="<?php echo $base_url; ?>services/dryer-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-dryer.webp" alt="Samsung Dryer Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Dryer Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">Heating &bull; Sensor Dry</span>
              </div>
            </a>

            <!-- Item 4: Dishwasher -->
            <a href="<?php echo $base_url; ?>services/dishwasher-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-dishwasher.webp" alt="Samsung Dishwasher Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Dishwasher Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">StormWash &bull; LC Leak Error</span>
              </div>
            </a>

            <!-- Item 5: Stove & Range -->
            <a href="<?php echo $base_url; ?>services/stove-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-stove.webp" alt="Samsung Oven and Range Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Range Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">Flex Duo &bull; Induction &bull; SE</span>
              </div>
            </a>

            <!-- Item 6: Microwave -->
            <a href="<?php echo $base_url; ?>services/microwave-repair" class="appliance-carousel-card snap-start group bg-white rounded-xl p-3 sm:p-4 border border-slate-200/80 hover:border-brandOrange hover:shadow-md transition-all text-center flex flex-col items-center justify-between shadow-2xs">
              <div class="w-full h-20 sm:h-28 bg-slate-50/80 rounded-lg p-2 flex items-center justify-center mb-2 overflow-hidden">
                <img src="<?php echo $base_url; ?>img/service-card-microwave.webp" alt="Samsung Microwave Repair Toronto" width="200" height="200" loading="lazy" decoding="async" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 pointer-events-none">
              </div>
              <div>
                <h3 class="font-heading font-bold text-slate-900 text-sm sm:text-base leading-tight group-hover:text-brandOrange transition-colors">Microwave Repair</h3>
                <span class="text-xs font-bold text-brandOrange block mt-1">Over-the-Range &bull; Turntable</span>
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
            Samsung Error Code Quick Reference Guide
          </h2>
          <p class="text-slate-600 text-sm sm:text-base mt-2 leading-relaxed">
            If your Samsung digital display is flashing an alphanumeric error code, certified in-home diagnostic testing is required to protect internal components and restore normal operation:
          </p>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto rounded-2xl border border-slate-200 shadow-2xs mb-6">
          <table class="w-full text-left text-xs sm:text-sm border-collapse">
            <thead>
              <tr class="bg-slate-900 text-white font-heading">
                <th class="py-3.5 px-4 sm:px-6 font-bold">Error Code</th>
                <th class="py-3.5 px-4 sm:px-6 font-bold">Appliance</th>
                <th class="py-3.5 px-4 sm:px-6 font-bold text-right">Immediate Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700 bg-white">
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">5E / nd</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Washer</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">UB / UE</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Washer</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">14E</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Refrigerator</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">tE / hE</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Dryer</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">LC / LE</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Dishwasher</td>
                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                  <a href="tel:9057178905" class="gtm-web-call inline-flex items-center gap-1.5 font-bold text-brandBlue hover:text-brandOrange bg-blue-50/70 hover:bg-orange-50 px-3 py-1.5 rounded-lg border border-blue-200/70 transition-colors">
                    <span>Call Tech</span> &rarr;
                  </a>
                </td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-brandOrange text-sm sm:text-base">SE / 5E</td>
                <td class="py-3.5 px-4 sm:px-6 font-semibold text-slate-900">Oven / Range</td>
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
            <strong>Important Safety Notice:</strong> While error codes point to the affected circuit, testing live line voltage, thermal safety switches, and motor electronics requires certified diagnostic tools. For electrical safety and warranty protection, professional in-home diagnostics are strongly advised.
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
            Samsung Repair Service Areas Across the <span class="text-brandBlue">GTA &amp; Southern Ontario</span>
          </h2>
          <p class="text-[14px] sm:text-base text-slate-600 mt-2 max-w-xl mx-auto leading-relaxed">
            Our certified mobile technicians carry Samsung factory-grade replacement parts across all Southern Ontario communities:
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
          Don't see your specific community? We dispatch mobile service vans across Toronto, Peel, York, Halton, Durham, and Waterloo. Call <a href="tel:9057178905" class="gtm-web-call text-brandOrange font-bold hover:underline">905-717-8905</a> to confirm immediate technician dispatch.
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
            Frequently Asked Questions – Samsung Appliance Repair
          </h2>
          <p class="text-[14px] sm:text-base text-slate-700 mt-2 max-w-xl mx-auto leading-relaxed">
            Have a question before booking your Samsung repair? Here are transparent answers to common inquiries.
          </p>
        </div>

        <div class="space-y-3">
          
          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('samsung-faq-0')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>How quickly can a Samsung appliance repair technician near me arrive?</span>
              </span>
              <span id="samsung-faq-icon-0" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">−</span>
            </button>
            <div id="samsung-faq-0" class="block px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              We provide prompt same-day service across Toronto, the GTA, Hamilton, and surrounding regions based on daily scheduling availability. Our mobile service units carry common Samsung factory-grade replacement components—such as drain pumps, heating elements, sensors, and defrost parts—allowing most repairs to be completed in a single visit.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('samsung-faq-1')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Why is my Samsung French-door refrigerator freezing up or leaking under the drawer?</span>
              </span>
              <span id="samsung-faq-icon-1" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="samsung-faq-1" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              Ice buildup in the ice room compartment and water pooling beneath the deli or crisper drawer are common symptoms in Samsung Twin Cooling models. This typically stems from a frozen defrost drain tube, a failed defrost sensor clip, or air infiltration around the ice maker seal. Our technicians thaw, clear, and install updated drain tubes and replacement defrost harnesses to eliminate recurring moisture.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('samsung-faq-2')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>What does error code 5E or nd mean on my Samsung washer?</span>
              </span>
              <span id="samsung-faq-icon-2" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="samsung-faq-2" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              Error codes 5E (or nd on older units) indicate a drainage failure—the washer cannot expel water within the allotted cycle time. While this can sometimes be caused by a coin or debris clogging the lower coin trap, it frequently signals an internal drain pump motor failure or faulty pressure sensor. Our technician tests pump continuity and installs genuine quality replacement pumps on-site.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('samsung-faq-3')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Why is my Samsung dryer tumbling but producing no heat?</span>
              </span>
              <span id="samsung-faq-icon-3" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="samsung-faq-3" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              When a Samsung dryer runs without heat, the most frequent cause is a burned-out heating element coil, a tripped high-limit thermal cutoff fuse, or a failing cycling thermostat. Because Samsung dryers operate at high temperatures, our technicians inspect the entire heating assembly, thermal safety cutoffs, and vent airflow to ensure safe, dependable drying.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('samsung-faq-4')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Do you use genuine quality parts for Samsung appliance repairs?</span>
              </span>
              <span id="samsung-faq-icon-4" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="samsung-faq-4" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              Yes. We source and install genuine quality, manufacturer-approved replacement parts engineered specifically for Samsung appliances. Every replacement part and labour procedure is backed by our comprehensive written warranty.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('samsung-faq-5')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>How does the diagnostic service call fee work for Samsung repairs?</span>
              </span>
              <span id="samsung-faq-icon-5" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="samsung-faq-5" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              Our diagnostic service call fee covers complete inspection, error code retrieval, and component testing. When you approve and proceed with the recommended repair, this service call fee is completely waived. You only pay for the necessary replacement parts and repair labour detailed in your transparent, upfront written quote.
            </div>
          </div>

          <div class="bg-slate-50/70 rounded-xl border border-slate-200/80 overflow-hidden transition-all duration-200 shadow-2xs">
            <button onclick="toggleLocFAQ('samsung-faq-6')" class="w-full p-4 text-left font-heading font-bold text-brandDarkBlue text-[15px] sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors select-none">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-black">Q.</span>
                <span>Is it worth repairing my 7 to 10 year old Samsung appliance?</span>
              </span>
              <span id="samsung-faq-icon-6" class="text-brandOrange font-black text-lg sm:text-xl flex-shrink-0 ml-3">+</span>
            </button>
            <div id="samsung-faq-6" class="hidden px-4 pb-4 pt-2.5 text-[14px] sm:text-[15px] text-slate-700 leading-relaxed border-t border-slate-200/60">
              In the majority of cases, yes. High-frequency wear components—such as washer drain pumps, dryer thermal fuses, and refrigerator defrost thermostats—can be replaced for a fraction of the cost of a brand new unit. If our technician discovers an obsolete electronic board or compressor failure where replacement is the more practical economic option, we will provide an honest, upfront assessment.
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
          Ready for Fast, Professional Samsung Appliance Repair?
        </h2>
        <p class="text-[14px] sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed font-normal">
          Looking for trusted Samsung appliance repair near you across Toronto &amp; the GTA? Book online in under 60 seconds or call our local dispatch hotline now. Diagnostic service call fee is completely waived when you proceed with your repair.
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

<?php include __DIR__ . '/../footer.php'; ?>

  <!-- Interactive Scripts (1:1 with Location Pages) -->
  <script>
    // FAQ Toggle
    function toggleLocFAQ(id) {
      const el = document.getElementById(id);
      const icon = document.getElementById(id.replace('samsung-faq-', 'samsung-faq-icon-'));
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

</body>
</html>
