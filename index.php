<?php
$base_url = './';
$page_title = '#1 Appliance Repair Service in GTA & Surrounding Areas | 24/7';
$page_description = 'Fast, same-day appliance repair across GTA, Kitchener-Waterloo & Hamilton. Certified technicians, transparent pricing & warranty. Call 905-717-8905!';
$page_keywords = 'appliance repair near me, appliance repair GTA, emergency appliance repair';
$canonical_url = 'https://www.appliancerepairknights.ca/';
include 'head.php';
?>

  <!-- JSON-LD LocalBusiness & Service Schema for SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "LocalBusiness",
        "@id": "https://www.appliancerepairknights.ca/#organization",
        "name": "Appliance Repair Knights",
        "url": "https://www.appliancerepairknights.ca/",
        "logo": "https://www.appliancerepairknights.ca/img/logo.png",
        "image": "https://www.appliancerepairknights.ca/img/bnr.png",
        "telephone": "905-717-8905",
        "email": "info@appliancerepairknights.com",
        "priceRange": "$$",
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
          "ratingValue": "5.0",
          "reviewCount": "490",
          "bestRating": "5",
          "worstRating": "1"
        },
        "openingHoursSpecification": [
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:00",
            "closes": "21:00"
          }
        ],
        "areaServed": [
          "Toronto", "Mississauga", "Brampton", "Oakville", "Milton", 
          "Burlington", "Hamilton", "Kitchener", "Waterloo", "Cambridge", 
          "Guelph", "Barrie", "Oshawa", "Ajax", "Pickering"
        ]
      },
      {
        "@type": "Service",
        "name": "Same-Day Appliance Repair",
        "provider": {"@id": "https://www.appliancerepairknights.ca/#organization"},
        "areaServed": "Greater Toronto Area & Southern Ontario",
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Appliance Repair Services",
          "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Refrigerator Repair"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Washing Machine Repair"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Dryer Repair"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Dishwasher Repair"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Oven & Stove Repair"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Microwave Repair"}}
          ]
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "Do you offer same-day appliance repair service?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes! We provide same-day appliance repair services across Toronto, GTA, Hamilton, Kitchener-Waterloo, and Oshawa when you call or submit an enquiry before 2:00 PM."
            }
          },
          {
            "@type": "Question",
            "name": "Is the service call free?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The service call diagnostic fee is 100% FREE when you proceed with any appliance repair."
            }
          },
          {
            "@type": "Question",
            "name": "What warranty do you provide on repairs?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "All repairs conducted by Appliance Repair Knights come with up to a 90-day written warranty on both parts and labor."
            }
          }
        ]
      }
    ]
  }
  </script>
</head>

