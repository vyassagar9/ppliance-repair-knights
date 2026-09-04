<?php
require_once __DIR__ . '/../config.php';
$base_url = '../';
$current_page = 'washer';
$page_title = 'Washing Machine Repair | Appliance Repair Knights';
$page_description = 'Fast washing machine repair & diagnostic services. Spin cycle issues, leaks, & error codes fixed fast. Certified techs with up to 1-year warranty.';
$page_keywords = 'washing machine repair service, washer diagnostic, fix washer spin cycle';
$canonical_url = 'https://www.appliancerepairknights.com/services/washer-repair';

$gmb_rating = GMB_RATING_VALUE;
$gmb_reviews = GMB_REVIEW_COUNT;

$custom_head_schema = <<<HTML
  <!-- UNIFIED JSON-LD SCHEMA (@graph: LocalBusiness + Service + BreadcrumbList + FAQPage) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "LocalBusiness",
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
          "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059"
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
        "@id": "https://www.appliancerepairknights.com/services/washer-repair#service",
        "serviceType": "Washing Machine Diagnostic & Repair Service",
        "provider": {
          "@id": "https://www.appliancerepairknights.com/#organization"
        },
        "areaServed": [
          { "@type": "AdministrativeArea", "name": "Greater Toronto Area" },
          { "@type": "AdministrativeArea", "name": "Hamilton" },
          { "@type": "AdministrativeArea", "name": "Oshawa" },
          { "@type": "AdministrativeArea", "name": "Kitchener-Waterloo" }
        ],
        "description": "Professional same-day washing machine diagnostics, component swaps, and repair. We resolve leaks, suspension issues, spin cycle failure, drain blocks, and electrical codes."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://www.appliancerepairknights.com/services/washer-repair#breadcrumb",
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
            "name": "Washer Repair",
            "item": "https://www.appliancerepairknights.com/services/washer-repair"
          }
        ]
      }
    ]
  }
  </script>

  <!-- DEDICATED TOP-LEVEL FAQPage JSON-LD SCHEMA (Google Rich Results Tool Detection) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.appliancerepairknights.com/services/washer-repair#faq",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does washing machine repair cost in the GTA?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Washer repair costs vary depending on the brand, model, problem, and parts required. A simple issue such as a blocked drain may cost less to resolve than a failed pump, motor, or control component. The best way to determine the cost is to have the washer properly diagnosed first. Our team can provide a clear estimate after assessing your washing machine repair needs across the GTA."
        }
      },
      {
        "@type": "Question",
        "name": "Why is my washer not spinning or draining properly?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "A washing machine that won't spin or drain may have a clogged drain system, faulty drain pump, worn drive components, an unbalanced load, or a problem with the lid or door lock. If water remains in the drum or clothes are coming out soaking wet, professional diagnosis can identify the underlying problem. For reliable washing machine repair in the GTA, our technicians can diagnose the issue and recommend the right fix."
        }
      },
      {
        "@type": "Question",
        "name": "Do you repair both front-load and top-load washers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We provide washing machine repair for both front-load and top-load models. Service can include problems such as drainage, spinning, leaking, excessive vibration, unusual noises, and water-filling issues. If your front- or top-load washer needs attention, our GTA washing machine repair team can help."
        }
      },
      {
        "@type": "Question",
        "name": "Can a leaking washing machine be fixed the same day?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "In many cases, yes. A leaking washer can be caused by a damaged door seal, loose or damaged hose, water inlet valve, drain problem, or another component. Same-day service may be available in the Toronto and GTA area, depending on scheduling and parts availability. If water is actively leaking, stop using the appliance to help prevent further water damage and arrange washing machine repair in the GTA as soon as possible."
        }
      },
      {
        "@type": "Question",
        "name": "What causes a washing machine to shake or make loud noises?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Some vibration is normal, but excessive shaking or loud noises can indicate an unbalanced load, an uneven floor, worn suspension components, drum bearings, or another mechanical problem. If the noise continues after balancing the load and checking that the washer is level, a technician should inspect the machine. Our local technicians can find the cause and provide the appropriate washing machine repairs that GTA homeowners need."
        }
      },
      {
        "@type": "Question",
        "name": "Do you offer a warranty on washer parts and labour?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Warranty coverage depends on the service and parts used. Before the repair is completed, ask our team about the applicable warranty for your specific washer repair, including what is covered for parts and labour. We can explain the available coverage when you arrange washing machine repair anywhere in the GTA."
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
  <nav class="bg-white border-b border-bordercolor">
    <div class="max-w-7xl mx-auto px-4 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="../" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-slate-400">Services</span>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Washing Machine Repair</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- SERVICE HERO -->
    <section class="bg-primary text-white py-12 md:py-16 overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 space-y-6">
          <span class="text-accent text-sm md:text-base font-bold uppercase tracking-widest block">Washer Specialists</span>
          <h1 class="text-3xl md:text-5xl font-heading font-bold text-white tracking-tight leading-tight">
            Washing Machine Repair <br><span class="text-accent">& Diagnostic Services</span>
          </h1>
          <p class="text-slate-300 text-base md:text-lg max-w-xl leading-relaxed">
            Is your washing machine leaking water, failing to spin, vibrating violently, or showing error codes? We repair front-loaders, top-loaders, and commercial coin washers on-site.
          </p>
          <div class="space-y-3">
            <div class="flex items-center gap-2.5 text-slate-200">
              <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Common pumps, door gaskets, and motors fully stocked</span>
            </div>
            <div class="flex items-center gap-2.5 text-slate-200">
              <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>90-day warranty on labor & parts</span>
            </div>
          </div>
          <div class="flex pt-4">
            <a href="tel:9057178905" class="gtm-web-call bg-accent hover:bg-accent-hover text-white font-bold px-8 py-4 rounded-lg transition-all-300 text-center flex items-center justify-center gap-2 cursor-pointer shadow-md">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
              Call 905-717-8905
            </a>
          </div>
        </div>

        <!-- Reusable Quote Form -->
        <div class="lg:col-span-5">
          <?php $defaultAppliance = 'Washing Machine'; include __DIR__ . '/../forms/quote-form.php'; ?>
        </div>
      </div>
    </section>

    <!-- TRUST PILLARS BAR -->
    <section class="bg-white border-b border-bordercolor py-6">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div class="flex items-center justify-center gap-3">
          <div class="p-2 bg-slate-100 rounded-lg text-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <span class="text-sm font-bold text-primary">Licensed & Insured</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2 bg-slate-100 rounded-lg text-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <span class="text-sm font-bold text-primary">Affordable Rates</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2 bg-slate-100 rounded-lg text-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <span class="text-sm font-bold text-primary">Same-Day Repair</span>
        </div>
        <div class="flex items-center justify-center gap-3">
          <div class="p-2 bg-slate-100 rounded-lg text-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
          </div>
          <span class="text-sm font-bold text-primary">Skilled Technicians</span>
        </div>
      </div>
    </section>

    <!-- CONTENT / PROBLEMS SECTION -->
    <section class="py-16 max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12">
      <div class="lg:col-span-8 space-y-12">
        <div class="space-y-4">
          <h2 class="text-2xl font-heading font-bold text-primary">Washing Machine Repair & Troubleshooting</h2>
          <p class="text-slate-600 leading-relaxed text-sm md:text-base">
            Washing machines undergo massive physical forces during spin cycles. Over time, shock absorbers degrade, pumps clog with lint/debris, or electronic door locks fail. Our experienced technicians carry OEM pumps, belts, gaskets, and sensors to complete repairs in a single visit.
          </p>
        </div>

        <!-- Image -->
        <div class="h-64 md:h-96 bg-slate-200 rounded-xl overflow-hidden flex items-center justify-center border border-bordercolor">
          <img src="../img/washing-machine-repair-service.webp" alt="Washing Machine Repair and Troubleshooting Details" title="Certified Washer Diagnostics & Repair" width="739" height="415" loading="lazy" decoding="async" class="object-cover w-full h-full">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-4">
          <!-- Left: Symptoms -->
          <div class="space-y-6">
            <h3 class="text-xl font-heading font-bold text-primary">Common Washer Problems We Fix</h3>
            <ul class="space-y-3.5">
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Not Draining:</strong> Clogged drain pump filter, kinked drain line, or failed pump impeller.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>No Spin Cycle:</strong> Broken drive belt, worn motor brushes, or failed lid lock switch.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Violent Vibration:</strong> Worn internal shock absorbers, broken suspension rods, or unlevel cabinet legs.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Door Gasket Leak:</strong> Torn or moldy door seals on front-load washing machines.</span>
              </li>
            </ul>
          </div>

          <!-- Right: Models We Repair -->
          <div class="space-y-6">
            <h3 class="text-xl font-heading font-bold text-primary">Washer Types We Service</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              We service front-load, top-load, and commercial laundry systems:
            </p>
            <ul class="space-y-2 text-sm text-slate-700 font-semibold">
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Front-Loading Washing Machines
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Top-Loading Washing Machines
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Stacked Washer-Dryer Combo Units
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Commercial & Coin-Op Washers
              </li>
            </ul>
          </div>
        </div>

        <!-- WHY CHOOSE US BENTO STYLE -->
        <div class="space-y-6 pt-6">
          <h3 class="text-xl font-heading font-bold text-primary text-center">Quality & Reliable Services at Reasonable Prices</h3>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-slate-900 text-white rounded-xl space-y-3">
              <h4 class="font-heading font-bold text-lg text-accent">Time</h4>
              <p class="text-xs text-slate-300 leading-relaxed">
                We understand how valuable your time is. That's why we offer same-day appliance repair services. We arrive on time, respecting your schedule so you can return to normal routines.
              </p>
            </div>
            <div class="p-6 bg-white border border-bordercolor rounded-xl space-y-3 shadow-sm">
              <h4 class="font-heading font-bold text-lg text-primary">Quality</h4>
              <p class="text-xs text-slate-500 leading-relaxed">
                Our technicians bring factory certification and original parts. We aim to identify and solve the root cause of the malfunction by the end of the appointment.
              </p>
            </div>
            <div class="p-6 bg-white border border-bordercolor rounded-xl space-y-3 shadow-sm">
              <h4 class="font-heading font-bold text-lg text-primary">Price</h4>
              <p class="text-xs text-slate-500 leading-relaxed">
                We maintain complete transparency with flat-rate quotes presented upfront after diagnostic checks. No hidden charges or surprise hourly fees.
              </p>
            </div>
          </div>
        </div>

      </div>

      <!-- SIDEBAR -->
      <aside class="lg:col-span-4 space-y-8">
        <!-- GTA Areas Widget -->
        <div class="bg-white border border-bordercolor rounded-xl p-6 shadow-sm space-y-4">
          <h4 class="font-heading font-bold text-primary text-base border-b border-slate-100 pb-2">GTA Service Areas</h4>
          <p class="text-xs text-slate-500 leading-relaxed">We dispatch local technicians across:</p>
          <div class="grid grid-cols-2 gap-2 text-xs font-semibold text-secondary">
            <a href="../locations/toronto-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Toronto</a>
            <a href="../locations/mississauga-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Mississauga</a>
            <a href="../locations/hamilton-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Hamilton</a>
            <a href="../locations/oshawa-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Oshawa</a>
            <a href="../locations/brampton-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Brampton</a>
            <a href="../locations/oakville-appliance-repair" class="flex items-center gap-1.5 hover:text-brandOrange transition-colors"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Oakville</a>
          </div>
          <a href="../#service-areas" class="block bg-primary text-white font-bold py-2.5 rounded-lg text-center text-xs hover:bg-brandDarkBlue transition-colors cursor-pointer">
            View All Cities
          </a>
        </div>

        <!-- Brands Widget -->
        <div class="bg-white border border-bordercolor rounded-xl p-6 shadow-sm space-y-4">
          <h4 class="font-heading font-bold text-primary text-base border-b border-slate-100 pb-2">Brands We Repair</h4>
          <p class="text-xs text-slate-500 leading-relaxed">Authorized service for:</p>
          <div class="grid grid-cols-3 gap-3 text-center text-[10px] font-bold text-slate-400">
            <span class="p-2 border border-slate-100 rounded">Maytag</span>
            <span class="p-2 border border-slate-100 rounded">LG</span>
            <span class="p-2 border border-slate-100 rounded">Samsung</span>
            <span class="p-2 border border-slate-100 rounded">Whirlpool</span>
            <span class="p-2 border border-slate-100 rounded">Kenmore</span>
            <span class="p-2 border border-slate-100 rounded">Miele</span>
          </div>
        </div>
      </aside>
    </section>

    <!-- FAQS ACCORDION -->
    <section class="bg-slate-50 border-y border-bordercolor py-16">
      <div class="max-w-4xl mx-auto px-4 space-y-8">
        <div class="text-center space-y-2">
          <h3 class="text-xs uppercase tracking-widest text-brandOrange font-extrabold">Got Questions?</h3>
          <h2 class="text-2xl sm:text-3xl font-heading font-bold text-primary">Washing Machine Repair FAQ – GTA</h2>
        </div>
        
        <div class="space-y-4">
          <!-- FAQ 1 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Q. How much does washing machine repair cost in the GTA?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-600 leading-relaxed">
              Washer repair costs vary depending on the brand, model, problem, and parts required. A simple issue such as a blocked drain may cost less to resolve than a failed pump, motor, or control component. The best way to determine the cost is to have the washer properly diagnosed first. Our team can provide a clear estimate after assessing your washing machine repair needs across the GTA.
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Q. Why is my washer not spinning or draining properly?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-600 leading-relaxed">
              A washing machine that won't spin or drain may have a clogged drain system, faulty drain pump, worn drive components, an unbalanced load, or a problem with the lid or door lock. If water remains in the drum or clothes are coming out soaking wet, professional diagnosis can identify the underlying problem. For reliable washing machine repair in the GTA, our technicians can diagnose the issue and recommend the right fix.
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Q. Do you repair both front-load and top-load washers?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-600 leading-relaxed">
              Yes. We provide washing machine repair for both front-load and top-load models. Service can include problems such as drainage, spinning, leaking, excessive vibration, unusual noises, and water-filling issues. If your front- or top-load washer needs attention, our GTA washing machine repair team can help.
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Q. Can a leaking washing machine be fixed the same day?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-600 leading-relaxed">
              In many cases, yes. A leaking washer can be caused by a damaged door seal, loose or damaged hose, water inlet valve, drain problem, or another component. Same-day service may be available in the Toronto and GTA area, depending on scheduling and parts availability. If water is actively leaking, stop using the appliance to help prevent further water damage and arrange washing machine repair in the GTA as soon as possible.
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Q. What causes a washing machine to shake or make loud noises?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-600 leading-relaxed">
              Some vibration is normal, but excessive shaking or loud noises can indicate an unbalanced load, an uneven floor, worn suspension components, drum bearings, or another mechanical problem. If the noise continues after balancing the load and checking that the washer is level, a technician should inspect the machine. Our local technicians can find the cause and provide the appropriate washing machine repairs that GTA homeowners need.
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Q. Do you offer a warranty on washer parts and labour?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-600 leading-relaxed">
              Warranty coverage depends on the service and parts used. Before the repair is completed, ask our team about the applicable warranty for your specific washer repair, including what is covered for parts and labour. We can explain the available coverage when you arrange washing machine repair anywhere in the GTA.
            </div>
          </div>
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
            <span>🛡️ $0 Service Call With Any Paid Repair</span>
            <span class="text-slate-400">•</span>
            <span>⚡ Speak Directly With a Technician</span>
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
