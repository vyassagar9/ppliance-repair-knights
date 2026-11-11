<?php
require_once __DIR__ . '/../config.php';
$base_url = '../';
$current_page = 'brands';
$page_title = 'Appliance Brands We Repair in Toronto & GTA | Appliance Repair Knights';
$page_description = 'Certified appliance repair services for all major brands across Toronto & the GTA: Samsung, LG, Whirlpool, Bosch, GE, KitchenAid, Maytag & more. Call 905-717-8905!';
$page_keywords = 'appliance repair brands, samsung appliance repair, lg appliance repair, whirlpool repair, bosch repair, appliance brands toronto';
$canonical_url = 'https://www.appliancerepairknights.com/brands';

$gmb_rating = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '15';

$custom_head_schema = <<<HTML
  <!-- UNIFIED JSON-LD SCHEMA (@graph: LocalBusiness + BreadcrumbList) -->
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
          "LG Appliance Repair",
          "Whirlpool Appliance Repair",
          "Bosch Appliance Repair",
          "GE Appliance Repair",
          "KitchenAid Appliance Repair",
          "Maytag Appliance Repair",
          "Frigidaire Appliance Repair",
          "Sub-Zero Appliance Repair",
          "Miele Appliance Repair"
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
        "@type": "BreadcrumbList",
        "@id": "https://www.appliancerepairknights.com/brands#breadcrumb",
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
          }
        ]
      }
    ]
  }
  </script>
HTML;

include __DIR__ . '/../head.php';
?>
<body class="bg-lightbg text-secondary font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white">

