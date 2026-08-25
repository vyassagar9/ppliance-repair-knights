<?php
$base_url = '../';
$current_page = 'microwave';
$page_title = 'Microwave Repair & Installation | Appliance Repair Knights';
$page_description = 'Fast built-in and over-the-range microwave repair & installation. Trusted local technicians across GTA. Book online or call today!';
$page_keywords = 'microwave repair service, built-in microwave installation';
$canonical_url = 'https://www.appliancerepairknights.com/services/microwave-repair';

$custom_head_schema = <<<'HTML'
  <!-- JSON-LD Service Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Microwave Repair & Installation Service",
    "provider": {
      "@type": "LocalBusiness",
      "@id": "https://www.appliancerepairknights.com/#organization",
      "name": "Appliance Repair Knights Ltd.",
      "telephone": "905-717-8905",
      "url": "https://www.appliancerepairknights.com/",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 King St W",
        "addressLocality": "Toronto",
        "addressRegion": "ON",
        "postalCode": "M5X 1A9",
        "addressCountry": "CA"
      }
    },
    "areaServed": [
      { "@type": "AdministrativeArea", "name": "Greater Toronto Area" },
      { "@type": "AdministrativeArea", "name": "Hamilton" },
      { "@type": "AdministrativeArea", "name": "Oshawa" },
      { "@type": "AdministrativeArea", "name": "Kitchener-Waterloo" }
    ],
    "description": "Expert microwave diagnostics, component replacement, and secure built-in installations. We resolve sparking issues, heating failure, broken door latches, and keypad malfunctions."
  }
  </script>

  <!-- JSON-LD FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Why is my microwave sparking inside?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Internal sparks are usually caused by a damaged waveguide cover, exposed metal elements (like racks or chipped interior paint), or dirty splattered food residue absorbing electromagnetic waves. It is critical to address this quickly to protect the magnetron."
        }
      },
      {
        "@type": "Question",
        "name": "Is it worth repairing a microwave or should I replace it?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "For premium built-in, over-the-range (OTR), or smart drawer microwaves, repair is highly economical compared to replacement and modification costs. Desktop countertop models are often replaced, but OTR units are easily fixed by replacing magnetrons, fuses, or capacitors."
        }
      },
      {
        "@type": "Question",
        "name": "Can you install an over-the-range microwave?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Our technicians are fully equipped to install and secure built-in and over-the-range microwaves, including proper alignment with venting channels and cabinet brackets."
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
      <a href="../index.php" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-slate-400">Services</span>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Microwave Repair & Installation</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- SERVICE HERO -->
    <section class="bg-primary text-white py-12 md:py-16 overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 space-y-6">
          <span class="text-accent text-sm md:text-base font-bold uppercase tracking-widest block">Microwave Specialists</span>
          <h1 class="text-3xl md:text-5xl font-heading font-bold text-white tracking-tight leading-tight">
            Microwave Repair & <br><span class="text-accent">Installation Services</span>
          </h1>
          <p class="text-slate-300 text-base md:text-lg max-w-xl leading-relaxed">
            Is your microwave sparking inside, not heating up, or experiencing keypad faults? We service over-the-range (OTR) units, built-in drawers, and premium smart microwaves on-site.
          </p>
          <div class="space-y-3">
            <div class="flex items-center gap-2.5 text-slate-200">
              <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Common magnetrons, door switches, and fuses fully stocked</span>
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
          <?php $defaultAppliance = 'Microwave'; include __DIR__ . '/../forms/quote-form.php'; ?>
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
          <h2 class="text-2xl font-heading font-bold text-primary">Microwave Troubleshooting & Installations</h2>
          <p class="text-slate-600 leading-relaxed text-sm md:text-base">
            Modern built-in microwaves are complex, featuring integrated venting, high-voltage capacitors, magnetrons, and touch control logic. Chipped paint, food splatters, or wear and tear can cause dangerous electrical sparks or heating failures. Our team can repair built-in drawers, over-the-range hood units, and carry out precise physical brackets installation.
          </p>
        </div>

        <!-- Image -->
        <div class="h-64 md:h-96 bg-slate-200 rounded-xl overflow-hidden flex items-center justify-center border border-bordercolor">
          <img src="../img/microwave-repair-service.webp" alt="Microwave Oven Repair Details" loading="lazy" decoding="async" class="object-cover w-full h-full">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-4">
          <!-- Left: Symptoms -->
          <div class="space-y-6">
            <h3 class="text-xl font-heading font-bold text-primary">Common Microwave Problems We Fix</h3>
            <ul class="space-y-3.5">
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Will Not Heat:</strong> Frequently caused by a blown magnetron, failed high-voltage capacitor, or faulty diode.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Internal Sparks:</strong> Waveguide cover degradation or metal-on-metal arcs from exposed racks/cabinet walls.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Turntable Not Turning:</strong> A failed turntable motor, cracked roller ring, or drive bushing.</span>
              </li>
              <li class="flex items-start gap-2 text-sm text-slate-600">
                <span class="w-1.5 h-1.5 rounded-full bg-accent mt-2 flex-shrink-0"></span>
                <span><strong>Shut-off in Seconds:</strong> Faulty door micro-switches, cooling fans, or main control board relays.</span>
              </li>
            </ul>
          </div>

          <!-- Right: Models We Repair -->
          <div class="space-y-6">
            <h3 class="text-xl font-heading font-bold text-primary">Microwave Types We Service</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              No matter what style or integration level your microwave is, our certified technicians carry original parts for:
            </p>
            <ul class="space-y-2 text-sm text-slate-700 font-semibold">
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Over-The-Range (OTR) Ventilation Microwaves
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Built-In Cabinet Microwaves (With Trim Kits)
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Under-Counter Microwave Drawers
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-accent"></span>
                Countertop Microwave Ovens
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
            <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Toronto</span>
            <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Mississauga</span>
            <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Hamilton</span>
            <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Oshawa</span>
            <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Brampton</span>
            <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Oakville</span>
          </div>
          <a href="../contact.php" class="block bg-primary text-white font-bold py-2.5 rounded-lg text-center text-xs hover:bg-primary/95 transition-colors cursor-pointer">
            View All Cities
          </a>
        </div>

        <!-- Brands Widget -->
        <div class="bg-white border border-bordercolor rounded-xl p-6 shadow-sm space-y-4">
          <h4 class="font-heading font-bold text-primary text-base border-b border-slate-100 pb-2">Brands We Repair</h4>
          <p class="text-xs text-slate-500 leading-relaxed">Authorized service for:</p>
          <div class="grid grid-cols-3 gap-3 text-center text-[10px] font-bold text-slate-400">
            <span class="p-2 border border-slate-100 rounded">Panasonic</span>
            <span class="p-2 border border-slate-100 rounded">LG</span>
            <span class="p-2 border border-slate-100 rounded">Samsung</span>
            <span class="p-2 border border-slate-100 rounded">Whirlpool</span>
            <span class="p-2 border border-slate-100 rounded">GE</span>
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
              <span>Why is my microwave sparking inside?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-500 leading-relaxed">
              Internal sparks are usually caused by a damaged waveguide cover, exposed metal elements (like racks or chipped interior paint), or dirty splattered food residue absorbing electromagnetic waves. It is critical to address this quickly to protect the magnetron.
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Is it worth repairing a microwave or should I replace it?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-500 leading-relaxed">
              For premium built-in, over-the-range (OTR), or smart drawer microwaves, repair is highly economical compared to replacement and modification costs. Desktop countertop models are often replaced, but OTR units are easily fixed by replacing magnetrons, fuses, or capacitors.
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="bg-white border border-bordercolor rounded-xl overflow-hidden shadow-sm">
            <button class="w-full px-6 py-5 text-left font-semibold text-primary flex justify-between items-center hover:text-accent focus:outline-none transition-colors" onclick="toggleFaq(this)">
              <span>Can you install an over-the-range microwave?</span>
              <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="hidden px-6 pb-5 text-xs md:text-sm text-slate-500 leading-relaxed">
              Yes. Our technicians are fully equipped to install and secure built-in and over-the-range microwaves, including proper alignment with venting channels and cabinet brackets.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="py-16 max-w-7xl mx-auto px-4 space-y-8">
      <h2 class="text-2xl font-heading font-bold text-primary text-center">What Our Clients Say</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-6 border border-bordercolor bg-white rounded-xl space-y-4 shadow-sm">
          <div class="flex items-center gap-1.5 text-amber-500">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          </div>
          <p class="text-sm text-slate-600 leading-relaxed italic">
            "Our built-in over-the-range microwave stopped heating. The tech diagnosed a failed magnetron and had it replaced from his van stocks immediately. Great, clean, professional same-day service!"
          </p>
          <div class="text-xs font-bold text-primary">
            Arthur M. — Microwave Repair, Toronto
          </div>
        </div>

        <div class="p-6 border border-bordercolor bg-white rounded-xl space-y-4 shadow-sm">
          <div class="flex items-center gap-1.5 text-amber-500">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          </div>
          <p class="text-sm text-slate-600 leading-relaxed italic">
            "Needed a new over-the-range microwave installed. These guys arrived with brackets and tools, mounted it cleanly, and routed the exhaust properly. Unbeatable price and very professional."
          </p>
          <div class="text-xs font-bold text-primary">
            Sarah K. — Microwave Installation, Mississauga
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include __DIR__ . '/../footer.php'; ?>
