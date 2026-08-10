<?php
$base_url = './';
$page_title = 'About Appliance Repair Knights | Trusted Local Technicians';
$page_description = 'Learn about Appliance Repair Knights. Over 10+ years serving GTA with certified technicians, upfront pricing, and 100% satisfaction guarantee.';
$page_keywords = 'about appliance repair knights, appliance repair technicians GTA';
$canonical_url = 'https://www.appliancerepairknights.com/about';
include 'head.php';
?>

<body class="bg-lightbg text-secondary font-body min-h-screen flex flex-col">

<?php 
$base_url = './';
$current_page = 'about';
include 'header.php'; 
?>

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

        <!-- CTA Action Buttons after paragraphs -->
        <div class="pt-2 flex flex-wrap gap-4 items-center">
          <a href="schedule.php" class="bg-brandOrange hover:bg-orange-600 text-white font-bold px-6 py-3.5 rounded-xl transition-all shadow-md inline-flex items-center gap-2 text-xs uppercase tracking-wider">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            Book Online
          </a>
          <a href="tel:9057178905" class="gtm-web-call bg-primary hover:bg-brandDarkBlue text-white font-bold px-6 py-3.5 rounded-xl transition-all shadow-md inline-flex items-center gap-2 text-xs uppercase tracking-wider">
            <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            Call 905-717-8905
          </a>
        </div>
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

    <!-- GOOGLE MY BUSINESS MAP & LOCAL NAP SECTION -->
    <section class="py-16 bg-slate-900 text-white border-t border-bordercolor" id="gmb-nap-section">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
          <span class="inline-flex items-center gap-2 bg-brandOrange/10 border border-brandOrange/30 text-brandOrange text-xs font-extrabold uppercase tracking-widest px-3.5 py-1 rounded-full">
            📍 Local Headquarters &amp; Verified GMB Profile
          </span>
          <h2 class="text-3xl font-heading font-extrabold text-white">
            Find Appliance Repair Knights On <span class="text-brandOrange">Google Maps</span>
          </h2>
          <p class="text-slate-400 text-sm md:text-base">
            Official Business Profile, Verified Address &amp; Service Zones across GTA.
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
          
          <!-- Left: NAP Business Card -->
          <div class="lg:col-span-5 bg-slate-950 text-white p-8 rounded-2xl shadow-xl flex flex-col justify-between border border-slate-800 space-y-6">
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <img src="img/Appliance_Repair_Knights_Logo-white.avif" alt="Appliance Repair Knights Logo" class="h-12 w-auto object-contain">
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

            <a href="https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059" target="_blank" rel="noopener noreferrer me" class="w-full bg-brandOrange hover:bg-orange-600 text-white font-bold text-xs py-3.5 px-4 rounded-xl text-center flex items-center justify-center gap-2 transition-all shadow-md">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
              View GMB Listing on Google Maps
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
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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

<?php 
$base_url = './';
include 'footer.php'; 
?>
