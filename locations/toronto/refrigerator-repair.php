<?php
/**
 * Dedicated Location-Service Landing Page: Refrigerator Repair in Toronto
 * Appliance Repair Knights Ltd.
 * URL: /locations/toronto/refrigerator-repair
 */

require_once __DIR__ . '/../../config.php';

$base_url = '../../';
$current_page = 'locations';

$page_title = 'Refrigerator Repair Toronto | Certified Local Same-Day Technicians';
$page_description = 'Professional refrigerator repair in Toronto & GTA. Fast diagnostics for cooling issues, compressor faults, defrost leaks, and ice makers. Written warranty. Call 905-717-8905.';
$page_keywords = 'refrigerator repair toronto, fridge repair toronto, fridge not cooling toronto, refrigerator repair north york, downtown toronto fridge repair, same day fridge repair toronto, sub zero fridge repair toronto, samsung fridge repair toronto, lg fridge repair toronto';
$canonical_url = 'https://www.appliancerepairknights.com/locations/toronto/refrigerator-repair';
$robots_meta = 'noindex, nofollow';

$gmb_rating = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '120+';

$custom_head_schema = <<<HTML
  <!-- UNIFIED DYNAMIC CITY-SERVICE SCHEMA (@graph: LocalBusiness + Service + BreadcrumbList + FAQPage) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": ["LocalBusiness", "HomeAndConstructionBusiness"],
        "@id": "https://www.appliancerepairknights.com/#organization",
        "name": "Appliance Repair Knights Ltd.",
        "image": "https://www.appliancerepairknights.com/img/appliance-repair-banner.webp",
        "url": "https://www.appliancerepairknights.com/",
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
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Toronto",
          "addressRegion": "ON",
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
        },
        "areaServed": {
          "@type": "City",
          "name": "Toronto",
          "containedInPlace": {
            "@type": "AdministrativeArea",
            "name": "City of Toronto"
          }
        },
        "knowsAbout": [
          "Refrigerator Repair",
          "Freezer Diagnostics",
          "Defrost Thermostat Replacement",
          "Compressor Diagnostics",
          "Ice Maker Repair",
          "Evaporator Fan Replacement"
        ]
      },
      {
        "@type": "Service",
        "@id": "{$canonical_url}#service",
        "name": "Refrigerator Repair in Toronto",
        "serviceType": "Refrigerator Repair Service",
        "provider": {
          "@id": "https://www.appliancerepairknights.com/#organization"
        },
        "areaServed": {
          "@type": "City",
          "name": "Toronto"
        },
        "description": "Professional same-day diagnostics and repair for residential refrigerators, freezers, and ice makers in Toronto, ON by certified technicians from Appliance Repair Knights Ltd."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "{$canonical_url}#breadcrumb",
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
            "name": "Toronto Appliance Repair",
            "item": "https://www.appliancerepairknights.com/locations/toronto-appliance-repair"
          },
          {
            "@type": "ListItem",
            "position": 4,
            "name": "Refrigerator Repair Toronto",
            "item": "{$canonical_url}"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "{$canonical_url}#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "How quickly can a technician repair my refrigerator in Toronto?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Because refrigerator cooling failures jeopardize perishable food, we treat cooling issues as top priority. Same-day appointments are available across Toronto based on daily scheduling and routing. You can call 905-717-8905 or book online for the earliest available dispatch."
            }
          },
          {
            "@type": "Question",
            "name": "How does refrigerator repair pricing work in Toronto?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "At Appliance Repair Knights, our diagnostic service call fee is completely waived when you proceed with the repair. After an on-site mechanical inspection, our technician provides a transparent, upfront written quote before beginning any repair. If you choose not to proceed, only the standard diagnostic fee applies."
            }
          },
          {
            "@type": "Question",
            "name": "Do your technicians service condo and apartment refrigerators in Downtown Toronto?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. We frequently service residential condominiums and high-rise apartments across Downtown Toronto, CityPlace, Liberty Village, and Yorkville. Our mobile technicians seamlessly navigate loading dock access, elevator booking windows, and concierge registration protocols."
            }
          },
          {
            "@type": "Question",
            "name": "Can you repair Samsung cooling faults or LG linear compressor issues?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Our certified technicians carry specialized diagnostic equipment and genuine factory OEM replacement components for Samsung twin-cooling systems, LG linear compressor assemblies, Whirlpool defrost cycles, and luxury built-in units like Sub-Zero and Bosch."
            }
          },
          {
            "@type": "Question",
            "name": "Do you provide a warranty on refrigerator repairs in Toronto?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Every completed refrigerator repair in Toronto includes a comprehensive written warranty on both replacement parts and technician labour, giving you complete protection and peace of mind."
            }
          },
          {
            "@type": "Question",
            "name": "Is it worth repairing my refrigerator or should I replace it?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "In many cases, repairing is significantly more practical than replacing. Common problems such as failed start relays, evaporator fan motors, defrost heaters, or door gaskets can be repaired economically to restore years of reliable performance. If an older unit over a decade old experiences sealed-system compressor failure, our technician provides an honest assessment on whether replacement is the smarter financial choice."
            }
          }
        ]
      }
    ]
  }
  </script>
