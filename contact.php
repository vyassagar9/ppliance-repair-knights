<?php
require_once __DIR__ . '/config.php';
$base_url = './';
$page_title = 'Contact Us | Appliance Repair Knights';
$page_description = 'Need urgent appliance repair? Contact Appliance Repair Knights at 905-717-8905. Available 24/7 across GTA, Kitchener, Hamilton & Oshawa.';
$page_keywords = 'appliance repair knights contact, appliance repair phone number';
$canonical_url = 'https://www.appliancerepairknights.com/contact';

$gmb_rating = GMB_RATING_VALUE;
$gmb_reviews = GMB_REVIEW_COUNT;

$custom_head_schema = <<<HTML
  <!-- UNIFIED JSON-LD SCHEMA (@graph: LocalBusiness + BreadcrumbList) -->
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
        "@type": "BreadcrumbList",
        "@id": "https://www.appliancerepairknights.com/contact#breadcrumb",
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
            "name": "Contact Us",
            "item": "https://www.appliancerepairknights.com/contact"
          }
        ]
      }
    ]
  }
  </script>
HTML;

include 'head.php';
?>

<body class="bg-lightbg text-secondary font-body min-h-screen flex flex-col">

<?php 
$base_url = './';
$current_page = 'contact';
include 'header.php'; 
?>

  <!-- BREADCRUMBS -->
  <nav class="bg-white border-b border-bordercolor">
    <div class="max-w-7xl mx-auto px-4 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="./" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Contact</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- HERO SECTION -->
    <section class="bg-primary text-white py-16 md:py-24 relative overflow-hidden">
      <div class="max-w-4xl mx-auto px-4 text-center space-y-6 relative z-10">
        <span class="text-accent text-sm font-bold uppercase tracking-widest block">Get in Touch</span>
        <h1 class="text-3xl md:text-5xl font-heading font-bold text-white tracking-tight">
          Get in Touch With Appliance Repair Knights
        </h1>
        <p class="text-slate-300 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
          Talk to a real dispatcher right now, or drop us an inquiry online. We're here to get your appliances back to working order fast.
        </p>
      </div>
    </section>

    <!-- CONTACT DETAILS & FORM -->
    <section class="py-16 max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12">
      
      <!-- Contact Info Left -->
      <div class="lg:col-span-5 space-y-8">
        <h2 class="text-2xl font-heading font-bold text-primary">Direct Contact</h2>
        
        <div class="space-y-6">
          <div class="flex items-start gap-4">
            <div class="bg-accent/15 p-3 rounded-lg text-accent mt-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            </div>
            <div>
              <span class="text-xs uppercase tracking-wider text-slate-400 font-bold block">Phone Dispatch</span>
              <a href="tel:9057178905" class="gtm-web-call text-xl font-bold text-primary hover:text-accent transition-colors">905-717-8905</a>
              <span class="text-xs text-slate-500 block mt-1">Lines open 24/7 for emergency bookings.</span>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="bg-accent/15 p-3 rounded-lg text-accent mt-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <div>
              <span class="text-xs uppercase tracking-wider text-slate-400 font-bold block">Email Inquiry</span>
              <span class="text-sm font-semibold text-secondary">info@appliancerepairknights.com</span>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="bg-accent/15 p-3 rounded-lg text-accent mt-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
              <span class="text-xs uppercase tracking-wider text-slate-400 font-bold block">Service Hours</span>
              <span class="text-sm font-semibold text-secondary block">Monday - Sunday: 7:00 AM - 10:00 PM</span>
              <span class="text-xs text-slate-500">Emergency support calls handled 24/7.</span>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="bg-accent/15 p-3 rounded-lg text-accent mt-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
            <div>
              <span class="text-xs uppercase tracking-wider text-slate-400 font-bold block">Headquarters Address (NAP)</span>
              <strong class="text-sm font-bold text-primary block">100 King St W, Toronto, ON M5X 1A9</strong>
              <span class="text-xs text-slate-500 block mt-0.5">(Proudly Serving Toronto &amp; the entire GTA)</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Online Inquiry Form Right -->
      <div class="lg:col-span-7">
        <?php include __DIR__ . '/forms/contact-form.php'; ?>
      </div>

    </section>

    <!-- GOOGLE MY BUSINESS MAP & LOCATION SECTION -->
    <section class="py-16 bg-slate-900 text-white border-t border-bordercolor" id="google-map-section">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
          <span class="inline-flex items-center gap-2 bg-brandOrange/10 border border-brandOrange/30 text-brandOrange text-xs font-extrabold uppercase tracking-widest px-3.5 py-1 rounded-full">
            📍 Local Headquarters & Verified GMB Listing
          </span>
          <h2 class="text-3xl font-heading font-extrabold text-white">
            Find Us On <span class="text-brandOrange">Google Maps</span>
          </h2>
          <p class="text-slate-400 text-sm md:text-base">
            Verified Service Area & Local Business NAP for Appliance Repair Knights Ltd.
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
          
          <!-- Left: NAP Business Card -->
          <div class="lg:col-span-5 bg-slate-950 text-white p-8 rounded-2xl shadow-xl flex flex-col justify-between border border-slate-800 space-y-6">
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <img src="img/Appliance_Repair_Knights_Logo-white.avif" alt="Appliance Repair Knights Logo" width="723" height="345" loading="lazy" decoding="async" class="h-12 w-auto object-contain">
                <div>
                  <h3 class="text-xl font-extrabold text-white">Appliance Repair Knights Ltd.</h3>
                  <p class="text-xs text-amber-400 font-semibold">★ 5.0 Rated on Google Maps</p>
                </div>
              </div>

              <hr class="border-slate-800">

              <div class="space-y-3.5 text-xs sm:text-sm text-slate-300">
                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                  <div>
                    <strong class="text-white block">Service Address (GTA HQ):</strong>
                    <span>100 King St W, Toronto, ON M5X 1A9</span>
                    <span class="block text-slate-400 text-xs mt-0.5">(Proudly Serving Toronto &amp; the entire GTA)</span>
                  </div>
                </div>

                <div class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                  <div>
                    <strong class="text-white block">Dispatch Phone:</strong>
                    <a href="tel:9057178905" class="gtm-web-call text-brandOrange font-bold text-base hover:underline">905-717-8905</a>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <div>
                    <strong class="text-white block">Operating Hours:</strong>
                    <span>Open 7 Days a Week: 8:00 AM – 9:00 PM</span>
                  </div>
                </div>
              </div>
            </div>

            <a href="https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059" target="_blank" rel="noopener noreferrer" class="w-full bg-brandOrange hover:bg-orange-600 text-white font-bold text-xs py-3 px-4 rounded-xl text-center flex items-center justify-center gap-2 transition-all shadow-md">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
              View Listing on Google Maps
            </a>
          </div>

          <!-- Right: Google Maps Embed Iframe -->
          <div class="lg:col-span-7 bg-lightbg rounded-2xl overflow-hidden border border-bordercolor shadow-md min-h-[380px]">
            <iframe 
              title="Appliance Repair Knights Google Maps Location"
              src="https://maps.google.com/maps?q=Appliance+Repair+Knights+Ltd.+100+King+St+W+Toronto+ON&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed" 
              width="100%" 
              height="100%" 
              style="border:0; min-height: 380px;" 
              allowfullscreen="" 
              loading="lazy">
            </iframe>
          </div>

        </div>
      </div>
    </section>

  </main>

<?php 
$base_url = './';
include 'footer.php'; 
?>
