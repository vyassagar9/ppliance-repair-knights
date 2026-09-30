<?php
require_once __DIR__ . '/../config.php';
$base_url = '../';
$current_page = 'coffee-machine';
$page_title = 'Coffee Machine Repair, Servicing & Maintenance | Toronto & GTA';
$page_description = 'On-site coffee machine repair, servicing & preventative maintenance across Toronto & GTA. Residential built-in & commercial office espresso systems. Fast dispatch, OEM parts.';
$page_keywords = 'coffee machine repair toronto, office coffee machine repair gta, espresso machine repair, commercial coffee maker maintenance, built-in coffee system service, gaggia repair, mastrena repair, bunn repair, breville repair, delonghi repair, bravilor bonamat repair, saeco professional repair, nespresso repair, vki coffee repair, keurig repair';
$canonical_url = 'https://www.appliancerepairknights.com/services/coffee-machine-repair';
$og_image = 'https://www.appliancerepairknights.com/img/coffee-machine-repair-service.webp';
$robots_meta = 'noindex, nofollow';

$gmb_rating = GMB_RATING_VALUE;
$gmb_reviews = GMB_REVIEW_COUNT;

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
        "image": "https://www.appliancerepairknights.com/img/coffee-machine-repair-service.webp",
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
          "Residential Coffee Machine Repair",
          "Commercial Coffee Machine Repair",
          "Office Espresso Machine Maintenance",
          "Built-in Coffee System Diagnostics",
          "Gaggia Espresso Repair",
          "Mastrena Commercial Espresso Service",
          "Bunn Commercial Brewer Repair",
          "Breville Espresso Machine Service",
          "De'Longhi Coffee Maker Repair",
          "Bravilor Bonamat Service",
          "Saeco Professional Maintenance",
          "Nespresso Commercial and Residential Repair",
          "VKI Office Brewer Service",
          "Keurig Commercial Repair",
          "Rocket Espresso Repair",
          "La Marzocco Commercial Repair",
          "Rancilio Silvia Service",
          "ECM and Profitec Repair",
          "Faema and Bezzera Maintenance",
          "Nuova Simonelli Repair",
          "Jura Swiss Espresso Service",
          "Miele Built-In Coffee Repair",
          "Thermoblock and Pump Replacement",
          "Brew Group Overhaul and Descaling"
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
        "@id": "https://www.appliancerepairknights.com/services/coffee-machine-repair#service",
        "serviceType": "Coffee Machine Repair, Servicing & Preventative Maintenance",
        "provider": {
          "@id": "https://www.appliancerepairknights.com/#organization"
        },
        "areaServed": [
          { "@type": "AdministrativeArea", "name": "Greater Toronto Area" },
          { "@type": "AdministrativeArea", "name": "Toronto" },
          { "@type": "AdministrativeArea", "name": "Mississauga" },
          { "@type": "AdministrativeArea", "name": "Brampton" },
          { "@type": "AdministrativeArea", "name": "Vaughan" },
          { "@type": "AdministrativeArea", "name": "Markham" },
          { "@type": "AdministrativeArea", "name": "Oakville" },
          { "@type": "AdministrativeArea", "name": "Hamilton" }
        ],
        "description": "Professional on-site repair, deep servicing, and scheduled preventative maintenance for residential built-in coffee systems and commercial office espresso machines across Toronto and the Greater Toronto Area."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://www.appliancerepairknights.com/services/coffee-machine-repair#breadcrumb",
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
            "name": "Services",
            "item": "https://www.appliancerepairknights.com/#services"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Coffee Machine Repair",
            "item": "https://www.appliancerepairknights.com/services/coffee-machine-repair"
          }
        ]
      }
    ]
  }
  </script>

  <!-- DEDICATED TOP-LEVEL FAQPage JSON-LD SCHEMA -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.appliancerepairknights.com/services/coffee-machine-repair#faq",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Do you repair both home coffee machines and commercial office coffee systems?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We provide comprehensive on-site diagnostics, repairs, and maintenance for both residential appliances (luxury built-in cabinetry systems, bean-to-cup brewers, and countertop espresso machines) and commercial office equipment (corporate breakroom coffee stations, high-capacity batch brewers, and commercial espresso systems) across Toronto and the GTA."
        }
      },
      {
        "@type": "Question",
        "name": "Which coffee machine brands do you service and maintain?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We expertly diagnose and service leading residential and commercial brands, including Gaggia, Mastrena, Bunn, Breville, De'Longhi, Bravilor Bonamat, Saeco Professional, Nespresso, VKI Technologies, Keurig Commercial, as well as Miele, Jura, Bosch, Thermador, and more."
        }
      },
      {
        "@type": "Question",
        "name": "What is included in preventative maintenance for office coffee machines?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our office preventative maintenance service includes food-grade internal descaling, group head and solenoid valve inspection, high-wear O-ring and silicone seal renewals, water filtration cartridge replacement, grinder burr cleaning and recalibration, and brewing pressure testing to prevent unexpected workplace breakdowns."
        }
      },
      {
        "@type": "Question",
        "name": "Why is my coffee machine leaking water from underneath?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Water leaks typically originate from brittle silicone pressure tubing, worn brew group gaskets, a cracked flow meter casing, calcified boiler fittings, or a stuck solenoid relief valve. Our mobile technicians carry common OEM replacement seals and hoses to detect and resolve leaks on-site."
        }
      },
      {
        "@type": "Question",
        "name": "Why is my espresso machine not heating or dispensing lukewarm coffee?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Heating failures or lukewarm output usually indicate heavy mineral scale accumulation inside the thermoblock, a blown thermal cutoff fuse, a failing heating element, or a defective NTC temperature sensor. A technician will inspect the electrical and thermal circuits with calibrated diagnostic tools to pinpoint and replace the damaged component."
        }
      },
      {
        "@type": "Question",
        "name": "How does your diagnostic fee and warranty work?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We believe in complete pricing transparency. Our technician conducts a full on-site diagnostic and provides an upfront written quote before any work begins. The diagnostic service call fee is completely waived when you proceed with the repair. All repairs are backed by our comprehensive written warranty on parts and labour using genuine OEM parts."
        }
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
  <nav class="bg-white border-b border-bordercolor" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="../" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-slate-400">Services</span>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Coffee Machine Repair, Servicing &amp; Maintenance</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- SERVICE HERO -->
    <section class="bg-primary text-white py-12 md:py-16 overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/20 border border-accent/40 text-accent text-xs md:text-sm font-bold uppercase tracking-wider">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M4 2a2 2 0 00-2 2v8a2 2 0 002 2h7.09c.39 1.14 1.48 2 2.91 2 1.66 0 3-1.34 3-3V4a2 2 0 00-2-2H4zm10 2h1a1 1 0 011 1v6a1 1 0 01-1 1h-1V4z"/></svg>
            <span>Residential &amp; Commercial Coffee Solutions</span>
          </div>

          <h1 class="text-3xl sm:text-4xl md:text-5xl font-heading font-bold text-white tracking-tight leading-tight">
            Coffee Machine Repair, <br><span class="text-accent">Servicing &amp; Maintenance</span>
          </h1>

          <p class="text-slate-300 text-base md:text-lg max-w-xl leading-relaxed">
            Professional on-site diagnostics, urgent breakdown repairs, and preventative maintenance across Toronto &amp; the GTA. From luxury built-in kitchen coffee systems to high-volume office breakroom espresso brewers, we keep your coffee flowing flawlessly.
          </p>

          <!-- Dual Target Indicator Pills -->
          <div class="flex flex-wrap gap-2 pt-1">
            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 text-xs font-semibold text-white border border-white/10">
              <svg class="w-3.5 h-3.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
              Home Built-In &amp; Countertop Espresso
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 text-xs font-semibold text-white border border-white/10">
              <svg class="w-3.5 h-3.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
              Office Breakroom &amp; Commercial Systems
            </span>
          </div>

          <div class="space-y-3 pt-2">
            <div class="flex items-center gap-2.5 text-slate-200 text-sm">
              <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Repairs for Gaggia, Mastrena, Bunn, Breville, De'Longhi, Bravilor, Saeco &amp; more</span>
            </div>
            <div class="flex items-center gap-2.5 text-slate-200 text-sm">
              <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Emergency breakdown fixes, deep descaling, and scheduled maintenance</span>
            </div>
            <div class="flex items-center gap-2.5 text-slate-200 text-sm">
              <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Service call fee completely waived when you proceed with repair</span>
            </div>
            <div class="flex items-center gap-2.5 text-slate-200 text-sm">
              <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Comprehensive written warranty on parts and labour</span>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 pt-4">
            <a href="tel:9057178905" class="gtm-web-call bg-accent hover:bg-accent-hover text-white font-bold px-8 py-4 rounded-xl transition-all text-center flex items-center justify-center gap-2 shadow-lg cursor-pointer">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
              Call 905-717-8905
            </a>
            <a href="#machine-types" class="bg-white/10 hover:bg-white/20 text-white font-bold px-6 py-4 rounded-xl transition-all text-center flex items-center justify-center border border-white/20 text-sm">
              Explore Machine Types &darr;
            </a>
          </div>
        </div>

        <!-- Reusable Quote Form -->
        <div class="lg:col-span-5">
          <?php $defaultAppliance = 'Coffee Machine'; include __DIR__ . '/../forms/quote-form.php'; ?>
        </div>
      </div>
    </section>

    <!-- TRUST PILLARS BAR -->
    <section class="bg-white border-b border-bordercolor py-6">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div class="flex items-center justify-center gap-3">
          <div class="p-2 bg-slate-100 rounded-lg text-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <span class="text-sm font-bold text-primary">Licensed &amp; Insured</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2 bg-slate-100 rounded-lg text-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <span class="text-sm font-bold text-primary">Fee Waived With Repair</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2 bg-slate-100 rounded-lg text-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <span class="text-sm font-bold text-primary">Prompt GTA Dispatch</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2 bg-slate-100 rounded-lg text-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
          </div>
          <span class="text-sm font-bold text-primary">Genuine OEM Parts</span>
        </div>
      </div>
    </section>

    <!-- MACHINE TYPES SECTION (Screenshot 1 Reference) -->
    <section id="machine-types" class="py-16 bg-slate-50 border-b border-bordercolor">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
          <span class="text-accent text-xs font-bold uppercase tracking-wider">All Machine Categories</span>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-bold text-primary">
            We Service &amp; Repair All Types of Espresso Machines
          </h2>
          <p class="text-slate-600 text-sm md:text-base leading-relaxed">
            From intuitive countertop bean-to-cup units to prosumer E61 group systems and heavy-duty multi-group commercial machines, our certified technicians carry calibrated diagnostic tools and genuine parts.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Card 1: Fully Automatic -->
          <div class="bg-white border border-bordercolor rounded-2xl p-6 space-y-4 shadow-2xs hover:shadow-md hover:border-brandOrange transition-all flex flex-col justify-between group">
            <div class="space-y-3">
              <div class="w-12 h-12 rounded-xl bg-orange-50 text-brandOrange flex items-center justify-center font-bold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
              </div>
              <span class="text-[11px] font-extrabold uppercase tracking-wider text-accent block">One-Touch Bean-to-Cup</span>
              <h3 class="text-lg font-heading font-bold text-primary group-hover:text-brandOrange transition-colors">Fully Automatic</h3>
              <p class="text-xs text-slate-600 leading-relaxed">
                Automated one-touch grinding, tamping, and brewing with integrated milk frothing systems and digital diagnostic displays.
              </p>
            </div>
            <div class="pt-3 border-t border-slate-100">
              <span class="text-[11px] text-slate-500 font-medium">Jura, De'Longhi, Saeco, Philips, Miele</span>
            </div>
          </div>

          <!-- Card 2: Semi Automatic -->
          <div class="bg-white border border-bordercolor rounded-2xl p-6 space-y-4 shadow-2xs hover:shadow-md hover:border-brandOrange transition-all flex flex-col justify-between group">
            <div class="space-y-3">
              <div class="w-12 h-12 rounded-xl bg-blue-50 text-brandBlue flex items-center justify-center font-bold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
              </div>
              <span class="text-[11px] font-extrabold uppercase tracking-wider text-brandBlue block">Manual Portafilter Systems</span>
              <h3 class="text-lg font-heading font-bold text-primary group-hover:text-brandOrange transition-colors">Semi Automatic</h3>
              <p class="text-xs text-slate-600 leading-relaxed">
                Single and dual-boiler espresso machines requiring manual dosing and tamping, paired with precision steam wands.
              </p>
            </div>
            <div class="pt-3 border-t border-slate-100">
              <span class="text-[11px] text-slate-500 font-medium">Breville, Gaggia Classic, Rancilio, Lelit</span>
            </div>
          </div>

          <!-- Card 3: Semi Professional / Prosumer -->
          <div class="bg-white border border-bordercolor rounded-2xl p-6 space-y-4 shadow-2xs hover:shadow-md hover:border-brandOrange transition-all flex flex-col justify-between group">
            <div class="space-y-3">
              <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-800 flex items-center justify-center font-bold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              </div>
              <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-700 block">Prosumer &amp; E61 Group</span>
              <h3 class="text-lg font-heading font-bold text-primary group-hover:text-brandOrange transition-colors">Semi Professional</h3>
              <p class="text-xs text-slate-600 leading-relaxed">
                Commercial-grade stainless steel heat-exchanger (HX) &amp; dual-boiler machines with rotary pumps and brass group heads.
              </p>
            </div>
            <div class="pt-3 border-t border-slate-100">
              <span class="text-[11px] text-slate-500 font-medium">Rocket, ECM, Profitec, Bezzera, Quick Mill</span>
            </div>
          </div>

          <!-- Card 4: Commercial -->
          <div class="bg-white border border-bordercolor rounded-2xl p-6 space-y-4 shadow-2xs hover:shadow-md hover:border-brandOrange transition-all flex flex-col justify-between group">
            <div class="space-y-3">
              <div class="w-12 h-12 rounded-xl bg-red-50 text-red-600 flex items-center justify-center font-bold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
              </div>
              <span class="text-[11px] font-extrabold uppercase tracking-wider text-red-600 block">Commercial &amp; High-Volume</span>
              <h3 class="text-lg font-heading font-bold text-primary group-hover:text-brandOrange transition-colors">Commercial</h3>
              <p class="text-xs text-slate-600 leading-relaxed">
                Multi-group cafe machines, high-volume office bean-to-cup dispensers, and commercial drip batch brewers.
              </p>
            </div>
            <div class="pt-3 border-t border-slate-100">
              <span class="text-[11px] text-slate-500 font-medium">Mastrena, La Marzocco, Faema, Bunn, Bravilor</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- DUAL FOCUS: RESIDENTIAL vs COMMERCIAL SEGMENTS -->
    <section class="py-16 bg-white border-b border-bordercolor">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
          <span class="text-accent text-xs font-bold uppercase tracking-wider">Tailored Solutions</span>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-bold text-primary">
            Specialized Care for Home Kitchens &amp; Corporate Workplaces
          </h2>
          <p class="text-slate-600 text-sm md:text-base leading-relaxed">
            Whether your morning starts with an artisanal home espresso or your entire company relies on a high-capacity breakroom coffee station, our technicians understand the distinct mechanical and operational demands of both environments.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          
          <!-- Card 1: Residential Home Systems -->
          <div class="bg-white border border-bordercolor rounded-2xl overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col justify-between group">
            <div>
              <div class="h-52 sm:h-60 w-full bg-slate-100 overflow-hidden relative">
                <img src="../img/residential-coffee-machine.webp" alt="Residential Built-In and Countertop Coffee Machine Repair" title="Residential Coffee Machine Repair Toronto &amp; GTA" width="800" height="450" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-x-0 top-0 h-16 pointer-events-none" style="background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 100%);"></div>
                <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-white text-[11px] font-extrabold uppercase tracking-wider shadow-lg" style="background-color: #0A2E52; border: 1px solid rgba(255, 255, 255, 0.25);">
                  <svg class="w-3.5 h-3.5 text-brandOrange" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                  <span>Home &amp; Kitchen</span>
                </div>
              </div>

              <div class="p-6 sm:p-7 space-y-4">
                <div>
                  <h3 class="text-xl sm:text-2xl font-heading font-bold text-primary group-hover:text-brandOrange transition-colors">Residential Coffee Machines</h3>
                  <p class="text-slate-600 text-sm leading-relaxed mt-2">
                    Expert on-site diagnostics and repairs for built-in cabinetry systems and luxury countertop espresso units, performed directly on your counter with surface protection.
                  </p>
                </div>

                <ul class="space-y-2.5 pt-1 text-sm text-slate-700">
                  <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span><strong>Built-In Wall Units:</strong> Miele, Bosch, Thermador &amp; Gaggenau</span>
                  </li>
                  <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span><strong>Countertop Espresso:</strong> Breville, De'Longhi, Gaggia &amp; Jura</span>
                  </li>
                  <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span><strong>Clean In-Home Care:</strong> Protective mats &amp; genuine OEM parts</span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="px-6 pb-6 sm:px-7 sm:pb-7 pt-2">
              <a href="tel:9057178905" class="inline-flex items-center gap-2 text-sm font-bold text-brandBlue hover:text-brandOrange transition-colors">
                <span>Book Residential Repair</span> &rarr;
              </a>
            </div>
          </div>

          <!-- Card 2: Commercial & Office Systems -->
          <div class="bg-white border border-bordercolor rounded-2xl overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col justify-between group">
            <div>
              <div class="h-52 sm:h-60 w-full bg-slate-100 overflow-hidden relative">
                <img src="../img/commercial-coffee-machine.webp" alt="Commercial and Office Espresso Coffee System Maintenance" title="Commercial Office Coffee Machine Repair Toronto &amp; GTA" width="800" height="450" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-x-0 top-0 h-16 pointer-events-none" style="background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 100%);"></div>
                <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-white text-[11px] font-extrabold uppercase tracking-wider shadow-lg bg-brandOrange" style="background-color: #FF6B00; border: 1px solid rgba(255, 255, 255, 0.25);">
                  <svg class="w-3.5 h-3.5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path></svg>
                  <span>Office &amp; Commercial</span>
                </div>
              </div>

              <div class="p-6 sm:p-7 space-y-4">
                <div>
                  <h3 class="text-xl sm:text-2xl font-heading font-bold text-primary group-hover:text-brandOrange transition-colors">Commercial &amp; Office Coffee Systems</h3>
                  <p class="text-slate-600 text-sm leading-relaxed mt-2">
                    Rapid breakdown repairs and scheduled preventative maintenance for corporate breakrooms, executive pantries, and busy commercial workplaces.
                  </p>
                </div>

                <ul class="space-y-2.5 pt-1 text-sm text-slate-700">
                  <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span><strong>High-Volume Brewers:</strong> Bunn, Mastrena, Bravilor &amp; Saeco Pro</span>
                  </li>
                  <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span><strong>Bean-to-Cup &amp; Pods:</strong> Keurig Commercial, Nespresso Pro &amp; VKI</span>
                  </li>
                  <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span><strong>Preventative Maintenance:</strong> Proactive descaling &amp; filter renewals</span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="px-6 pb-6 sm:px-7 sm:pb-7 pt-2">
              <a href="tel:9057178905" class="inline-flex items-center gap-2 text-sm font-bold text-accent hover:text-accent-hover transition-colors">
                <span>Request Commercial Office Service</span> &rarr;
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- CONTENT & PROBLEMS SECTION (WITH PHOTO & SYMPTOMS) -->
    <section class="py-16 max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12">
      <div class="lg:col-span-8 space-y-6">
        <div class="space-y-4">
          <h2 class="text-2xl font-heading font-bold text-primary">Expert Diagnostics for Complex Coffee &amp; Espresso Mechanics</h2>
          <p class="text-slate-600 leading-relaxed text-sm md:text-base">
            Modern coffee makers and commercial espresso equipment are intricate systems combining high electrical voltage, high pressure water pumps (generating 9 to 19 bars of pressure), precision thermoblocks, and delicate electronics. When an error code appears or pressure drops, amateur tinkering can crack internal water manifolds or cause hazardous electrical shorts. Our licensed technicians conduct calibrated diagnostics to safely restore performance.
          </p>
        </div>

        <!-- Image -->
        <div class="h-64 sm:h-80 md:h-96 bg-slate-200 rounded-xl overflow-hidden flex items-center justify-center border border-bordercolor shadow-sm">
          <img src="../img/coffee-machine-repair-service.webp" alt="Licensed Technician Diagnosing and Repairing Internal Mechanics of an Espresso Machine with Precision Calibrated Tools" title="Professional Coffee &amp; Espresso Machine Diagnostics and Repair Services in Toronto &amp; GTA" width="1280" height="720" loading="lazy" decoding="async" class="object-cover w-full h-full">
        </div>
      </div>

      <!-- SIDEBAR -->
      <aside class="lg:col-span-4 space-y-8">
        
        <!-- GTA Areas Widget -->
        <div class="bg-white border border-bordercolor rounded-xl p-6 shadow-sm space-y-4">
          <h4 class="font-heading font-bold text-primary text-base border-b border-slate-100 pb-2">Coffee Machine Service Areas</h4>
          <p class="text-xs text-slate-500 leading-relaxed">Prompt technician dispatch for homes and corporate facilities across:</p>
          <div class="grid grid-cols-2 gap-2 text-xs font-semibold text-secondary">
            <a href="../locations/toronto-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span> Toronto</a>
            <a href="../locations/mississauga-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span> Mississauga</a>
            <a href="../locations/brampton-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span> Brampton</a>
            <a href="../locations/vaughan-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span> Vaughan</a>
            <a href="../locations/markham-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span> Markham</a>
            <a href="../locations/oakville-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span> Oakville</a>
            <a href="../locations/hamilton-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span> Hamilton</a>
            <a href="../locations/burlington-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span> Burlington</a>
          </div>
          <a href="../locations" class="block bg-primary text-white font-bold py-2.5 rounded-lg text-center text-xs hover:bg-brandDarkBlue transition-colors cursor-pointer">
            View All 20+ Service Cities &rarr;
          </a>
        </div>

        <!-- Office Maintenance Callout Widget -->
        <div class="bg-primary text-white rounded-xl p-6 shadow-md space-y-4" style="background-color: #0A2E52;">
          <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-accent/20 text-accent text-[11px] font-bold uppercase tracking-wider">
            Office Coffee Continuity
          </div>
          <h4 class="font-heading font-bold text-lg leading-snug text-white">Need Regular Preventative Maintenance for Your Office?</h4>
          <p class="text-xs text-slate-200 leading-relaxed">
            Avoid sudden morning coffee outages in your workplace. We offer scheduled filter replacements, sanitary descaling, and gasket overhauls tailored to corporate breakroom usage.
          </p>
          <a href="tel:9057178905" class="block w-full bg-accent hover:bg-accent-hover text-white font-bold py-3 rounded-lg text-center text-xs transition-colors shadow">
            Call Office Support: 905-717-8905
          </a>
        </div>

      </aside>
    </section>

    <!-- FULL WIDTH BRANDS SECTION (Screenshot Reference: Multi-Column Bulleted Directory) -->
    <section class="py-16 bg-white border-b border-bordercolor">
      <div class="max-w-7xl mx-auto px-4 space-y-10">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
          <span class="text-accent text-xs font-bold uppercase tracking-wider block">OEM Parts &amp; Factory Calibrated Diagnostics</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-bold text-primary">
            Brands Available for Service and Repair
          </h2>
          <p class="text-slate-600 text-sm md:text-base leading-relaxed">
            Our certified coffee machine technicians provide diagnostics, repairs, and preventative maintenance for all leading residential, prosumer, and commercial espresso brands across Toronto and surrounding Greater Toronto Area communities, including:
          </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-y-3.5 gap-x-6 text-sm sm:text-base">
          
          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Ascaso</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Bezzera</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Bravilor Bonamat</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Breville</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Bunn</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>De'Longhi</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>ECM</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Faema</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Gaggia</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Jura</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Keurig</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>La Marzocco</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Lelit</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Mastrena</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Miele</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Nespresso</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Nuova Simonelli</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Philips</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Profitec</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Quick Mill</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Rancilio</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Rocket Espresso</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>Saeco Professional</span>
          </div>

          <div class="flex items-center gap-2 font-medium text-slate-800 hover:text-brandOrange transition-colors">
            <span class="w-1.5 h-1.5 rounded-full bg-accent flex-shrink-0"></span>
            <span>VKI</span>
          </div>

        </div>

        <p class="text-xs text-slate-500 text-center pt-4 border-t border-slate-100">
          Don't see your coffee machine make or model listed? We service all residential, office &amp; commercial brands. Call <a href="tel:9057178905" class="text-accent font-bold hover:underline">905-717-8905</a> to verify parts availability.
        </p>
      </div>
    </section>

    <!-- FAQS ACCORDION -->
    <section id="faq" class="bg-slate-50 border-y border-bordercolor py-16">
      <div class="max-w-4xl mx-auto px-4 space-y-8">
        <div class="text-center space-y-2">
          <span class="text-accent text-xs font-bold uppercase tracking-wider">Helpful Answers</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-bold text-primary">Frequently Asked Questions</h2>
          <p class="text-slate-600 text-sm">Everything you need to know about our residential and commercial coffee equipment services.</p>
        </div>

        <div class="space-y-4">
          
          <details class="group bg-white border border-bordercolor rounded-xl p-5 open:ring-1 open:ring-accent transition-all">
            <summary class="font-heading font-bold text-base text-primary cursor-pointer flex justify-between items-center list-none select-none">
              <span>Do you repair both home coffee machines and commercial office coffee systems?</span>
              <span class="text-accent group-open:rotate-180 transition-transform duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </span>
            </summary>
            <div class="pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
              Yes. We provide complete diagnostics, repair, and maintenance for both residential units (luxury built-in cabinet coffee makers, bean-to-cup systems, and countertop espresso machines) and commercial office equipment (corporate breakroom coffee machines, high-capacity batch drip systems, and commercial espresso units) across Toronto and the GTA.
            </div>
          </details>

          <details class="group bg-white border border-bordercolor rounded-xl p-5 open:ring-1 open:ring-accent transition-all">
            <summary class="font-heading font-bold text-base text-primary cursor-pointer flex justify-between items-center list-none select-none">
              <span>Which coffee machine brands do you service and maintain?</span>
              <span class="text-accent group-open:rotate-180 transition-transform duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </span>
            </summary>
            <div class="pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
              We service top residential and commercial coffee brands, including Gaggia, Mastrena, Bunn, Breville, De'Longhi, Bravilor Bonamat, Saeco Professional, Nespresso, VKI Technologies, Keurig Commercial, as well as Miele, Jura, Bosch, Thermador, and more. If your brand is not listed, simply contact our team with your model number to confirm parts availability.
            </div>
          </details>

          <details class="group bg-white border border-bordercolor rounded-xl p-5 open:ring-1 open:ring-accent transition-all">
            <summary class="font-heading font-bold text-base text-primary cursor-pointer flex justify-between items-center list-none select-none">
              <span>What is included in preventative maintenance for office coffee machines?</span>
              <span class="text-accent group-open:rotate-180 transition-transform duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </span>
            </summary>
            <div class="pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
              Our preventative maintenance service includes food-grade internal descaling to remove mineral buildup, water line and solenoid valve inspections, high-wear O-ring and silicone seal renewals, water filtration cartridge replacements, grinder burr cleaning and recalibration, and pressure/temperature testing to prevent sudden workplace downtime.
            </div>
          </details>

          <details class="group bg-white border border-bordercolor rounded-xl p-5 open:ring-1 open:ring-accent transition-all">
            <summary class="font-heading font-bold text-base text-primary cursor-pointer flex justify-between items-center list-none select-none">
              <span>Why is my coffee machine leaking water from underneath?</span>
              <span class="text-accent group-open:rotate-180 transition-transform duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </span>
            </summary>
            <div class="pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
              Water leaks commonly originate from degraded brew group gaskets, cracked silicone pressure tubing, a calcified boiler seal, loose quick-connect fittings, or a faulty solenoid release valve. Our mobile technicians carry common OEM replacement seals and hoses to detect and resolve leaks on-site.
            </div>
          </details>

          <details class="group bg-white border border-bordercolor rounded-xl p-5 open:ring-1 open:ring-accent transition-all">
            <summary class="font-heading font-bold text-base text-primary cursor-pointer flex justify-between items-center list-none select-none">
              <span>Why is my espresso machine not heating or dispensing lukewarm coffee?</span>
              <span class="text-accent group-open:rotate-180 transition-transform duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </span>
            </summary>
            <div class="pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
              Heating failures or lukewarm output usually indicate heavy mineral scale accumulation inside the thermoblock, a blown thermal cutoff fuse, a failing heating element, or a defective NTC temperature sensor. A technician will inspect the electrical and thermal circuits with calibrated diagnostic tools to pinpoint and replace the damaged component.
            </div>
          </details>

          <details class="group bg-white border border-bordercolor rounded-xl p-5 open:ring-1 open:ring-accent transition-all">
            <summary class="font-heading font-bold text-base text-primary cursor-pointer flex justify-between items-center list-none select-none">
              <span>How does your diagnostic fee and warranty work?</span>
              <span class="text-accent group-open:rotate-180 transition-transform duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </span>
            </summary>
            <div class="pt-3 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-3">
              We provide transparent upfront written quotes before any repair or maintenance begins. Our diagnostic service call fee is completely waived when you proceed with the repair. Furthermore, all completed repairs are backed by our comprehensive written warranty on parts and labour using genuine OEM replacement parts.
            </div>
          </details>

        </div>

        <!-- Post-FAQ CTA & Trust Line -->
        <div class="mt-10 text-center space-y-4">
          <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
            <a href="tel:<?php echo defined('BUSINESS_PHONE') ? BUSINESS_PHONE : '905-717-8905'; ?>"
              class="gtm-web-call inline-flex items-center justify-center gap-2.5 bg-brandOrange hover:bg-orange-600 text-white font-extrabold px-6 py-3.5 sm:px-8 sm:py-4 rounded-xl text-xs sm:text-sm md:text-base shadow-lg hover:shadow-xl transition-all uppercase tracking-wide w-full sm:w-auto">
              <svg class="w-5 h-5 animate-pulse flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
              </svg>
              <span class="whitespace-nowrap">Still Have Questions? Call <?php echo defined('BUSINESS_PHONE') ? BUSINESS_PHONE : '905-717-8905'; ?></span>
            </a>
            <a href="<?php echo $base_url; ?>schedule"
              class="gtm-web-lead inline-flex items-center justify-center gap-2.5 bg-primary hover:bg-brandDarkBlue text-white font-extrabold px-6 py-3.5 sm:px-8 sm:py-4 rounded-xl text-xs sm:text-sm md:text-base shadow-lg hover:shadow-xl transition-all uppercase tracking-wide w-full sm:w-auto">
              <svg class="w-5 h-5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              <span class="whitespace-nowrap">Schedule Repair</span>
            </a>
          </div>
          <p class="text-xs text-slate-700 font-semibold flex items-center justify-center gap-2 flex-wrap pt-1">
            <span>🛡️ Service Call Fee Waived With Repairs</span>
            <span class="text-slate-400">•</span>
            <span>Speak Directly With a Technician</span>
            <span class="text-slate-400">•</span>
            <span>Same-Day Availability</span>
          </p>
        </div>
      </div>
    </section>

    <!-- UNIFIED CUSTOMER REVIEWS -->
    <?php include __DIR__ . '/../reviews-widget.php'; ?>
  </main>

<?php include __DIR__ . '/../footer.php'; ?>

</body>
</html>
