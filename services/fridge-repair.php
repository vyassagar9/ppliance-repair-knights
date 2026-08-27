<?php
require_once __DIR__ . '/../config.php';
$base_url = '../';
$current_page = 'fridge';
$page_title = 'Fridge Repair & Installation | Appliance Repair Knights';
$page_description = 'Reliable refrigerator repair & installation. Fixing cooling issues, leaks, and strange noises. Same-day service available. Call 905-717-8905.';
$page_keywords = 'refrigerator repair near me, fridge installation, fix cooling issues';
$canonical_url = 'https://www.appliancerepairknights.com/services/fridge-repair';

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
        "@id": "https://www.appliancerepairknights.com/services/fridge-repair#service",
        "serviceType": "Fridge Repair & Installation Service",
        "provider": {
          "@id": "https://www.appliancerepairknights.com/#organization"
        },
        "areaServed": [
          { "@type": "AdministrativeArea", "name": "Greater Toronto Area" },
          { "@type": "AdministrativeArea", "name": "Hamilton" },
          { "@type": "AdministrativeArea", "name": "Oshawa" },
          { "@type": "AdministrativeArea", "name": "Kitchener-Waterloo" }
        ],
        "description": "Expert same-day refrigerator and freezer repair and installation services. We diagnose and fix cooling failures, ice maker leaks, broken thermostats, compressor issues, and built-in panel installs."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://www.appliancerepairknights.com/services/fridge-repair#breadcrumb",
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
            "name": "Fridge Repair",
            "item": "https://www.appliancerepairknights.com/services/fridge-repair"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "https://www.appliancerepairknights.com/services/fridge-repair#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "Why is my refrigerator not cooling but the freezer works?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "This is often caused by an evaporator fan failure, a blocked air damper between the freezer and fridge, or a malfunctioning defrost cycle system. Our technician will isolate the exact part causing the airflow issue during diagnosis."
            }
          },
          {
            "@type": "Question",
            "name": "How much does it cost to repair a refrigerator?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We provide a flat-rate quote upfront after diagnosing the issue. The cost depends on the problem and any required parts. We always confirm the price with you before we begin."
            }
          },
          {
            "@type": "Question",
            "name": "Can you fix my refrigerator today?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we prioritize same-day calls for refrigerator emergencies to prevent food spoilage. Call before 1 PM and we'll aim to dispatch a technician to your home today."
            }
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
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-slate-400">Services</span>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Fridge Repair & Installation</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- SERVICE HERO -->
    <section class="bg-primary text-white py-12 md:py-16 overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 space-y-6">
          <span class="text-accent text-sm md:text-base font-bold uppercase tracking-widest block">Fridge Specialists</span>
          <h1 class="text-3xl md:text-5xl font-heading font-bold text-white tracking-tight leading-tight">
            Reliable Refrigerator Repair <br><span class="text-accent">& Installation Services</span>
          </h1>
          <p class="text-slate-300 text-base md:text-lg max-w-xl leading-relaxed">
            Is your refrigerator not cooling, leaking water from the freezer, or experiencing noisy compressor faults? We repair French doors, side-by-sides, built-in column systems, and standalone freezers on the spot.
          </p>
          <div class="space-y-3">
            <div class="flex items-center gap-2.5 text-slate-200">
              <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Common start relays, fan motors, and control boards fully stocked</span>
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
          <?php $defaultAppliance = 'Refrigerator'; include __DIR__ . '/../forms/quote-form.php'; ?>
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
          <h2 class="text-2xl font-heading font-bold text-primary">Fridge Repair & Diagnostics</h2>
          <p class="text-slate-600 leading-relaxed text-sm md:text-base">
            Your refrigerator is the most vital appliance in your home, running continuously to protect your food supplies. When a compressor relay fails, frost clogs the evaporator, or a door seal gaps, temperatures quickly rise. Our licensed, local technicians carry original replacement parts to handle any emergency.
          </p>
        </div>

        <!-- Image -->
        <div class="h-64 md:h-96 bg-slate-200 rounded-xl overflow-hidden flex items-center justify-center border border-bordercolor">
          <img src="../img/refrigerator-repair-service.webp" alt="Same-Day Refrigerator Repair and Diagnostic Details" title="Refrigerator & Freezer Diagnostics Toronto & GTA" width="798" height="448" loading="lazy" decoding="async" class="object-cover w-full h-full">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-4">
          <!-- Left: Symptoms -->
          <div class="space-y-6">
            <h3 class="text-xl font-heading font-bold text-primary">Common Fridge Problems We Fix</h3>
            <ul class="space-y-3.5">
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Not Cooling:</strong> Faulty evaporator fans, clogged defrost drain lines, or failed compressor start relays.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Leaking Water:</strong> Clogged defrost drain tube dripping water onto the interior floor or under the vegetable drawers.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Ice Maker Not Working:</strong> Blocked water inlet valve, frozen fill tube, or faulty modular ice maker assembly.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Constant Buzzing/Humming:</strong> Failing evaporator fan motor or worn compressor motor coils.</span>
              </li>
            </ul>
          </div>

          <!-- Right: Models We Repair -->
          <div class="space-y-6">
            <h3 class="text-xl font-heading font-bold text-primary">Fridge Types We Service</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              We repair and install all configurations and major manufacturer brands:
            </p>
            <ul class="space-y-2 text-sm text-slate-700 font-semibold">
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                French Door & Side-by-Side Refrigerators
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Built-In Column & Bottom-Freezer Models
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Stand-Alone Freezers & Under-Counter Wine Coolers
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Top-Mount Freezer Refrigerators
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
            <span class="p-2 border border-slate-100 rounded">Sub-Zero</span>
            <span class="p-2 border border-slate-100 rounded">LG</span>
            <span class="p-2 border border-slate-100 rounded">Samsung</span>
            <span class="p-2 border border-slate-100 rounded">Whirlpool</span>
            <span class="p-2 border border-slate-100 rounded">Bosch</span>
            <span class="p-2 border border-slate-100 rounded">KitchenAid</span>
          </div>
        </div>
      </aside>
    </section>

    <!-- FAQS ACCORDION -->
    <section class="bg-slate-50 border-y border-bordercolor py-16">
      <div class="max-w-4xl mx-auto px-4 space-y-8">
        <h2 class="text-2xl font-heading font-bold text-primary text-center">Frequently Asked Questions</h2>
        
        <div class="space-y-4">
          <!-- FAQ 1 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Why is my refrigerator not cooling but the freezer works?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-500 leading-relaxed">
              This is often caused by an evaporator fan failure, a blocked air damper between the freezer and fridge, or a malfunctioning defrost cycle system. Our technician will isolate the exact part causing the airflow issue during diagnosis.
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>How much does it cost to repair a refrigerator?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-500 leading-relaxed">
              We provide a flat-rate quote upfront after diagnosing the issue. The cost depends on the problem and any required parts. We always confirm the price with you before we begin.
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Can you fix my refrigerator today?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-500 leading-relaxed">
              Yes, we prioritize same-day calls for refrigerator emergencies to prevent food spoilage. Call before 1 PM and we'll aim to dispatch a technician to your home today.
            </div>
          </div>
        </div>

        <!-- Post-FAQ CTA & Trust Line -->
        <div class="mt-10 text-center space-y-3">
          <a href="tel:<?php echo defined('BUSINESS_PHONE') ? BUSINESS_PHONE : '905-717-8905'; ?>"
            class="inline-flex items-center justify-center gap-2.5 bg-brandOrange hover:bg-orange-600 text-white font-extrabold px-8 py-4 rounded-xl text-sm sm:text-base shadow-lg hover:shadow-xl transition-all uppercase tracking-wide">
            <svg class="w-5 h-5 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
            </svg>
            <span>Still Have Questions? Call <?php echo defined('BUSINESS_PHONE') ? BUSINESS_PHONE : '905-717-8905'; ?></span>
          </a>
          <p class="text-xs text-slate-700 font-semibold flex items-center justify-center gap-2 flex-wrap">
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
