<?php
$base_url = './';
$page_title = 'About Appliance Repair Knights | Trusted Local Technicians';
$page_description = 'Learn about Appliance Repair Knights. Over 10+ years serving GTA with certified technicians, upfront pricing, and 100% satisfaction guarantee.';
$page_keywords = 'about appliance repair knights, appliance repair technicians GTA';
$canonical_url = 'https://www.appliancerepairknights.com/about';
include 'head.php';
?>

  <!-- JSON-LD LocalBusiness Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Appliance Repair Knights",
    "image": "https://www.appliancerepairknights.com/img/logo.png",
    "@id": "https://www.appliancerepairknights.com/#localbusiness",
    "url": "https://www.appliancerepairknights.com/",
    "telephone": "905-717-8905",
    "priceRange": "$$",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "100 King St W",
      "addressLocality": "Toronto",
      "addressRegion": "ON",
      "postalCode": "M5X 1A9",
      "addressCountry": "CA"
    }
  }
  </script>
  <!-- Global Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-lightbg text-secondary font-body min-h-screen flex flex-col">

<?php 
$base_url = './';
$current_page = 'about';
include 'header.php'; 
?>

    <!-- Mobile Drawer -->
    <div id="mobile-menu-drawer" class="hidden md:hidden bg-white border-t border-bordercolor shadow-lg transition-all duration-300">
      <div class="px-4 py-4 space-y-3 flex flex-col">
        <a href="index.php" class="mobile-nav-link font-semibold text-secondary hover:text-accent py-2 px-2 rounded-lg cursor-pointer">Home</a>
        <a href="about.php" class="mobile-nav-link font-semibold text-secondary hover:text-accent py-2 px-2 rounded-lg cursor-pointer">About</a>
        
        <span class="font-bold text-xs uppercase tracking-wider text-slate-400 px-2">Services</span>
        <div class="grid grid-cols-2 gap-2 bg-slate-50 p-2.5 rounded-lg border border-bordercolor">
          <a href="services/fridge-repair.php" class="text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Fridge</a>
          <a href="services/stove-repair.php" class="text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Stove</a>
          <a href="services/microwave-repair.php" class="text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Microwave</a>
          <a href="services/washer-repair.php" class="text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Washer</a>
          <a href="services/dryer-repair.php" class="text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Dryer</a>
          <a href="services/dishwasher-repair.php" class="text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Dishwasher</a>
        </div>

        <span class="font-bold text-xs uppercase tracking-wider text-slate-400 px-2">Service Areas</span>
        <div class="grid grid-cols-2 gap-2 bg-slate-50 p-2.5 rounded-lg border border-bordercolor">
          <a href="index.php#areas" class="mobile-nav-link text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Toronto & GTA</a>
          <a href="index.php#areas" class="mobile-nav-link text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Mississauga</a>
          <a href="index.php#areas" class="mobile-nav-link text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Hamilton</a>
          <a href="index.php#areas" class="mobile-nav-link text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Oshawa</a>
          <a href="index.php#areas" class="mobile-nav-link text-sm font-medium py-1.5 text-secondary hover:text-accent cursor-pointer">Kitchener-Waterloo</a>
        </div>

        <a href="schedule.php" class="mobile-nav-link font-semibold text-secondary hover:text-accent py-2 px-2 rounded-lg cursor-pointer">Book Online</a>
        <div class="pt-4 border-t border-bordercolor flex flex-col gap-2">
          <a href="tel:9057178905" class="gtm-web-call bg-primary text-white text-center font-bold py-3 rounded-lg flex justify-center items-center gap-2 cursor-pointer">
            <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            Call: 905-717-8905
          </a>
          <a href="schedule.php" class="bg-accent hover:bg-accent-hover text-white text-center font-bold py-3 rounded-lg cursor-pointer">
            Schedule My Repair
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- BREADCRUMBS -->
  <nav class="bg-white border-b border-bordercolor">
    <div class="max-w-7xl mx-auto px-4 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="index.php" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">About Us</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- HERO SECTION -->
    <section class="bg-primary text-white py-16 md:py-24 relative overflow-hidden">
      <div class="max-w-4xl mx-auto px-4 text-center space-y-6 relative z-10">
        <span class="text-accent text-sm font-bold uppercase tracking-widest block">Our Company</span>
        <h1 class="text-3xl md:text-5xl font-heading font-bold text-white tracking-tight">
          About Appliance Repair Knights
        </h1>
        <p class="text-slate-300 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
          We are dedicated to providing same-day appliance repair services across the Greater Toronto Area, Hamilton, Oshawa, and Kitchener-Waterloo.
        </p>
      </div>
    </section>

    <!-- STORY & MISSION -->
    <section class="py-16 max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div class="space-y-6">
        <h2 class="text-2xl font-heading font-bold text-primary">Our Story & Mission</h2>
        <p class="text-slate-600 leading-relaxed text-sm md:text-base">
          Appliance Repair Knights was founded with a clear goal: to take the stress out of appliance breakdowns. A malfunctioning refrigerator or laundry unit is a major disruption, yet finding a trustworthy technician who arrives on time shouldn't be a challenge.
        </p>
        <p class="text-slate-600 leading-relaxed text-sm">
          We built our team around core standards of quick dispatch, transparent pricing, and quality repairs. Our factory-certified technicians arrive in fully-stocked vans, allowing us to solve over 85% of repair requests on our first visit.
        </p>
      </div>
      <div class="h-64 md:h-96 bg-slate-200 rounded-xl overflow-hidden flex items-center justify-center border border-bordercolor">
        <img src="img/20260615_120025.avif" alt="Our Tech Team" class="object-cover w-full h-full" onerror="this.onerror=null; this.parentNode.innerHTML='<div class=\'text-slate-400 flex flex-col items-center\'><svg class=\'w-16 h-16 mb-2\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\' xmlns=\'http://www.w3.org/2000/svg\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\'></path></svg><span class=\'text-xs font-bold uppercase tracking-wider\'>Appliance Knights Team Photo</span></div>';">
      </div>
    </section>

    <!-- VALUES SECTION -->
    <section class="bg-slate-50 border-y border-bordercolor py-16">
      <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-heading font-bold text-primary mb-12">Our Core Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          
          <div class="bg-white p-6 rounded-xl border border-bordercolor shadow-sm space-y-4">
            <div class="bg-accent/15 w-12 h-12 rounded-lg flex items-center justify-center text-accent mx-auto">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="font-heading font-bold text-lg text-primary">Responsive Speed</h3>
            <p class="text-xs text-slate-500 leading-relaxed">
              We respond quickly to repair emergencies. Most of our service slots are dispatched and completed on the same day.
            </p>
          </div>

          <div class="bg-white p-6 rounded-xl border border-bordercolor shadow-sm space-y-4">
            <div class="bg-accent/15 w-12 h-12 rounded-lg flex items-center justify-center text-accent mx-auto">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <h3 class="font-heading font-bold text-lg text-primary">Integrity First</h3>
            <p class="text-xs text-slate-500 leading-relaxed">
              We diagnose and quote flat rates upfront. You approve the exact cost before our technicians start any repair.
            </p>
          </div>

          <div class="bg-white p-6 rounded-xl border border-bordercolor shadow-sm space-y-4">
            <div class="bg-accent/15 w-12 h-12 rounded-lg flex items-center justify-center text-accent mx-auto">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h3 class="font-heading font-bold text-lg text-primary">Quality Craftsmanship</h3>
            <p class="text-xs text-slate-500 leading-relaxed">
              All repairs utilize OEM parts and are backed by our written parts and labor warranty.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- REGIONS WE SERVE -->
    <section class="py-16 max-w-4xl mx-auto px-4 text-center space-y-6">
      <h2 class="text-2xl font-heading font-bold text-primary">Serving the GTA & Beyond</h2>
      <p class="text-slate-600 leading-relaxed text-sm">
        We serve homeowners across Toronto, Mississauga, Brampton, Oakville, Burlington, Hamilton, Oshawa, and the Kitchener-Waterloo region. Our dispatch zones place qualified technicians close to your neighborhood for prompt arrival.
      </p>
    </section>

  </main>

  <!-- FOOTER -->
  <footer class="bg-primary text-white border-t border-secondary/30 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 mb-12">
      <div class="lg:col-span-4 space-y-4">
        <a href="index.php" class="flex items-center gap-2 cursor-pointer">
          <img src="img/logo.png" alt="Appliance Repair Knights Logo" class="h-10 md:h-12 w-auto object-contain">
        </a>
        <p class="text-xs text-slate-400 max-w-sm leading-relaxed">
          Same-day appliance repair across the Greater Toronto Area, Hamilton, Oshawa and Kitchener Waterloo. Licensed, Insured, Guaranteed.
        </p>
      </div>

      <div class="lg:col-span-3 space-y-3">
        <span class="text-xs uppercase tracking-wider text-slate-400 font-bold block">Our Services</span>
        <ul class="space-y-2 text-xs text-slate-300">
          <li><a href="services/fridge-repair.php" class="hover:text-accent cursor-pointer">Fridge Repair & Installation</a></li>
          <li><a href="services/stove-repair.php" class="hover:text-accent cursor-pointer">Stove & Range Repair</a></li>
          <li><a href="services/microwave-repair.php" class="hover:text-accent cursor-pointer">Microwave Repair & Installation</a></li>
          <li><a href="services/washer-repair.php" class="hover:text-accent cursor-pointer">Washing Machine Diagnostic & Repair</a></li>
          <li><a href="services/dryer-repair.php" class="hover:text-accent cursor-pointer">Dryer Repair & Duct Cleaning</a></li>
          <li><a href="services/dishwasher-repair.php" class="hover:text-accent cursor-pointer">Dishwasher Inspection & Repair</a></li>
        </ul>
      </div>

      <div class="lg:col-span-2 space-y-3">
        <span class="text-xs uppercase tracking-wider text-slate-400 font-bold block">Quick Links</span>
        <ul class="space-y-2 text-xs text-slate-300">
          <li><a href="index.php#why-us" class="hover:text-accent cursor-pointer">Why Choose Us</a></li>
          <li><a href="index.php#how-it-works" class="hover:text-accent cursor-pointer">How It Works</a></li>
          <li><a href="index.php#areas" class="hover:text-accent cursor-pointer">Service Areas</a></li>
          <li><a href="index.php#faqs" class="hover:text-accent cursor-pointer">FAQs</a></li>
  </main>

<?php 
$base_url = './';
include 'footer.php'; 
?>
