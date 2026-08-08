<?php
$base_url = './';
$page_title = 'Contact Us | Appliance Repair Knights';
$page_description = 'Need urgent appliance repair? Contact Appliance Repair Knights at 905-717-8905. Available 24/7 across GTA, Kitchener, Hamilton & Oshawa.';
$page_keywords = 'appliance repair knights contact, appliance repair phone number';
$canonical_url = 'https://www.appliancerepairknights.com/contact';
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
$current_page = 'contact';
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
        </div>

        <!-- Service Area Coverage with Local Phone Numbers -->
        <div class="bg-slate-50 border border-bordercolor rounded-xl p-6 space-y-4 shadow-sm">
          <h3 class="font-heading font-bold text-lg text-primary">Coverage & Local Dispatch</h3>
          <p class="text-xs text-slate-500 leading-relaxed">
            Call our localized dispatch lines for faster routing:
          </p>
          <ul class="space-y-3 text-xs text-slate-700 font-semibold">
            <li class="flex items-center justify-between border-b border-slate-200 pb-2">
              <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Toronto & GTA</span>
              <a href="tel:9057178905" class="gtm-web-call text-accent font-bold hover:underline">905-717-8905</a>
            </li>
            <li class="flex items-center justify-between border-b border-slate-200 pb-2">
              <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Hamilton Area</span>
              <a href="tel:9057178905" class="gtm-web-call text-accent font-bold hover:underline">905-717-8905</a>
            </li>
            <li class="flex items-center justify-between border-b border-slate-200 pb-2">
              <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Oshawa & Durham</span>
              <a href="tel:9057178905" class="gtm-web-call text-accent font-bold hover:underline">905-717-8905</a>
            </li>
            <li class="flex items-center justify-between">
              <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Kitchener-Waterloo</span>
              <a href="tel:9057178905" class="gtm-web-call text-accent font-bold hover:underline">905-717-8905</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Online Inquiry Form Right -->
      <div class="lg:col-span-7">
        <?php include __DIR__ . '/forms/contact-form.php'; ?>
      </div>

    </section>

  </main>

<?php 
$base_url = './';
include 'footer.php'; 
?>
