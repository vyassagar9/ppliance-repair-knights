<?php
// Determine base path depending on whether included from root or subfolder
$base_url = isset($base_url) ? $base_url : '';
$current_page = isset($current_page) ? $current_page : '';
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7B6FLPR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- TOP DISPATCH ANNOUNCEMENT BAR -->
<aside class="bg-brandDarkBlue text-white text-xs py-2 px-4 border-b border-brandBlue/30">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <div class="flex items-center gap-2">
      <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
      <span class="font-medium text-slate-200">24/7 Emergency Dispatch Active Across Toronto &amp; GTA</span>
    </div>
    <div class="flex items-center gap-4 text-xs font-extrabold text-brandOrange">
      <span>⚡ Technicians Available Today</span>
      <a href="tel:9057178905" class="gtm-web-call-topbar hover:underline text-white hidden sm:inline">Call: 905-717-8905</a>
    </div>
  </div>
</aside>

<!-- MAIN NAVIGATION HEADER -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-brandBorder shadow-sm">
  <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">

    <!-- Brand Logo -->
    <a href="<?php echo $base_url; ?>index.php" class="flex items-center gap-2 group focus:outline-none flex-shrink-0" aria-label="Appliance Repair Knights Homepage">
      <img src="<?php echo $base_url; ?>img/logo.png" alt="Appliance Repair Knights Logo" class="h-14 sm:h-16 w-auto object-contain transition-transform group-hover:scale-105">
    </a>

    <!-- Desktop Nav Menu -->
    <nav class="hidden lg:flex items-center gap-6 font-semibold text-slate-700 text-sm">
      <a href="<?php echo $base_url; ?>index.php" class="<?php echo ($current_page == 'home') ? 'text-brandBlue font-bold' : ''; ?> hover:text-brandOrange transition-colors">Home</a>

      <!-- Services Dropdown -->
      <div class="relative group">
        <button class="flex items-center gap-1.5 <?php echo ($current_page == 'services') ? 'text-brandBlue font-bold' : ''; ?> hover:text-brandOrange py-2 transition-colors focus:outline-none font-semibold" aria-haspopup="true" aria-expanded="false">
          <span>Services</span>
          <svg class="w-4 h-4 text-slate-400 group-hover:text-brandOrange transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="absolute top-full left-0 w-64 bg-white border border-brandBorder shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
          <a href="<?php echo $base_url; ?>services/fridge-repair.php" class="block px-4 py-2.5 text-sm <?php echo ($current_page == 'fridge') ? 'text-brandOrange bg-slate-50 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium'; ?>">Refrigerator Repair</a>
          <a href="<?php echo $base_url; ?>services/washer-repair.php" class="block px-4 py-2.5 text-sm <?php echo ($current_page == 'washer') ? 'text-brandOrange bg-slate-50 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium'; ?>">Washing Machine Repair</a>
          <a href="<?php echo $base_url; ?>services/dryer-repair.php" class="block px-4 py-2.5 text-sm <?php echo ($current_page == 'dryer') ? 'text-brandOrange bg-slate-50 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium'; ?>">Dryer Repair &amp; Venting</a>
          <a href="<?php echo $base_url; ?>services/dishwasher-repair.php" class="block px-4 py-2.5 text-sm <?php echo ($current_page == 'dishwasher') ? 'text-brandOrange bg-slate-50 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium'; ?>">Dishwasher Repair</a>
          <a href="<?php echo $base_url; ?>services/stove-repair.php" class="block px-4 py-2.5 text-sm <?php echo ($current_page == 'stove') ? 'text-brandOrange bg-slate-50 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium'; ?>">Oven &amp; Stove Repair</a>
          <a href="<?php echo $base_url; ?>services/microwave-repair.php" class="block px-4 py-2.5 text-sm <?php echo ($current_page == 'microwave') ? 'text-brandOrange bg-slate-50 font-bold' : 'text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium'; ?>">Microwave Repair</a>
        </div>
      </div>

      <!-- Service Areas Dropdown -->
      <div class="relative group">
        <button class="flex items-center gap-1.5 hover:text-brandOrange py-2 transition-colors focus:outline-none font-semibold" aria-haspopup="true" aria-expanded="false">
          <span>Service Areas</span>
          <svg class="w-4 h-4 text-slate-400 group-hover:text-brandOrange transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="absolute top-full left-0 w-64 bg-white border border-brandBorder shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2 max-h-[75vh] overflow-y-auto">
          <a href="<?php echo $base_url; ?>index.php#service-areas" class="block px-4 py-2 text-xs font-bold uppercase tracking-wider text-brandOrange bg-slate-50 border-b border-slate-100">All Service Areas (GTA)</a>
          
          <!-- Top 7 Initial Locations -->
          <a href="<?php echo $base_url; ?>locations/toronto-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Toronto Appliance Repair</a>
          <a href="<?php echo $base_url; ?>locations/mississauga-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Mississauga Appliance Repair</a>
          <a href="<?php echo $base_url; ?>locations/brampton-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Brampton Appliance Repair</a>
          <a href="<?php echo $base_url; ?>locations/vaughan-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Vaughan Appliance Repair</a>
          <a href="<?php echo $base_url; ?>locations/markham-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Markham Appliance Repair</a>
          <a href="<?php echo $base_url; ?>locations/oakville-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Oakville Appliance Repair</a>
          <a href="<?php echo $base_url; ?>locations/scarborough-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Scarborough Appliance Repair</a>

          <!-- Toggle Button for Remaining Locations -->
          <button type="button" id="header-more-loc-btn" onclick="toggleHeaderLocations()" class="w-full text-left px-4 py-2 text-xs font-bold text-brandOrange hover:bg-slate-50 transition-colors flex items-center justify-between border-t border-slate-100 mt-1">
            <span>+ More Locations...</span>
            <svg id="header-more-loc-icon" class="w-3.5 h-3.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>

          <!-- Hidden Remaining Locations -->
          <div id="header-more-loc-list" class="hidden border-t border-slate-100 bg-slate-50/50">
            <a href="<?php echo $base_url; ?>locations/richmond-hill-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Richmond Hill Repair</a>
            <a href="<?php echo $base_url; ?>locations/burlington-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Burlington Appliance Repair</a>
            <a href="<?php echo $base_url; ?>locations/hamilton-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Hamilton Appliance Repair</a>
            <a href="<?php echo $base_url; ?>locations/kitchener-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Kitchener Appliance Repair</a>
            <a href="<?php echo $base_url; ?>locations/waterloo-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Waterloo Appliance Repair</a>
            <a href="<?php echo $base_url; ?>locations/cambridge-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Cambridge Appliance Repair</a>
            <a href="<?php echo $base_url; ?>locations/guelph-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Guelph Appliance Repair</a>
            <a href="<?php echo $base_url; ?>locations/pickering-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Pickering Appliance Repair</a>
            <a href="<?php echo $base_url; ?>locations/caledon-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Caledon Appliance Repair</a>
            <a href="<?php echo $base_url; ?>locations/oshawa-appliance-repair" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brandOrange font-medium">Oshawa Appliance Repair</a>
          </div>
        </div>
      </div>

      <a href="<?php echo $base_url; ?>about.php" class="<?php echo ($current_page == 'about') ? 'text-brandBlue font-bold' : ''; ?> hover:text-brandOrange transition-colors">About</a>
      <a href="<?php echo $base_url; ?>contact.php" class="<?php echo ($current_page == 'contact') ? 'text-brandBlue font-bold' : ''; ?> hover:text-brandOrange transition-colors">Contact</a>
    </nav>

    <!-- Right CTAs -->
    <div class="flex items-center gap-2 sm:gap-3">
      <!-- Phone Call Button CTA -->
      <a href="tel:9057178905" class="gtm-web-call-header bg-brandDarkBlue hover:bg-brandNavy text-white font-black px-4 py-2.5 sm:px-5 sm:py-2.5 rounded-xl text-sm transition-all flex items-center gap-2 shadow-md">
        <svg class="w-4 h-4 text-brandOrange animate-bounce" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
        <span class="hidden sm:inline">CALL:</span> <span>905-717-8905</span>
      </a>

      <!-- Fast Service Booking CTA -->
      <a href="<?php echo $base_url; ?>schedule.php" class="gtm-web-lead-header hidden sm:flex bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-4 py-2.5 rounded-xl text-xs sm:text-sm transition-all shadow-lg uppercase tracking-wider items-center gap-1.5">
        <span>BOOK ONLINE</span>
      </a>

      <!-- Mobile Menu Toggle Button -->
      <button id="mobile-menu-btn" class="lg:hidden text-slate-700 hover:text-brandOrange p-2 focus:outline-none" aria-label="Toggle Mobile Menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>

  </div>

  <!-- Mobile Nav Menu (Collapsible) -->
  <div id="mobile-menu" class="hidden lg:hidden bg-white border-b border-brandBorder px-4 pt-3 pb-6 space-y-3">
    <a href="<?php echo $base_url; ?>index.php" class="block font-bold text-brandBlue">Home</a>
    
    <div class="pl-2 space-y-1.5 border-l-2 border-brandOrange/30 my-2">
      <span class="text-xs uppercase text-slate-400 font-bold tracking-wider">Services</span>
      <a href="<?php echo $base_url; ?>services/fridge-repair.php" class="block text-sm text-slate-700 hover:text-brandOrange">Refrigerator Repair</a>
      <a href="<?php echo $base_url; ?>services/washer-repair.php" class="block text-sm text-slate-700 hover:text-brandOrange">Washing Machine Repair</a>
      <a href="<?php echo $base_url; ?>services/dryer-repair.php" class="block text-sm text-slate-700 hover:text-brandOrange">Dryer Repair</a>
      <a href="<?php echo $base_url; ?>services/dishwasher-repair.php" class="block text-sm text-slate-700 hover:text-brandOrange">Dishwasher Repair</a>
      <a href="<?php echo $base_url; ?>services/stove-repair.php" class="block text-sm text-slate-700 hover:text-brandOrange">Oven &amp; Stove Repair</a>
      <a href="<?php echo $base_url; ?>services/microwave-repair.php" class="block text-sm text-slate-700 hover:text-brandOrange">Microwave Repair</a>
    </div>

    <div class="pl-2 space-y-1.5 border-l-2 border-brandBlue/30 my-2">
      <span class="text-xs uppercase text-slate-400 font-bold tracking-wider">Service Areas</span>
      <a href="<?php echo $base_url; ?>index.php#service-areas" class="block text-sm font-bold text-brandOrange">Toronto &amp; GTA Overview</a>
      
      <!-- Top 7 Mobile Locations -->
      <a href="<?php echo $base_url; ?>locations/toronto-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Toronto</a>
      <a href="<?php echo $base_url; ?>locations/mississauga-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Mississauga</a>
      <a href="<?php echo $base_url; ?>locations/brampton-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Brampton</a>
      <a href="<?php echo $base_url; ?>locations/vaughan-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Vaughan</a>
      <a href="<?php echo $base_url; ?>locations/markham-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Markham</a>
      <a href="<?php echo $base_url; ?>locations/oakville-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Oakville</a>
      <a href="<?php echo $base_url; ?>locations/scarborough-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Scarborough</a>

      <button type="button" id="mobile-more-loc-btn" onclick="toggleMobileLocations()" class="text-xs font-bold text-brandOrange hover:underline pt-1 flex items-center gap-1">
        <span>+ More Locations...</span>
      </button>

      <div id="mobile-more-loc-list" class="hidden space-y-1.5 pt-1 border-t border-slate-100">
        <a href="<?php echo $base_url; ?>locations/richmond-hill-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Richmond Hill</a>
        <a href="<?php echo $base_url; ?>locations/burlington-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Burlington</a>
        <a href="<?php echo $base_url; ?>locations/hamilton-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Hamilton</a>
        <a href="<?php echo $base_url; ?>locations/kitchener-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Kitchener</a>
        <a href="<?php echo $base_url; ?>locations/waterloo-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Waterloo</a>
        <a href="<?php echo $base_url; ?>locations/cambridge-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Cambridge</a>
        <a href="<?php echo $base_url; ?>locations/guelph-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Guelph</a>
        <a href="<?php echo $base_url; ?>locations/pickering-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Pickering</a>
        <a href="<?php echo $base_url; ?>locations/caledon-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Caledon</a>
        <a href="<?php echo $base_url; ?>locations/oshawa-appliance-repair" class="block text-sm text-slate-700 hover:text-brandOrange">Oshawa</a>
      </div>
    </div>

    <a href="<?php echo $base_url; ?>about.php" class="block font-medium text-slate-700 hover:text-brandOrange">About Us</a>
    <a href="<?php echo $base_url; ?>contact.php" class="block font-medium text-slate-700 hover:text-brandOrange">Contact</a>
  </div>
</header>