<?php include __DIR__ . '/../header.php'; ?>

  <!-- BREADCRUMBS -->
  <nav class="bg-white border-b border-bordercolor">
    <div class="max-w-7xl mx-auto px-4 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="../" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Brands We Repair</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- MASTER BRANDS HERO -->
    <section class="bg-primary text-white py-12 md:py-16">
      <div class="max-w-5xl mx-auto px-4 text-center space-y-6">
        <span class="inline-block bg-blue-900/60 border border-blue-400/30 px-3.5 py-1.5 rounded-full text-xs font-bold text-blue-200">
          Certified Multi-Brand Specialists
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-white tracking-tight leading-tight">
          Major Appliance Brands We Repair in the <span class="text-brandOrange">Greater Toronto Area</span>
        </h1>
        <p class="text-slate-300 text-base md:text-lg max-w-3xl mx-auto leading-relaxed">
          Looking for reliable appliance repair near you? We provide fast, dependable same-day diagnostics and repairs for Samsung, LG, Whirlpool, Bosch, GE, KitchenAid, and all leading North American and European appliance brands.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
          <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-8 py-4 rounded-xl transition-all shadow-md text-center flex items-center justify-center gap-2 text-base">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            <span>Call 905-717-8905</span>
          </a>
          <a href="#brands-list" class="w-full sm:w-auto bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold px-7 py-4 rounded-xl transition-all text-sm">
            Explore Brands &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- TRUST FEATURES STRIP (EXACT HOMEPAGE COMPACT PILLARS) -->
    <section class="bg-white border-b border-slate-200/80 py-4 sm:py-5">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2.5 sm:gap-3.5 md:gap-4">
          
          <!-- Pillar 1: Same-Day Repair Service -->
          <div class="group flex items-center gap-2.5 sm:gap-3 py-2.5 sm:py-3 px-3 sm:px-3.5 rounded-xl sm:rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brandOrange/40 hover:shadow-md transition-all h-full">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-orange-50 border border-orange-100/80 text-brandOrange flex-shrink-0 flex items-center justify-center group-hover:bg-brandOrange group-hover:text-white transition-colors duration-200">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div class="min-w-0 text-left">
              <span class="block text-xs sm:text-sm font-extrabold text-brandDarkBlue leading-tight group-hover:text-brandBlue transition-colors">Same-Day Repair Service</span>
            </div>
          </div>

          <!-- Pillar 2: Highly Skilled Technicians -->
          <div class="group flex items-center gap-2.5 sm:gap-3 py-2.5 sm:py-3 px-3 sm:px-3.5 rounded-xl sm:rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brandOrange/40 hover:shadow-md transition-all h-full">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-orange-50 border border-orange-100/80 text-brandOrange flex-shrink-0 flex items-center justify-center group-hover:bg-brandOrange group-hover:text-white transition-colors duration-200">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
              </svg>
            </div>
            <div class="min-w-0 text-left">
              <span class="block text-xs sm:text-sm font-extrabold text-brandDarkBlue leading-tight group-hover:text-brandBlue transition-colors">Highly Skilled Technicians</span>
            </div>
          </div>

          <!-- Pillar 3: All Major Brands -->
          <div class="group flex items-center gap-2.5 sm:gap-3 py-2.5 sm:py-3 px-3 sm:px-3.5 rounded-xl sm:rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brandOrange/40 hover:shadow-md transition-all h-full">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-orange-50 border border-orange-100/80 text-brandOrange flex-shrink-0 flex items-center justify-center group-hover:bg-brandOrange group-hover:text-white transition-colors duration-200">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
            </div>
            <div class="min-w-0 text-left">
              <span class="block text-xs sm:text-sm font-extrabold text-brandDarkBlue leading-tight group-hover:text-brandBlue transition-colors">All Major Brands</span>
            </div>
          </div>

          <!-- Pillar 4: Affordable Rates -->
          <div class="group flex items-center gap-2.5 sm:gap-3 py-2.5 sm:py-3 px-3 sm:px-3.5 rounded-xl sm:rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-brandOrange/40 hover:shadow-md transition-all h-full">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-orange-50 border border-orange-100/80 text-brandOrange flex-shrink-0 flex items-center justify-center group-hover:bg-brandOrange group-hover:text-white transition-colors duration-200">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div class="min-w-0 text-left">
              <span class="block text-xs sm:text-sm font-extrabold text-brandDarkBlue leading-tight group-hover:text-brandBlue transition-colors">Affordable Rates</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- BRANDS DIRECTORY GRID -->
    <section class="py-12 md:py-16 bg-slate-50/70 border-b border-slate-200/80" id="brands-list">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-12">
        
        <div class="text-center max-w-2xl mx-auto">
          <span class="text-xs font-bold uppercase tracking-widest text-brandOrange">Comprehensive Directory</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900 mt-2">
            All Major Appliance Brands We Service
          </h2>
          <p class="text-slate-600 text-sm sm:text-base mt-2">
            Our certified technicians carry factory-grade replacement components and diagnostic equipment for all major appliance manufacturers:
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 items-start">
          
          <!-- Tier 1: Everyday Household -->
          <div class="bg-white rounded-2xl border border-slate-200/90 p-6 sm:p-7 shadow-2xs flex flex-col justify-between">
            <div>
              <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-brandBlue flex items-center justify-center font-bold">1</div>
                <div>
                  <h3 class="font-heading font-bold text-slate-900 text-lg">Everyday Household</h3>
                  <p class="text-xs text-slate-500">Popular GTA Kitchen &amp; Laundry</p>
                </div>
              </div>
              <!-- Top 5 Initially Visible -->
              <div class="space-y-2 pt-2">
                <div class="p-2.5 rounded-lg bg-orange-50 border border-orange-200 flex items-center justify-between">
                  <span class="font-bold text-slate-900 text-sm">Samsung</span>
                  <a href="<?php echo $base_url; ?>brands/samsung-appliance-repair" class="text-xs font-bold text-brandOrange hover:underline">Dedicated Guide &rarr;</a>
                </div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">LG Electronics</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Whirlpool</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">GE Appliances</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Maytag</div>
              </div>
              
              <!-- Hidden More Brands (Revealed on Click) -->
              <div id="tier-more-1" class="hidden space-y-2 pt-2">
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Frigidaire</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">KitchenAid</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Kenmore</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Electrolux</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Amana</div>
              </div>
            </div>

            <button type="button" id="tier-btn-1" onclick="toggleTierBrands(1)" class="w-full mt-4 pt-3 border-t border-slate-100 flex items-center justify-center gap-1.5 text-xs font-bold text-brandOrange hover:text-brandOrangeHover transition-colors focus:outline-none cursor-pointer">
              <span id="tier-text-1">+ View More Brands</span>
              <span id="tier-icon-1" class="text-[10px]">▼</span>
            </button>
          </div>

          <!-- Tier 2: Luxury & European -->
          <div class="bg-white rounded-2xl border border-slate-200/90 p-6 sm:p-7 shadow-2xs flex flex-col justify-between">
            <div>
              <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-xl bg-orange-50 text-brandOrange flex items-center justify-center font-bold">2</div>
                <div>
                  <h3 class="font-heading font-bold text-slate-900 text-lg">Luxury &amp; European</h3>
                  <p class="text-xs text-slate-500">Built-In &amp; Precision Specialists</p>
                </div>
              </div>
              <!-- Top 5 Initially Visible -->
              <div class="space-y-2 pt-2">
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Bosch</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Miele</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Sub-Zero</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Wolf</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Thermador</div>
              </div>
              
              <!-- Hidden More Brands (Revealed on Click) -->
              <div id="tier-more-2" class="hidden space-y-2 pt-2">
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">JennAir</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Gaggenau</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Asko</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Bertazzoni</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Viking &amp; Dacor</div>
              </div>
            </div>

            <button type="button" id="tier-btn-2" onclick="toggleTierBrands(2)" class="w-full mt-4 pt-3 border-t border-slate-100 flex items-center justify-center gap-1.5 text-xs font-bold text-brandOrange hover:text-brandOrangeHover transition-colors focus:outline-none cursor-pointer">
              <span id="tier-text-2">+ View More Brands</span>
              <span id="tier-icon-2" class="text-[10px]">▼</span>
            </button>
          </div>

          <!-- Tier 3: Universal Coverage -->
          <div class="bg-white rounded-2xl border border-slate-200/90 p-6 sm:p-7 shadow-2xs flex flex-col justify-between">
            <div>
              <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center font-bold">3</div>
                <div>
                  <h3 class="font-heading font-bold text-slate-900 text-lg">Universal Coverage</h3>
                  <p class="text-xs text-slate-500">Commercial &amp; Specialty Brands</p>
                </div>
              </div>
              <!-- Top 5 Initially Visible -->
              <div class="space-y-2 pt-2">
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Blomberg</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Fisher &amp; Paykel</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Danby</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Haier</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Inglis</div>
              </div>
              
              <!-- Hidden More Brands (Revealed on Click) -->
              <div id="tier-more-3" class="hidden space-y-2 pt-2">
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Hotpoint</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Speed Queen</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Panasonic</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">Liebherr</div>
                <div class="p-2.5 rounded-lg bg-slate-50 border border-slate-200 text-sm font-semibold text-slate-800">+ All Other Makes</div>
              </div>
            </div>

            <button type="button" id="tier-btn-3" onclick="toggleTierBrands(3)" class="w-full mt-4 pt-3 border-t border-slate-100 flex items-center justify-center gap-1.5 text-xs font-bold text-brandOrange hover:text-brandOrangeHover transition-colors focus:outline-none cursor-pointer">
              <span id="tier-text-3">+ View More Brands</span>
              <span id="tier-icon-3" class="text-[10px]">▼</span>
            </button>
          </div>

        </div>

      </div>
    </section>

    <!-- CLOSING CTA -->
    <section class="py-12 md:py-16 bg-gradient-to-br from-brandNavy to-brandDarkBlue text-white text-center">
      <div class="max-w-4xl mx-auto px-4 space-y-6">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-extrabold tracking-tight">
          Ready to Get Your Appliance Repaired?
        </h2>
        <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto leading-relaxed">
          Book online in under 60 seconds or call our local technician dispatch team. Diagnostic service call fee is completely waived when you proceed with your repair.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
          <a href="tel:9057178905" class="gtm-web-call w-full sm:w-auto bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-8 py-4 rounded-xl transition-all shadow-lg flex items-center justify-center gap-2 cursor-pointer text-base">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            <span>Call 905-717-8905</span>
          </a>
          <a href="../schedule" class="w-full sm:w-auto bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold px-7 py-4 rounded-xl transition-all text-sm">
            Book Appointment Online &rarr;
          </a>
        </div>
      </div>
    </section>

  </main>

  <script>
    function toggleTierBrands(tierId) {
      var moreDiv = document.getElementById('tier-more-' + tierId);
      var textSpan = document.getElementById('tier-text-' + tierId);
      var iconSpan = document.getElementById('tier-icon-' + tierId);
      if (!moreDiv) return;
      var isHidden = moreDiv.classList.contains('hidden');
      if (isHidden) {
        moreDiv.classList.remove('hidden');
        if (textSpan) textSpan.textContent = '− Show Less';
        if (iconSpan) iconSpan.textContent = '▲';
      } else {
        moreDiv.classList.add('hidden');
        if (textSpan) textSpan.textContent = '+ View More Brands';
        if (iconSpan) iconSpan.textContent = '▼';
      }
    }
  </script>

<?php include __DIR__ . '/../footer.php'; ?>
</body>
</html>