<body class="bg-white text-slate-800 font-sans antialiased selection:bg-brandOrange selection:text-white">

  <?php
  $base_url = './';
  $current_page = 'home';
  include 'header.php';
  ?>

  <main>
    <!-- HERO SECTION 1 (WITH ENQUIRY FORM) -->
    <section
      class="bg-gradient-to-b from-slate-50 via-white to-slate-50 py-8 lg:py-14 border-b border-brandBorder relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

          <!-- Hero Left Column: Minimalist Headline, Badges & CTAs (7 cols) -->
          <div class="lg:col-span-7 space-y-5">

            <div class="inline-flex items-center gap-2 bg-brandOrange/10 text-brandOrange font-bold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full border border-brandOrange/20">
              <span class="w-2 h-2 rounded-full bg-brandOrange animate-pulse"></span>
              Fast • Reliable • Professional
            </div>

            <h1
              class="text-3xl sm:text-4xl md:text-5xl font-heading font-black text-brandDarkBlue tracking-tight leading-[1.15]">
              EXPERT APPLIANCE REPAIR SERVICES IN <span class="text-brandBlue">GREATER TORONTO AREA</span>
            </h1>

            <p class="text-slate-600 text-base md:text-lg max-w-xl font-normal leading-relaxed">
              Serving homeowners across the Greater Toronto Area & Southern Ontario with fast, trusted, and guaranteed local repairs.
            </p>

            <!-- Minimalist Trust Highlights Bar with Highlighted 1-Year Warranty Badge -->
            <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 text-xs sm:text-sm text-slate-700 font-semibold pt-1">
              <div class="inline-flex items-center gap-1.5 bg-slate-100/90 text-slate-800 px-3 py-1.5 rounded-full border border-slate-200/80 shadow-2xs">
                <span class="text-amber-400 text-sm">★</span>
                <span class="font-extrabold text-slate-900">5.0/5</span>
                <span class="text-slate-500 font-medium text-xs">(Google Rated)</span>
              </div>
              <div class="inline-flex items-center gap-1.5 bg-slate-100/90 text-slate-800 px-3 py-1.5 rounded-full border border-slate-200/80 shadow-2xs">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <span>Licensed & TSSA Certified</span>
              </div>
              <div class="inline-flex items-center gap-1.5 bg-slate-100/90 text-slate-800 px-3 py-1.5 rounded-full border border-slate-200/80 shadow-2xs">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <span>Free Service Call With Repair</span>
              </div>
              <!-- Highlighted 1-Year Warranty Shield Badge -->
              <div class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-900 px-3.5 py-1.5 rounded-full border border-emerald-200/90 shadow-xs font-extrabold">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span>Up to 1-Year Warranty</span>
                <span class="text-[10px] bg-emerald-600 text-white font-extrabold px-1.5 py-0.5 rounded-md uppercase tracking-wider">Parts & Labor</span>
              </div>
            </div>

            <!-- Main Hero Action Buttons -->
            <div class="flex flex-wrap items-center gap-3 pt-2">
              <a href="#enquiry-form"
                class="bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-6 py-3.5 rounded-xl text-sm sm:text-base transition-all shadow-md hover:shadow-lg flex items-center gap-2 uppercase tracking-wide">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                BOOK REPAIR
              </a>
              <a href="tel:9057178905"
                class="bg-brandDarkBlue hover:bg-brandNavy text-white font-extrabold px-6 py-3.5 rounded-xl text-sm sm:text-base transition-all shadow-md flex items-center gap-2 uppercase tracking-wide">
                <svg class="w-4 h-4 text-brandOrange" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                  </path>
                </svg>
                CALL NOW
              </a>
            </div>

          </div>

          <!-- Hero Right Column: ENQUIRY FORM CARD (5 cols) -->
          <div id="enquiry-form" class="lg:col-span-5">
            <?php include __DIR__ . '/forms/quote-form.php'; ?>
          </div>

        </div>

      </div>
    </section>



    <!-- SECTION 1: WE REPAIR ALL MAJOR APPLIANCES -->
    <section class="py-16 bg-white border-b border-brandBorder" id="services">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <span class="text-brandOrange font-extrabold text-xs uppercase tracking-widest block mb-1">SAME-DAY LOCAL
          DISPATCH</span>
        <h2 class="text-2xl sm:text-4xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
          WE REPAIR ALL MAJOR APPLIANCES
        </h2>
        <p class="text-slate-600 text-xs sm:text-base max-w-2xl mx-auto mb-4 font-medium">
          Fast, reliable diagnostic & repair services for home appliances across Toronto & GTA.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-10 rounded-full"></div>

        <!-- 6 Appliance Service Cards Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">

          <!-- Refrigerator Card -->
          <a href="services/fridge-repair.php"
            class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover-lift group flex flex-col justify-between items-center text-center">
            <div class="h-28 w-full flex items-center justify-center p-2 mb-3 bg-slate-50 rounded-xl overflow-hidden">
              <img src="img/fridge-repair.avif" alt="Refrigerator Repair Service"
                class="object-cover h-full w-full rounded-lg group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3
                class="font-heading font-bold text-slate-800 text-sm mb-1 group-hover:text-brandOrange transition-colors">
                Refrigerator Repair
              </h3>
              <span class="inline-flex items-center gap-1 text-xs text-brandOrange font-semibold mt-2">
                LEARN MORE <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </span>
            </div>
          </a>

          <!-- Washer Card -->
          <a href="services/washer-repair.php"
            class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover-lift group flex flex-col justify-between items-center text-center">
            <div class="h-28 w-full flex items-center justify-center p-2 mb-3 bg-slate-50 rounded-xl overflow-hidden">
              <img src="img/washer-repair.avif" alt="Washer Repair Service"
                class="object-cover h-full w-full rounded-lg group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3
                class="font-heading font-bold text-slate-800 text-sm mb-1 group-hover:text-brandOrange transition-colors">
                Washer Repair
              </h3>
              <span class="inline-flex items-center gap-1 text-xs text-brandOrange font-semibold mt-2">
                LEARN MORE <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </span>
            </div>
          </a>

          <!-- Dryer Card -->
          <a href="services/dryer-repair.php"
            class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover-lift group flex flex-col justify-between items-center text-center">
            <div class="h-28 w-full flex items-center justify-center p-2 mb-3 bg-slate-50 rounded-xl overflow-hidden">
              <img src="img/dryer-repair.avif" alt="Dryer Repair Service"
                class="object-cover h-full w-full rounded-lg group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3
                class="font-heading font-bold text-slate-800 text-sm mb-1 group-hover:text-brandOrange transition-colors">
                Dryer Repair
              </h3>
              <span class="inline-flex items-center gap-1 text-xs text-brandOrange font-semibold mt-2">
                LEARN MORE <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </span>
            </div>
          </a>

          <!-- Dishwasher Card -->
          <a href="services/dishwasher-repair.php"
            class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover-lift group flex flex-col justify-between items-center text-center">
            <div class="h-28 w-full flex items-center justify-center p-2 mb-3 bg-slate-50 rounded-xl overflow-hidden">
              <img src="img/Open Dishwasher.avif" alt="Dishwasher Repair Service"
                class="object-cover h-full w-full rounded-lg group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3
                class="font-heading font-bold text-slate-800 text-sm mb-1 group-hover:text-brandOrange transition-colors">
                Dishwasher Repair
              </h3>
              <span class="inline-flex items-center gap-1 text-xs text-brandOrange font-semibold mt-2">
                LEARN MORE <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </span>
            </div>
          </a>

          <!-- Oven & Stove Card -->
          <a href="services/stove-repair.php"
            class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover-lift group flex flex-col justify-between items-center text-center">
            <div class="h-28 w-full flex items-center justify-center p-2 mb-3 bg-slate-50 rounded-xl overflow-hidden">
              <img src="img/oven-repair.avif" alt="Oven & Stove Repair Service"
                class="object-cover h-full w-full rounded-lg group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3
                class="font-heading font-bold text-slate-800 text-sm mb-1 group-hover:text-brandOrange transition-colors">
                Oven & Stove Repair
              </h3>
              <span class="inline-flex items-center gap-1 text-xs text-brandOrange font-semibold mt-2">
                LEARN MORE <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </span>
            </div>
          </a>

          <!-- Microwave Card -->
          <a href="services/microwave-repair.php"
            class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover-lift group flex flex-col justify-between items-center text-center">
            <div class="h-28 w-full flex items-center justify-center p-2 mb-3 bg-slate-50 rounded-xl overflow-hidden">
              <img src="img/induction-repair.avif" alt="Microwave Repair Service"
                class="object-cover h-full w-full rounded-lg group-hover:scale-105 transition-transform duration-300">
            </div>
            <div>
              <h3
                class="font-heading font-bold text-slate-800 text-sm mb-1 group-hover:text-brandOrange transition-colors">
                Microwave Repair
              </h3>
              <span class="inline-flex items-center gap-1 text-xs text-brandOrange font-semibold mt-2">
                LEARN MORE <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </span>
            </div>
          </a>

        </div>

      </div>
    </section>

    <!-- SECTION 2: WHY CHOOSE APPLIANCE REPAIR KNIGHTS? (UNMATCHED QUALITY) -->
    <section class="py-16 bg-slate-50 border-b border-brandBorder" id="why-choose-us">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <span class="text-brandOrange font-extrabold text-xs uppercase tracking-widest block mb-1">UNMATCHED
          QUALITY</span>
        <h2 class="text-2xl sm:text-4xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
          FAST, FAIR, AND FINISHED PROPERLY
        </h2>
        <p class="text-slate-600 text-xs sm:text-base max-w-2xl mx-auto mb-4 font-medium">
          We built our local service dispatch to resolve appliance breakdowns on the same day. No hold times, no vague
          schedules. Just reliable local technicians.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-12 rounded-full"></div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-left">

          <!-- Feature 1: Same-Day Service -->
          <div
            class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm hover-lift flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <h3 class="font-heading font-bold text-brandDarkBlue text-lg mb-2">Same-Day Service</h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Emergency calls are immediately dispatched to the closest technician hub for prompt arrival.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-bold text-slate-700 flex items-center gap-1.5">
              <span class="text-emerald-600">✓</span> Rapid Dispatch Active
            </div>
          </div>

          <!-- Feature 2: Transparent Fixed Pricing -->
          <div
            class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm hover-lift flex flex-col justify-between">
            <div>
              <div
                class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                  </path>
                </svg>
              </div>
              <h3 class="font-heading font-bold text-brandDarkBlue text-lg mb-2">Transparent Fixed Pricing</h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Flat upfront rates quoted post-diagnosis. No surprise hourly charges or hidden service fees.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-bold text-slate-700 flex items-center gap-1.5">
              <span class="text-emerald-600">✓</span> $0 Call-Out With Repair
            </div>
          </div>

          <!-- Feature 3: Licensed Specialists -->
          <div
            class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm hover-lift flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-2xl bg-brandBlue/10 text-brandBlue flex items-center justify-center mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                  </path>
                </svg>
              </div>
              <h3 class="font-heading font-bold text-brandDarkBlue text-lg mb-2">Licensed Specialists</h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Background-checked, insured, TSSA gas certified technicians who respect your home.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-bold text-slate-700 flex items-center gap-1.5">
              <span class="text-emerald-600">✓</span> TSSA Gas Certified
            </div>
          </div>

          <!-- Feature 4: Written Guarantees -->
          <div
            class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm hover-lift flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-2xl bg-purple-500/10 text-purple-600 flex items-center justify-center mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                  </path>
                </svg>
              </div>
              <h3 class="font-heading font-bold text-brandDarkBlue text-lg mb-2">Written Guarantees</h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Up to 1 year written warranty covering replacement OEM parts and technician labor.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 text-xs font-bold text-slate-700 flex items-center gap-1.5">
              <span class="text-emerald-600">✓</span> 1-Year Coverage Available
            </div>
          </div>

        </div>

      </div>
    </section>


    <!-- SECTION 3: BRANDS WE REPAIR (DUAL DIRECTION INFINITE MARQUEE TICKER) -->
    <style>
      @keyframes brandSlideLeft {
        0% { transform: translate3d(0, 0, 0); }
        100% { transform: translate3d(-50%, 0, 0); }
      }
      @keyframes brandSlideRight {
        0% { transform: translate3d(-50%, 0, 0); }
        100% { transform: translate3d(0, 0, 0); }
      }
      .brand-track-left {
        display: flex !important;
        width: max-content !important;
        animation: brandSlideLeft 20s linear infinite !important;
        will-change: transform;
      }
      .brand-track-right {
        display: flex !important;
        width: max-content !important;
        animation: brandSlideRight 22s linear infinite !important;
        will-change: transform;
      }
      .brand-track-left:hover,
      .brand-track-right:hover {
        animation-play-state: paused !important;
      }
    </style>
    <section class="py-12 bg-white border-b border-brandBorder overflow-hidden" id="brands">
      <div class="max-w-7xl mx-auto px-4 text-center mb-8">
        <span class="text-brandOrange font-extrabold text-xs uppercase tracking-widest block mb-1">FACTORY-TRAINED TECHNICIANS</span>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
          MAJOR APPLIANCE BRANDS WE SERVICE
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm max-w-xl mx-auto font-medium">
          Licensed diagnostic & repair services for all top household appliance makes and models across Toronto & GTA.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mt-3 rounded-full"></div>
      </div>

      <!-- Infinite Dual-Marquee Wrapper -->
      <div class="relative w-full overflow-hidden space-y-4">
        <!-- Side Fade Gradient Masks -->
        <div class="pointer-events-none absolute inset-y-0 left-0 w-20 sm:w-36 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="pointer-events-none absolute inset-y-0 right-0 w-20 sm:w-36 bg-gradient-to-l from-white to-transparent z-10"></div>

        <!-- Marquee Row 1 (Moves Left) -->
        <div class="brand-track-left space-x-4 py-1">
          <div class="flex space-x-3 sm:space-x-4 shrink-0 items-center">
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>SAMSUNG
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>LG
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>WHIRLPOOL
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>BOSCH
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>GE APPLIANCES
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>MAYTAG
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>KITCHENAID
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>FRIGIDAIRE
            </span>
          </div>
          <!-- Duplicate Row 1 -->
          <div class="flex space-x-3 sm:space-x-4 shrink-0 items-center">
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>SAMSUNG
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>LG
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>WHIRLPOOL
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>BOSCH
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>GE APPLIANCES
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>MAYTAG
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>KITCHENAID
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandDarkBlue hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange"></span>FRIGIDAIRE
            </span>
          </div>
        </div>

        <!-- Marquee Row 2 (Moves Right) -->
        <div class="brand-track-right space-x-4 py-1">
          <div class="flex space-x-3 sm:space-x-4 shrink-0 items-center">
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>ELECTROLUX
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>MIELE
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>SUB-ZERO
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>KENMORE
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>VIKING
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>JENNAIR
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>DACOR
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>AMANA
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>SPEED QUEEN
            </span>
          </div>
          <!-- Duplicate Row 2 -->
          <div class="flex space-x-3 sm:space-x-4 shrink-0 items-center">
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>ELECTROLUX
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>MIELE
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>SUB-ZERO
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>KENMORE
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>VIKING
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>JENNAIR
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>DACOR
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>AMANA
            </span>
            <span class="inline-flex items-center gap-2 bg-slate-50 hover:bg-brandOrange hover:text-white px-5 py-2.5 rounded-full border border-slate-200 text-brandDarkBlue font-heading font-extrabold text-xs sm:text-sm shadow-xs uppercase tracking-wider transition-all duration-200">
              <span class="w-1.5 h-1.5 rounded-full bg-brandBlue"></span>SPEED QUEEN
            </span>
          </div>
        </div>
      </div>

      <div class="mt-6 text-center">
        <div class="inline-flex items-center gap-2 bg-slate-100 px-4 py-2 rounded-full border border-slate-200 text-xs text-slate-600 font-medium">
          <span class="text-brandOrange font-bold">Note:</span>
          <span>We repair all out-of-warranty residential appliances across Toronto & GTA.</span>
        </div>
      </div>
    </section>

    <!-- SECTION 4: HOW OUR PROCESS WORKS (SEAMLESS EXPERIENCE) -->
    <section class="py-16 bg-slate-50 border-b border-brandBorder" id="workflow">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <span class="text-brandOrange font-extrabold text-xs uppercase tracking-widest block mb-1">SEAMLESS
          EXPERIENCE</span>
        <h2 class="text-2xl sm:text-4xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
          HOW APPLIANCE REPAIR WORKS
        </h2>
        <p class="text-slate-600 text-xs sm:text-base max-w-2xl mx-auto mb-4 font-medium">
          We've simplified booking to resolution into 4 straightforward stages.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-12 rounded-full"></div>

        <!-- 4 Step Process Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative text-left">

          <!-- Step 1 -->
          <div
            class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm hover-lift relative flex flex-col justify-between">
            <div>
              <span class="text-3xl font-extrabold text-brandOrange font-heading block mb-3">01</span>
              <h3 class="font-heading font-bold text-brandDarkBlue text-lg mb-2">Schedule Online</h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Submit your appliance details and preferred date window. Takes 2 minutes.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-slate-400 font-medium">
              Step 1 of 4
            </div>
          </div>

          <!-- Step 2 -->
          <div
            class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm hover-lift relative flex flex-col justify-between">
            <div>
              <span class="text-3xl font-extrabold text-brandBlue font-heading block mb-3">02</span>
              <h3 class="font-heading font-bold text-brandDarkBlue text-lg mb-2">Confirm Appointment</h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                We verify slots, confirm time window, and text you when our technician is on their way.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-slate-400 font-medium">
              Step 2 of 4
            </div>
          </div>

          <!-- Step 3 -->
          <div
            class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm hover-lift relative flex flex-col justify-between">
            <div>
              <span class="text-3xl font-extrabold text-brandBlue font-heading block mb-3">03</span>
              <h3 class="font-heading font-bold text-brandDarkBlue text-lg mb-2">Diagnose & Quote</h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                The technician identifies the fault and provides a flat-rate quote. Approve before work starts.
              </p>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-slate-400 font-medium">
              Step 3 of 4
            </div>
          </div>

          <!-- Step 4 -->
          <div
            class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm hover-lift relative flex flex-col justify-between">
            <div>
              <span class="text-3xl font-extrabold text-emerald-600 font-heading block mb-3">04</span>
              <h3 class="font-heading font-bold text-brandDarkBlue text-lg mb-2">Fixed & Covered</h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Appliance fixed on the spot with brand-new OEM parts and a written warranty provided.
              </p>
            </div>
            <div
              class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-emerald-600 font-bold flex items-center gap-1">
              <span>✓</span> Complete & Guaranteed
            </div>
          </div>

        </div>

      </div>
    </section>


    <!-- SECTION 5: VERIFIED CUSTOMER REVIEWS -->
    <section class="py-16 bg-white border-b border-brandBorder" id="reviews">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <span class="text-brandOrange font-extrabold text-xs uppercase tracking-widest block mb-1">GOOGLE 5.0★
          RATING</span>
        <h2 class="text-2xl sm:text-4xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
          VERIFIED CUSTOMER REVIEWS
        </h2>
        <p class="text-slate-600 text-xs sm:text-base max-w-2xl mx-auto mb-4 font-medium">
          Real reviews from verified Toronto & GTA homeowners.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-10 rounded-full"></div>

        <!-- 3 Verified Google Review Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

          <!-- Review 1 -->
          <div
            class="bg-slate-50 p-6 rounded-2xl border border-slate-200/80 text-left flex flex-col justify-between hover-lift shadow-xs">
            <div>
              <div class="flex items-center justify-between mb-3">
                <div class="flex text-amber-400">★★★★★</div>
                <span
                  class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-700 bg-emerald-100/80 px-2.5 py-0.5 rounded-full border border-emerald-300">
                  <svg class="w-3 h-3 fill-current text-emerald-600" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  Verified Review
                </span>
              </div>
              <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed mb-4">
                "Our fridge stopped cooling on a Saturday morning. Appliance Repair Knights arrived within 2 hours and
                fixed the relay motor on the spot. Lifesavers!"
              </p>
            </div>
            <div class="flex items-center justify-between border-t border-slate-200/80 pt-3">
              <span class="font-heading font-bold text-brandDarkBlue text-xs">— Michael R., Toronto</span>
              <span class="text-[10px] text-slate-400 font-medium">Google Review</span>
            </div>
          </div>

          <!-- Review 2 -->
          <div
            class="bg-slate-50 p-6 rounded-2xl border border-slate-200/80 text-left flex flex-col justify-between hover-lift shadow-xs">
            <div>
              <div class="flex items-center justify-between mb-3">
                <div class="flex text-amber-400">★★★★★</div>
                <span
                  class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-700 bg-emerald-100/80 px-2.5 py-0.5 rounded-full border border-emerald-300">
                  <svg class="w-3 h-3 fill-current text-emerald-600" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  Verified Review
                </span>
              </div>
              <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed mb-4">
                "Super transparent pricing! Technician explained the issue with our Samsung washer, gave upfront
                pricing, and finished in 45 minutes."
              </p>
            </div>
            <div class="flex items-center justify-between border-t border-slate-200/80 pt-3">
              <span class="font-heading font-bold text-brandDarkBlue text-xs">— Amanda K., Mississauga</span>
              <span class="text-[10px] text-slate-400 font-medium">Google Review</span>
            </div>
          </div>

          <!-- Review 3 -->
          <div
            class="bg-slate-50 p-6 rounded-2xl border border-slate-200/80 text-left flex flex-col justify-between hover-lift shadow-xs">
            <div>
              <div class="flex items-center justify-between mb-3">
                <div class="flex text-amber-400">★★★★★</div>
                <span
                  class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-700 bg-emerald-100/80 px-2.5 py-0.5 rounded-full border border-emerald-300">
                  <svg class="w-3 h-3 fill-current text-emerald-600" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  Verified Review
                </span>
              </div>
              <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed mb-4">
                "Fast, polite, and very professional. The free diagnostic call with repair saved us money. Highly
                recommended for any GTA homeowner."
              </p>
            </div>
            <div class="flex items-center justify-between border-t border-slate-200/80 pt-3">
              <span class="font-heading font-bold text-brandDarkBlue text-xs">— David L., Hamilton</span>
              <span class="text-[10px] text-slate-400 font-medium">Google Review</span>
            </div>
          </div>

        </div>

        <!-- High-Trust Booking Bar Under Reviews -->
        <div
          class="mt-10 pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4 bg-slate-50 p-5 rounded-2xl border border-slate-200/80 shadow-xs">
          <div class="flex items-center gap-3 text-left">
            <div class="flex text-amber-400 text-base">★★★★★</div>
            <div>
              <span class="font-heading font-bold text-brandDarkBlue text-xs sm:text-sm block">Rated 5.0 / 5 Local
                Reviews</span>
              <span class="text-[11px] text-slate-500">Verified Toronto, Mississauga, Brampton & GTA Customers</span>
            </div>
          </div>
          <a href="#quick-enquiry-form"
            class="bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold text-xs px-6 py-3 rounded-xl uppercase tracking-wider transition-all shadow-md flex-shrink-0">
            BOOK YOUR REPAIR NOW →
          </a>
        </div>

      </div>
    </section>



    <!-- SECTION 6: FAQ ACCORDION SECTION -->
    <section class="py-16 bg-slate-50 border-b border-brandBorder" id="faq">
      <div class="max-w-4xl mx-auto px-4">

        <div class="text-center mb-10">
          <span class="text-brandOrange font-extrabold text-xs uppercase tracking-widest block mb-1">GOT
            QUESTIONS?</span>
          <h2 class="text-2xl sm:text-4xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
            FREQUENTLY ASKED QUESTIONS
          </h2>
          <p class="text-slate-600 text-xs sm:text-base max-w-2xl mx-auto mb-4 font-medium">
            Clear answers to common questions about our Toronto & GTA appliance repair services.
          </p>
          <div class="w-20 h-1 bg-brandOrange mx-auto rounded-full"></div>
        </div>

        <div class="space-y-4">

          <!-- FAQ 1 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-1')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer">
              <span>How quickly can a technician arrive at my home?</span>
              <span id="icon-faq-1" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-1"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              We offer same-day service across Toronto and the GTA! When you call or submit an enquiry before 2:00 PM,
              our technician can be at your home within 2 to 4 hours. Emergency appointments are also available 24/7.
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-2')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer">
              <span>What is your pricing model and service call fee?</span>
              <span id="icon-faq-2" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-2"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              We provide transparent upfront flat-rate pricing with zero hidden fees. The diagnostic service call fee is
              100% <strong>FREE</strong> when you proceed with any appliance repair!
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-3')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer">
              <span>What warranty do you offer on repairs?</span>
              <span id="icon-faq-3" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-3"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              All repairs performed by Appliance Repair Knights come with a written warranty covering both new
              replacement parts and technician labor.
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-4')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none cursor-pointer">
              <span>Do you carry replacement parts in your service vehicles?</span>
              <span id="icon-faq-4" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-4"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes! Our service vans are fully stocked with common OEM replacement parts for Bosch, GE Appliances,
              KitchenAid, Frigidaire, Maytag, Sub-Zero, Miele and Samsung appliances to complete 85%+ of repairs on
              the spot.
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- SECTION 7: WE SERVICE THESE AREAS -->
    <section class="py-16 bg-slate-50 border-b border-brandBorder" id="service-areas">
      <div class="max-w-7xl mx-auto px-4">

        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
            WE SERVICE THESE AREAS
          </h2>
          <div class="w-20 h-1 bg-brandOrange mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

          <!-- Cities List Grid (2 columns) -->
          <div class="lg:col-span-6 bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-sm">
            <h3 class="font-heading font-bold text-brandDarkBlue text-base mb-4 flex items-center gap-2">
              <svg class="w-5 h-5 text-brandOrange" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                  clip-rule="evenodd"></path>
              </svg>
              Southern Ontario Cities We Cover:
            </h3>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-y-3 gap-x-4 text-xs sm:text-sm text-slate-700 font-medium">
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Toronto</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Mississauga</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Brampton</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Oakville</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Milton</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Burlington</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Hamilton</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Kitchener</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Waterloo</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Cambridge</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Guelph</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Barrie</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Oshawa</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Ajax</div>
              <div class="flex items-center gap-1.5"><span class="text-brandOrange">📍</span> Pickering</div>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-100">
              <a href="#enquiry-form"
                class="inline-block border border-slate-300 hover:border-brandBlue text-brandBlue font-bold px-5 py-2 rounded-lg text-xs uppercase tracking-wider transition-all">
                VIEW ALL SERVICE AREAS
              </a>
            </div>
          </div>

          <!-- Interactive Graphic / Map Representation -->
          <div
            class="lg:col-span-6 bg-brandDarkBlue rounded-2xl p-6 sm:p-8 text-white relative overflow-hidden min-h-[300px] flex flex-col justify-between shadow-xl">
            <div class="relative z-10">
              <span
                class="bg-brandOrange text-white text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-md mb-2 inline-block">Dispatch
                Center</span>
              <h3 class="text-xl font-heading font-bold mb-2">Same-Day Tech Dispatch Across Ontario</h3>
              <p class="text-xs text-slate-300 max-w-md">
                Our technicians are stationed across the GTA and surrounding regions to guarantee rapid arrival at your
                doorstep.
              </p>
            </div>

            <!-- Map Nodes Graphic -->
            <div class="grid grid-cols-3 gap-2 my-4 text-center text-xs font-semibold text-slate-200">
              <div class="p-2 bg-white/10 rounded-lg backdrop-blur-xs">GTA Central</div>
              <div class="p-2 bg-white/10 rounded-lg backdrop-blur-xs">Hamilton & West</div>
              <div class="p-2 bg-white/10 rounded-lg backdrop-blur-xs">Kitchener & Tri-City</div>
            </div>

            <div class="relative z-10 flex items-center justify-between pt-4 border-t border-white/10">
              <span class="text-xs text-brandOrange font-bold">● Active Technicians Nearby</span>
              <a href="tel:9057178905" </a>
            </div>
          </div>

        </div>

      </div>
    </section>
  </main>

  <?php
  $base_url = './';
  include 'footer.php';
  ?>