HTML;

require_once __DIR__ . '/../../head.php';
?>

<body class="bg-lightbg text-secondary font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white overflow-x-clip w-full max-w-full">
  <?php require_once __DIR__ . '/../../header.php'; ?>

  <!-- BREADCRUMBS NAVIGATION -->
  <nav class="bg-white border-b border-bordercolor" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 text-xs font-semibold flex items-center gap-2 flex-wrap">
      <a href="<?php echo $base_url; ?>" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <a href="<?php echo $base_url; ?>locations" class="text-secondary hover:text-accent transition-colors">Service Areas</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <a href="<?php echo $base_url; ?>locations/toronto-appliance-repair" class="text-secondary hover:text-accent transition-colors">Toronto</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Refrigerator Repair</span>
    </div>
  </nav>

  <main id="main-content" class="flex-grow">

    <!-- HERO SECTION WITH LIVE QUOTE FORM -->
    <section class="bg-primary text-white py-8 md:py-10 lg:py-12 overflow-hidden relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
          
          <!-- Hero Copy Left (7 cols) -->
          <div class="lg:col-span-7 space-y-4 sm:space-y-5 text-center lg:text-left">

            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-extrabold tracking-tight leading-tight text-white">
              Fast &amp; Reliable <span class="text-brandOrange">Refrigerator Repair</span> in Toronto
            </h1>

            <p class="text-sm sm:text-base text-slate-300 max-w-2xl leading-relaxed mx-auto lg:mx-0">
              Is your refrigerator warming up, leaking water, or making clicking sounds? Our certified technicians carry genuine OEM components on mobile service vans to diagnose and repair cooling failures across Toronto in a single visit.
            </p>

            <!-- Common Refrigerator Symptoms & Immediate Fixes Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3 pt-1 text-left">
              
              <!-- Problem 1: Cooling Failure -->
              <div class="bg-white/10 border border-white/15 rounded-xl p-3 backdrop-blur-sm transition-transform hover:-translate-y-0.5">
                <div class="text-brandOrange font-bold text-xs sm:text-sm flex items-center gap-1.5">
                  <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FF6B35" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>
                  </svg>
                  <span>Not Cooling / Warm</span>
                </div>
                <div class="text-[11px] sm:text-xs text-slate-300 mt-0.5 leading-snug">Relays, fans &amp; compressor restore</div>
              </div>

              <!-- Problem 2: Water Leaks -->
              <div class="bg-white/10 border border-white/15 rounded-xl p-3 backdrop-blur-sm transition-transform hover:-translate-y-0.5">
                <div class="font-bold text-xs sm:text-sm flex items-center gap-1.5" style="color: #38BDF8;">
                  <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38BDF8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                  </svg>
                  <span>Water Leaking</span>
                </div>
                <div class="text-[11px] sm:text-xs text-slate-300 mt-0.5 leading-snug">Defrost drains &amp; water valves cleared</div>
              </div>

              <!-- Problem 3: Electrical & Mechanical Noise -->
              <div class="bg-white/10 border border-white/15 rounded-xl p-3 backdrop-blur-sm transition-transform hover:-translate-y-0.5">
                <div class="text-emerald-400 font-bold text-xs sm:text-sm flex items-center gap-1.5">
                  <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#34D399" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 5L6 9H2v6h4l5 4V5z"></path>
                    <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path>
                  </svg>
                  <span>Clicking / Noise</span>
                </div>
                <div class="text-[11px] sm:text-xs text-slate-300 mt-0.5 leading-snug">Inverter board &amp; start capacitor fix</div>
              </div>

              <!-- Problem 4: Defrost & Frost Buildup -->
              <div class="bg-white/10 border border-white/15 rounded-xl p-3 backdrop-blur-sm transition-transform hover:-translate-y-0.5">
                <div class="text-amber-300 font-bold text-xs sm:text-sm flex items-center gap-1.5">
                  <svg class="w-4 h-4 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FCD34D" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="2" x2="12" y2="22"></line>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                    <line x1="19.07" y1="4.93" x2="4.93" y2="19.07"></line>
                  </svg>
                  <span>Frost Buildup</span>
                </div>
                <div class="text-[11px] sm:text-xs text-slate-300 mt-0.5 leading-snug">Defrost sensor &amp; heater restore</div>
              </div>

            </div>

            <!-- Primary Phone Call Action -->
            <div class="flex flex-col sm:flex-row items-center gap-3 pt-2 justify-center lg:justify-start">
              <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-brandOrange hover:bg-orange-600 text-white font-extrabold px-7 py-3.5 rounded-xl text-base shadow-lg shadow-brandOrange/30 hover:shadow-xl transition-all uppercase tracking-wide">
                <svg class="w-5 h-5 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <span>Call (905) 717-8905</span>
              </a>

              <a href="#quote-form-container" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold px-6 py-3.5 rounded-xl text-sm sm:text-base transition-all">
                <span>Request a Quote Below</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </a>
            </div>

            <!-- Verified Social Proof -->
            <div class="pt-1 flex items-center justify-center lg:justify-start gap-2.5 text-xs text-slate-300">
              <div class="flex items-center text-amber-400 gap-0.5">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              </div>
              <span class="font-semibold text-white">5.0 Star Rating</span>
              <span class="text-slate-400">•</span>
              <span>Trusted by Homeowners &amp; Condo Residents in Toronto</span>
            </div>

          </div>

          <!-- Hero Right: Interactive Quote Form (5 cols) -->
          <div class="lg:col-span-5">
            <?php 
              $defaultAppliance = 'Refrigerator'; 
              include __DIR__ . '/../../forms/quote-form.php'; 
            ?>
          </div>

        </div>

      </div>
    </section>

    <!-- TRUST PILLARS STRIP -->
    <section class="bg-white border-b border-bordercolor py-5 shadow-xs">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div class="flex items-center justify-center gap-3">
          <div class="p-2.5 bg-blue-50 text-brandBlue rounded-xl">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <span class="text-xs sm:text-sm font-bold text-primary">Licensed &amp; Insured</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2.5 bg-blue-50 text-brandBlue rounded-xl">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <span class="text-xs sm:text-sm font-bold text-primary">Upfront Written Quotes</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2.5 bg-blue-50 text-brandBlue rounded-xl">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <span class="text-xs sm:text-sm font-bold text-primary">Same-Day Availability</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2.5 bg-blue-50 text-brandBlue rounded-xl">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
          </div>
          <span class="text-xs sm:text-sm font-bold text-primary">Certified Field Technicians</span>
        </div>
      </div>
    </section>

    <!-- AI-OPTIMIZED SUMMARY BOX (AEO & GOOGLE OVERVIEW TARGET) -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 my-10">
      <div class="bg-gradient-to-br from-blue-50/90 to-slate-50 border-l-4 border-brandBlue rounded-r-2xl p-6 sm:p-7 shadow-xs border-y border-r border-slate-200/80">
        <div class="flex items-center gap-2.5 mb-2 text-brandNavy font-heading font-bold text-base sm:text-lg">
          <span class="w-8 h-8 rounded-lg bg-brandBlue/10 text-brandBlue inline-flex items-center justify-center flex-shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </span>
          <h2>Quick Answer: Toronto Refrigerator Diagnostics &amp; Repair</h2>
        </div>
        <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-4">
          When a refrigerator stops cooling in Toronto, common root causes include a burned-out compressor start relay, a blocked defrost drain tube, a failed evaporator fan motor, or a frosted coil assembly. Appliance Repair Knights provides certified same-day diagnostics across Toronto, providing transparent upfront written quotes with the diagnostic service call fee completely waived upon proceeding with the repair.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs sm:text-sm text-slate-700 pt-3 border-t border-blue-200/70">
          <div class="flex items-center gap-2"><svg class="w-4 h-4 text-brandBlue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span><strong>Dispatch:</strong> Same-day local appointments</span></div>
          <div class="flex items-center gap-2"><svg class="w-4 h-4 text-brandBlue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span><strong>Warranty:</strong> Parts &amp; labour written protection</span></div>
          <div class="flex items-center gap-2"><svg class="w-4 h-4 text-brandBlue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span><strong>Brands:</strong> Samsung, LG, Whirlpool, Bosch &amp; more</span></div>
        </div>
      </div>
    </section>

    <!-- VISUAL EXPERTISE & TECHNICIAN CAPABILITIES -->
    <section class="py-12 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
          
          <div class="lg:col-span-6 space-y-5">
            <span class="text-xs font-bold text-accent uppercase tracking-widest">Expert On-Site Solutions</span>
            <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary leading-snug">
              Complete Refrigerator &amp; Freezer Diagnostics Across Toronto
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
              A failing refrigerator quickly escalates into hundreds of dollars of spoiled groceries. Our diagnostic vehicles arrive loaded with factory-original components to address the root mechanical or electrical fault on the spot.
            </p>
            <div class="space-y-3 text-xs sm:text-sm text-slate-700">
              <div class="flex items-start gap-3 bg-slate-50 p-3 rounded-xl border border-slate-100">
                <svg class="w-4 h-4 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <div><strong class="text-primary">Dual-Cooling &amp; French Door Systems:</strong> Accurate electronic damper and twin-evaporator airflow balancing.</div>
              </div>
              <div class="flex items-start gap-3 bg-slate-50 p-3 rounded-xl border border-slate-100">
                <svg class="w-4 h-4 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <div><strong class="text-primary">Compressor &amp; Start Component Testing:</strong> Digital multimeter inspection of PTC relays, run capacitors, and inverter boards.</div>
              </div>
              <div class="flex items-start gap-3 bg-slate-50 p-3 rounded-xl border border-slate-100">
                <svg class="w-4 h-4 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <div><strong class="text-primary">Defrost Cycle &amp; Sensor Calibration:</strong> Bi-metal thermostats, defrost heating elements, and thermistors replaced on-site.</div>
              </div>
            </div>
          </div>

          <div class="lg:col-span-6">
            <div class="relative rounded-2xl overflow-hidden border border-bordercolor shadow-lg bg-slate-100">
              <img src="../../img/refrigerator-repair-service.webp" 
                   alt="Professional Refrigerator Repair Technician in Toronto Inspecting Cooling Coils" 
                   title="Toronto Refrigerator Diagnostic & Repair Services" 
                   width="798" 
                   height="448" 
                   loading="lazy" 
                   decoding="async" 
                   class="w-full h-auto object-cover max-h-[420px]">
              <div class="absolute bottom-3 left-3 right-3 bg-white/95 backdrop-blur-xs p-3 rounded-xl border border-slate-200/80 text-xs text-slate-700 flex items-center justify-between">
                <span class="font-bold text-primary">Certified Diagnostic Team</span>
                <span class="text-emerald-700 font-semibold flex items-center gap-1">
                  <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Truck-Stocked OEM Parts
                </span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- COMMON REFRIGERATOR ISSUES & DIAGNOSTIC MATRIX (6 MODERN CARDS) -->
    <section class="py-14 bg-lightbg border-y border-bordercolor">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12">
          <span class="text-xs font-bold text-accent uppercase tracking-widest">Symptom Troubleshooting</span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-heading font-extrabold text-primary mt-2">
            Common Refrigerator Problems We Fix in Toronto
          </h2>
          <p class="text-slate-600 text-sm sm:text-base mt-2.5 leading-relaxed">
            Modern cooling appliances rely on precision sensors, air dampers, and sealed loops. Here are the symptoms our technicians solve daily:
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

          <!-- Card 1 -->
          <div class="bg-white rounded-2xl p-6 border border-bordercolor hover:border-brandBlue/50 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-12 h-12 rounded-xl bg-orange-50 text-brandOrange flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07l14.14-14.14M8 2l4 4 4-4M8 22l4-4 4 4M2 8l4 4-4 4M22 8l-4 4 4 4"></path></svg>
              </div>
              <h3 class="font-heading font-bold text-primary text-lg mb-2">Fridge Warm, Freezer Cold</h3>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                If the freezer keeps food solid but the fresh food section warms up, air circulation is obstructed. Common causes include a failed evaporator fan motor, an iced-over evaporator coil, or a jammed motorized air damper.
              </p>
            </div>
            <div class="text-xs text-accent font-bold pt-3 border-t border-slate-100 flex items-center justify-between">
              <span>Solution: Fan motor / damper fix</span>
              <span>&rarr;</span>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="bg-white rounded-2xl p-6 border border-bordercolor hover:border-brandBlue/50 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-12 h-12 rounded-xl bg-blue-50 text-brandBlue flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
              </div>
              <h3 class="font-heading font-bold text-primary text-lg mb-2">Clicking Sound &amp; Compressor Idle</h3>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                A repetitive clicking noise every few minutes signifies the compressor is attempting to start but cannot engage. The solid-state start relay, overload protector, or run capacitor has burned out and needs replacement.
              </p>
            </div>
            <div class="text-xs text-accent font-bold pt-3 border-t border-slate-100 flex items-center justify-between">
              <span>Solution: Start relay &amp; overload</span>
              <span>&rarr;</span>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-2xl p-6 border border-bordercolor hover:border-brandBlue/50 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
              </div>
              <h3 class="font-heading font-bold text-primary text-lg mb-2">Water Leaking Under Crisper Drawers</h3>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                Water pooling beneath produce drawers or dripping onto kitchen flooring is typically caused by a blocked defrost drain tube. Defrost runoff overflows the drainage trough and spills into the cabinet.
              </p>
            </div>
            <div class="text-xs text-accent font-bold pt-3 border-t border-slate-100 flex items-center justify-between">
              <span>Solution: Drain line clearing &amp; flush</span>
              <span>&rarr;</span>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="bg-white rounded-2xl p-6 border border-bordercolor hover:border-brandBlue/50 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
              </div>
              <h3 class="font-heading font-bold text-primary text-lg mb-2">Frost Sheet on Back Interior Wall</h3>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                A dense layer of frost or snow-like ice indicates an auto-defrost failure. Defective defrost heaters, bi-metal thermostats, or electronic defrost control boards prevent automatic frost clearance.
              </p>
            </div>
            <div class="text-xs text-accent font-bold pt-3 border-t border-slate-100 flex items-center justify-between">
              <span>Solution: Defrost heater / bi-metal sensor</span>
              <span>&rarr;</span>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="bg-white rounded-2xl p-6 border border-bordercolor hover:border-brandBlue/50 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-12 h-12 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
              </div>
              <h3 class="font-heading font-bold text-primary text-lg mb-2">Ice Maker Jammed or Not Dispensing</h3>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                When an ice maker stops harvesting cubes or water dribbles weakly from the door dispenser, the dual-solenoid water inlet valve may be clogged with sediment, or the water fill tube may have frozen solid.
              </p>
            </div>
            <div class="text-xs text-accent font-bold pt-3 border-t border-slate-100 flex items-center justify-between">
              <span>Solution: Inlet valve / ice mold replacement</span>
              <span>&rarr;</span>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="bg-white rounded-2xl p-6 border border-bordercolor hover:border-brandBlue/50 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
            <div>
              <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
              </div>
              <h3 class="font-heading font-bold text-primary text-lg mb-2">Constant Running &amp; Warm Cabinet Sides</h3>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                If the compressor never cycles off and the cabinet exterior feels warm, restricted condenser coils or degraded magnetic door gaskets allow warm ambient air to enter, overworking the system.
              </p>
            </div>
            <div class="text-xs text-accent font-bold pt-3 border-t border-slate-100 flex items-center justify-between">
              <span>Solution: Coil service / gasket replacement</span>
              <span>&rarr;</span>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!-- REPAIR VS REPLACE: THE 50% RULE -->
    <section class="py-12 bg-slate-50 border-t border-bordercolor">
      <div class="max-w-4xl mx-auto px-4 sm:px-6">
        <div class="bg-white rounded-2xl p-7 sm:p-8 border border-bordercolor shadow-sm space-y-5">
          <div class="flex items-center gap-3">
            <span class="w-10 h-10 rounded-xl bg-brandNavy text-amber-400 flex items-center justify-center flex-shrink-0 shadow-sm">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
            </span>
            <div>
              <h2 class="text-xl sm:text-2xl font-heading font-bold text-primary">
                Is It Worth Repairing Your Refrigerator?
              </h2>
              <p class="text-xs text-slate-500">The 50% Rule for Toronto Homeowners</p>
            </div>
          </div>

          <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
            When your refrigerator stops cooling, you need clear advice before making an investment. Our licensed technicians follow a transparent decision framework based on appliance age and mechanical viability:
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs sm:text-sm">
            <div class="bg-emerald-50/70 border border-emerald-200/80 rounded-xl p-4 space-y-2">
              <h4 class="font-bold text-emerald-900 flex items-center gap-2 text-sm">
                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 inline-flex items-center justify-center flex-shrink-0">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                </span>
                <span>When Repair Is the Smarter Choice:</span>
              </h4>
              <ul class="space-y-1.5 text-slate-700">
                <li>• Refrigerator is under 8 to 10 years old.</li>
                <li>• Fault is in an accessible part (relays, fans, heaters, sensors).</li>
                <li>• The repair quote is well under half the price of a comparable new unit.</li>
                <li>• The aesthetic finish and interior shelving are in good shape.</li>
              </ul>
            </div>

            <div class="bg-amber-50/70 border border-amber-200/80 rounded-xl p-4 space-y-2">
              <h4 class="font-bold text-amber-900 flex items-center gap-2 text-sm">
                <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-600 inline-flex items-center justify-center flex-shrink-0">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </span>
                <span>When Replacement May Be Wiser:</span>
              </h4>
              <ul class="space-y-1.5 text-slate-700">
                <li>• Unit is past 12 to 15 years of operating life.</li>
                <li>• Sealed internal refrigerant lines suffer non-repairable leaks.</li>
                <li>• Multiple mechanical and electronic systems have degraded.</li>
                <li>• Excessive interior cabinet rust or structural cracking.</li>
              </ul>
            </div>
          </div>

          <p class="text-xs text-slate-500 italic pt-1">
            * Our technician provides a comprehensive diagnostic inspection first, so you make the decision with complete clarity and no pressure.
          </p>
        </div>
      </div>
    </section>

    <!-- SUPPORTED REFRIGERATOR BRANDS IN TORONTO -->
    <section class="py-12 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-8">
          <span class="text-xs font-bold text-accent uppercase tracking-widest">Brand Authority</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary mt-2">
            Refrigerator Brands We Service Across Toronto
          </h2>
          <p class="text-slate-600 text-sm sm:text-base mt-2">
            Our mobile service vehicles carry genuine OEM factory components for all major appliance lines:
          </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 text-center">
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Samsung</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">LG</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Whirlpool</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Bosch</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Sub-Zero</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">KitchenAid</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">GE / Profile</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Maytag</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Frigidaire</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Miele</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Electrolux</div>
          <div class="bg-lightbg border border-bordercolor rounded-xl py-3.5 px-4 font-heading font-bold text-primary hover:border-accent/40 hover:shadow-xs transition-all">Blomberg</div>
        </div>

        <p class="text-xs text-center text-slate-500 mt-5">
          Have an older model or a specialty built-in unit? Call us at <a href="tel:9057178905" class="font-bold text-accent hover:underline">905-717-8905</a> to confirm parts availability.
        </p>
      </div>
    </section>

    <!-- TORONTO NEIGHBORHOODS & CONDO LOGISTICS -->
    <section class="py-12 bg-lightbg border-t border-bordercolor">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          
          <div class="lg:col-span-6 space-y-4">
            <span class="text-xs font-bold text-accent uppercase tracking-widest">Local Coverage</span>
            <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary">
              Serving All Toronto Neighborhoods &amp; Downtown High-Rises
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
              From historic residences in High Park to high-density condos along the waterfront, our technicians are equipped to navigate Toronto's unique building landscapes:
            </p>
            <div class="bg-white rounded-xl p-5 border border-bordercolor space-y-2.5 text-xs sm:text-sm text-slate-700 shadow-xs">
              <div class="flex items-center gap-2 font-bold text-primary">
                <span class="w-6 h-6 rounded-md bg-brandBlue/10 text-brandBlue inline-flex items-center justify-center flex-shrink-0">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </span>
                <span>Downtown High-Rise &amp; Condo Experience:</span>
              </div>
              <p class="text-slate-600 leading-relaxed">
                We regularly service condo suites in CityPlace, Liberty Village, the Financial District, and Yorkville — coordinating visitor parking, service elevator windows, and loading bay protocols seamlessly.
              </p>
            </div>
          </div>

          <div class="lg:col-span-6">
            <div class="bg-white rounded-2xl p-6 border border-bordercolor shadow-xs">
              <h4 class="font-heading font-bold text-primary text-sm mb-3 uppercase tracking-wider">Primary Toronto Communities Serviced:</h4>
              <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 text-xs font-semibold text-secondary">
                <span class="p-2 rounded bg-slate-50 border border-slate-100">Downtown Toronto</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">North York</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">Scarborough</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">Etobicoke</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">East York</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">High Park</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">Liberty Village</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">The Beaches</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">Leslieville</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">Yorkville</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">Yonge &amp; Eglinton</span>
                <span class="p-2 rounded bg-slate-50 border border-slate-100">Leaside</span>
              </div>
              <div class="mt-4 pt-3 border-t border-slate-100 text-xs text-slate-500 flex items-center justify-between">
                <span>All Toronto Postal Codes (M1–M9)</span>
                <a href="<?php echo $base_url; ?>locations/toronto-appliance-repair" class="text-accent font-bold hover:underline">City Hub Overview &rarr;</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- UNIFIED VERIFIED GOOGLE REVIEWS SLIDER -->
    <?php include __DIR__ . '/../../reviews-widget.php'; ?>

    <!-- CITY-SERVICE FAQ ACCORDION -->
    <section class="py-16 bg-white border-t border-bordercolor" id="faqs">
      <div class="max-w-4xl mx-auto px-4 sm:px-6">
        
        <div class="text-center mb-12">
          <span class="text-xs font-bold text-accent uppercase tracking-widest">Helpful Answers</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary mt-1">
            Frequently Asked Questions – Toronto Refrigerator Repair
          </h2>
        </div>

        <div class="space-y-4">
          
          <!-- FAQ 1 -->
          <div class="bg-white rounded-xl border border-bordercolor overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('loc-srv-faq-0')" class="w-full p-5 text-left font-heading font-bold text-primary text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-bold">Q.</span>
                <span>How quickly can a technician repair my refrigerator in Toronto?</span>
              </span>
              <span id="icon-loc-srv-faq-0" class="text-brandOrange font-black text-xl flex-shrink-0 ml-4">−</span>
            </button>
            <div id="loc-srv-faq-0" class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Because refrigerator cooling failures jeopardize perishable food, we treat cooling issues as top priority. Same-day appointments are available across Toronto based on daily scheduling and routing. You can call 905-717-8905 or book online for the earliest available dispatch.
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="bg-white rounded-xl border border-bordercolor overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('loc-srv-faq-1')" class="w-full p-5 text-left font-heading font-bold text-primary text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-bold">Q.</span>
                <span>How does refrigerator repair pricing work in Toronto?</span>
              </span>
              <span id="icon-loc-srv-faq-1" class="text-brandOrange font-black text-xl flex-shrink-0 ml-4">+</span>
            </button>
            <div id="loc-srv-faq-1" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              At Appliance Repair Knights, our diagnostic service call fee is completely waived when you proceed with the repair. After an on-site mechanical inspection, our technician provides a transparent, upfront written quote before beginning any repair. If you choose not to proceed, only the standard diagnostic fee applies.
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="bg-white rounded-xl border border-bordercolor overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('loc-srv-faq-2')" class="w-full p-5 text-left font-heading font-bold text-primary text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-bold">Q.</span>
                <span>Do your technicians service condo and apartment refrigerators in Downtown Toronto?</span>
              </span>
              <span id="icon-loc-srv-faq-2" class="text-brandOrange font-black text-xl flex-shrink-0 ml-4">+</span>
            </button>
            <div id="loc-srv-faq-2" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes. We frequently service residential condominiums and high-rise apartments across Downtown Toronto, CityPlace, Liberty Village, and Yorkville. Our mobile technicians seamlessly navigate loading dock access, elevator booking windows, and concierge registration protocols.
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="bg-white rounded-xl border border-bordercolor overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('loc-srv-faq-3')" class="w-full p-5 text-left font-heading font-bold text-primary text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-bold">Q.</span>
                <span>Can you repair Samsung cooling faults or LG linear compressor issues?</span>
              </span>
              <span id="icon-loc-srv-faq-3" class="text-brandOrange font-black text-xl flex-shrink-0 ml-4">+</span>
            </button>
            <div id="loc-srv-faq-3" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes. Our certified technicians carry specialized diagnostic equipment and genuine factory OEM replacement components for Samsung twin-cooling systems, LG linear compressor assemblies, Whirlpool defrost cycles, and luxury built-in units like Sub-Zero and Bosch.
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="bg-white rounded-xl border border-bordercolor overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('loc-srv-faq-4')" class="w-full p-5 text-left font-heading font-bold text-primary text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-bold">Q.</span>
                <span>Do you provide a warranty on refrigerator repairs in Toronto?</span>
              </span>
              <span id="icon-loc-srv-faq-4" class="text-brandOrange font-black text-xl flex-shrink-0 ml-4">+</span>
            </button>
            <div id="loc-srv-faq-4" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes. Every completed refrigerator repair in Toronto includes a comprehensive written warranty on both replacement parts and technician labour, giving you complete protection and peace of mind.
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="bg-white rounded-xl border border-bordercolor overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('loc-srv-faq-5')" class="w-full p-5 text-left font-heading font-bold text-primary text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer hover:text-brandOrange transition-colors">
              <span class="flex items-center gap-2">
                <span class="text-brandOrange font-bold">Q.</span>
                <span>Is it worth repairing my refrigerator or should I replace it?</span>
              </span>
              <span id="icon-loc-srv-faq-5" class="text-brandOrange font-black text-xl flex-shrink-0 ml-4">+</span>
            </button>
            <div id="loc-srv-faq-5" class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              In many cases, repairing is significantly more practical than replacing. Common problems such as failed start relays, evaporator fan motors, defrost heaters, or door gaskets can be repaired economically to restore years of reliable performance. If an older unit over a decade old experiences sealed-system compressor failure, our technician provides an honest assessment on whether replacement is the smarter financial choice.
            </div>
          </div>

        </div>

        <!-- Post-FAQ CTA Buttons & Micro-Trust Line -->
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
              <span class="whitespace-nowrap">Schedule Repair</span>
            </a>
          </div>
          <p class="text-xs text-slate-700 font-semibold flex items-center justify-center gap-2 flex-wrap pt-1">
            <span class="inline-flex items-center gap-1.5">
              <svg class="w-4 h-4 text-brandOrange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              <span>Service Call Fee Waived With Repairs</span>
            </span>
            <span class="text-slate-400">•</span>
            <span class="inline-flex items-center gap-1.5">
              <svg class="w-4 h-4 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path></svg>
              <span>Speak Directly With a Technician</span>
            </span>
            <span class="text-slate-400">•</span>
            <span>Same-Day Availability</span>
          </p>
        </div>

      </div>
    </section>

  </main>

  <script>
  function toggleFAQ(id) {
    const el = document.getElementById(id);
    const icon = document.getElementById('icon-' + id);
    if (!el) return;
    const isHidden = el.classList.contains('hidden');
    el.classList.toggle('hidden');
    if (icon) {
      icon.textContent = isHidden ? '−' : '+';
    }
  }
  </script>

  <?php require_once __DIR__ . '/../../footer.php'; ?>
</body>
</html>
