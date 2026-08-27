<?php
require_once __DIR__ . '/config.php';
$base_url = './';
$page_title = 'Schedule Appliance Repair Online | Appliance Repair Knights';
$page_description = 'Book your appliance repair appointment online in under 60 seconds. Choose your date & time slot. 24/7 fast service across GTA. Book now!';
$page_keywords = 'book appliance repair online, schedule repair service';
$canonical_url = 'https://www.appliancerepairknights.com/schedule';

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
        "@id": "https://www.appliancerepairknights.com/schedule#breadcrumb",
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
            "name": "Book Online",
            "item": "https://www.appliancerepairknights.com/schedule"
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
$current_page = 'schedule';
include 'header.php'; 
?>

  <!-- BREADCRUMBS -->
  <nav class="bg-white border-b border-bordercolor">
    <div class="max-w-7xl mx-auto px-4 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="./" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Schedule Repair</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- HERO SECTION -->
    <section class="bg-primary text-white py-12 md:py-16 relative overflow-hidden">
      <div class="max-w-4xl mx-auto px-4 text-center space-y-4 relative z-10">
        <span class="text-accent text-sm font-bold uppercase tracking-widest block">Book Online</span>
        <h1 class="text-3xl md:text-5xl font-heading font-bold text-white tracking-tight">
          Schedule Your Appliance Inspection & Repair
        </h1>
        <p class="text-slate-300 text-sm md:text-base max-w-xl mx-auto leading-relaxed">
          Book your same-day or next-day service slot online in minutes. We will call you back to confirm a firm time window and a flat price.
        </p>
      </div>
    </section>

    <!-- FORM & CONTENT -->
    <section class="py-16 max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12">
      
      <!-- Detailed Booking Form Left -->
      <div class="lg:col-span-8 bg-white rounded-xl shadow-md border border-bordercolor p-6 md:p-8">
        <h2 class="text-2xl font-heading font-bold text-primary mb-6">Service Request Form</h2>
        <form class="space-y-6" onsubmit="event.preventDefault(); handleScheduleFormSubmit(this);">
          
          <!-- Contact Info Section -->
          <div class="space-y-4">
            <h3 class="font-heading font-bold text-sm text-primary uppercase tracking-wider border-b border-bordercolor pb-2">1. Contact Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label for="fname" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">First name *</label>
                <input type="text" id="fname" required class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300">
              </div>
              <div>
                <label for="lname" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Last name *</label>
                <input type="text" id="lname" required class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300">
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label for="phone" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Phone number *</label>
                <input type="tel" id="phone" required placeholder="e.g. 905-123-4567" class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300">
              </div>
              <div>
                <label for="email" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Email address *</label>
                <input type="email" id="email" required placeholder="e.g. john@example.com" class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300">
              </div>
            </div>
          </div>

          <!-- Service Address Section -->
          <div class="space-y-4">
            <h3 class="font-heading font-bold text-sm text-primary uppercase tracking-wider border-b border-bordercolor pb-2">2. Service Location</h3>
            <div>
              <label for="street" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Street address *</label>
              <input type="text" id="street" required placeholder="e.g. 123 King Street West" class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div>
                <label for="city" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">City *</label>
                <select id="city" required class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm text-secondary bg-white transition-all-300">
                  <option value="" disabled selected>Select city</option>
                  <option value="Toronto">Toronto</option>
                  <option value="Mississauga">Mississauga</option>
                  <option value="Brampton">Brampton</option>
                  <option value="Hamilton">Hamilton</option>
                  <option value="Oshawa">Oshawa</option>
                  <option value="Kitchener">Kitchener</option>
                  <option value="Waterloo">Waterloo</option>
                </select>
              </div>
              <div>
                <label for="province" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Province *</label>
                <input type="text" id="province" value="Ontario" readonly class="w-full px-4 py-2.5 border border-bordercolor bg-slate-50 rounded-lg text-sm text-slate-500 font-medium">
              </div>
              <div>
                <label for="postal" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Postal code *</label>
                <input type="text" id="postal" required placeholder="e.g. M5V 1A1" class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300">
              </div>
            </div>
          </div>

          <!-- Appliance & Issue Section -->
          <div class="space-y-4">
            <h3 class="font-heading font-bold text-sm text-primary uppercase tracking-wider border-b border-bordercolor pb-2">3. Appliance Details</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div>
                <label for="appliance" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Appliance type *</label>
                <select id="appliance" required class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm text-secondary bg-white transition-all-300">
                  <option value="" disabled selected>Select appliance</option>
                  <option value="Refrigerator">Fridge Repair & Installation</option>
                  <option value="OvenStove">Stove & Range Repair</option>
                  <option value="Microwave">Microwave Repair & Installation</option>
                  <option value="Washer">Washing Machine Diagnostic & Repair</option>
                  <option value="Dryer">Dryer Repair & Duct Cleaning</option>
                  <option value="Dishwasher">Dishwasher Inspection & Repair</option>
                </select>
              </div>
              <div>
                <label for="brand" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Brand *</label>
                <input type="text" id="brand" required placeholder="e.g. Whirlpool, Samsung, LG" class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300">
              </div>
              <div>
                <label for="model" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Model number (optional)</label>
                <input type="text" id="model" placeholder="e.g. RF28HDEDBSR" class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300">
              </div>
            </div>
            <div>
              <label for="issue" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Describe the problem *</label>
              <textarea id="issue" rows="4" required placeholder="Describe what the appliance is doing. (e.g. Fridge making clicking noise and not cooling, water pooling under washer)" class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm transition-all-300"></textarea>
            </div>
          </div>

          <!-- Schedule Preferences -->
          <div class="space-y-4">
            <h3 class="font-heading font-bold text-sm text-primary uppercase tracking-wider border-b border-bordercolor pb-2">4. Preferred Booking Slot</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label for="date" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Preferred date *</label>
                <input type="date" id="date" required class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm text-secondary transition-all-300">
              </div>
              <div>
                <label for="time" class="block text-xs font-bold text-primary uppercase tracking-wide mb-1">Time window preference *</label>
                <select id="time" required class="w-full px-4 py-2.5 border border-bordercolor rounded-lg focus:outline-none focus:border-accent text-sm text-secondary bg-white transition-all-300">
                  <option value="" disabled selected>Select time slot</option>
                  <option value="Morning">Morning (8:00 AM - 12:00 PM)</option>
                  <option value="Afternoon">Afternoon (12:00 PM - 4:00 PM)</option>
                  <option value="Evening">Evening (4:00 PM - 8:00 PM)</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Submit -->
          <button type="submit" class="gtm-web-btn-submit w-full bg-accent hover:bg-accent-hover text-white font-bold py-4 rounded-lg transition-all-300 shadow-md cursor-pointer text-center text-base">
            Request My Repair
          </button>
        </form>
      </div>

      <!-- Sidebar Right -->
      <aside class="lg:col-span-4 space-y-8">
        
        <!-- Trust Box -->
        <div class="bg-slate-50 border border-bordercolor rounded-xl p-6 space-y-6 shadow-sm">
          <h3 class="font-heading font-bold text-lg text-primary border-b border-bordercolor pb-3">Why Book Online?</h3>
          <ul class="space-y-4">
            <li class="flex items-start gap-3 text-xs text-slate-600">
              <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              <div>
                <span class="font-bold text-primary block">No Call-Out Fee With Repair</span>
                If we complete the repair, the diagnostic and call-out fee is completely waived.
              </div>
            </li>
            <li class="flex items-start gap-3 text-xs text-slate-600">
              <svg class="w-5 h-5 text-accent mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              <div>
                <span class="font-bold text-primary block">Quick Text Updates</span>
                We text you a confirmation, and an update when the technician is en route.
              </div>
            </li>
          </ul>
        </div>

        <!-- Phone CTA Box -->
        <div class="bg-primary text-white border border-primary rounded-xl p-6 text-center space-y-4 shadow-md">
          <span class="text-xs uppercase tracking-wider text-slate-400 font-bold block">Prefer to Call?</span>
          <p class="text-xs text-slate-300 leading-relaxed">
            Our dispatch line is open around the clock for immediate assistance.
          </p>
          <a href="tel:9057178905" class="gtm-web-call text-2xl font-heading font-extrabold text-white hover:text-accent transition-colors block">
            905-717-8905
          </a>
        </div>
      </aside>

    </section>

  </main>

<?php 
$base_url = './';
include 'footer.php'; 
?>

  <script>
    // Automatically set default date to tomorrow
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    const dateInput = document.getElementById('date');
    if (dateInput) {
      dateInput.value = tomorrow.toISOString().split('T')[0];
      dateInput.min = new Date().toISOString().split('T')[0];
    }

    async function handleScheduleFormSubmit(formEl) {
      const fname = formEl.querySelector('#fname') ? formEl.querySelector('#fname').value.trim() : '';
      const lname = formEl.querySelector('#lname') ? formEl.querySelector('#lname').value.trim() : '';
      const phone = formEl.querySelector('#phone') ? formEl.querySelector('#phone').value.trim() : '';
      const email = formEl.querySelector('#email') ? formEl.querySelector('#email').value.trim() : '';
      const street = formEl.querySelector('#street') ? formEl.querySelector('#street').value.trim() : '';
      const city = formEl.querySelector('#city') ? formEl.querySelector('#city').value : 'GTA';
      const appliance = formEl.querySelector('#appliance') ? formEl.querySelector('#appliance').value : 'Appliance';
      const brand = formEl.querySelector('#brand') ? formEl.querySelector('#brand').value.trim() : '';
      const issue = formEl.querySelector('#issue') ? formEl.querySelector('#issue').value.trim() : '';
      const date = formEl.querySelector('#date') ? formEl.querySelector('#date').value : '';
      const time = formEl.querySelector('#time') ? formEl.querySelector('#time').value : '';

      if (!fname || !phone) {
        alert('Please fill in your Name and Phone Number.');
        return;
      }

      const submitBtn = formEl.querySelector('button[type="submit"]');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerText = 'BOOKING APPOINTMENT...';
      }

      const payload = {
        name: (fname + ' ' + lname).trim(),
        phone: phone,
        email: email,
        city: city,
        appliance: appliance + (brand ? ' (' + brand + ')' : ''),
        message: `Address: ${street}, ${city}. Preferred: ${date} ${time}. Issue: ${issue}`,
        form_type: 'schedule',
        page: 'schedule.php'
      };

      try {
        const response = await fetch('send-lead.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        });

        const resData = await response.json();
        console.log('Schedule Form Result:', resData);

        if (response.ok && (resData.status === 'success' || resData.status === 'partial_success')) {
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            'event': 'web_form_success',
            'appliance': appliance,
            'city': city,
            'value': 1
          });

          formEl.innerHTML = `
            <div class="bg-emerald-50 border-2 border-emerald-500 rounded-2xl p-6 text-center space-y-3">
              <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center mx-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <h3 class="text-xl font-heading font-bold text-emerald-900">Repair Appointment Requested!</h3>
              <p class="text-xs text-emerald-800">Thank you, <strong>${fname}</strong>! A dispatcher will call <strong>${phone}</strong> within 15 minutes to confirm your technician visit on ${date}.</p>
              <a href="tel:9057178905" class="gtm-web-call inline-block bg-brandDarkBlue text-white text-xs font-bold py-2 px-4 rounded-lg mt-2">Call Dispatch: 905-717-8905</a>
            </div>
          `;
        } else {
          alert('Error booking appointment: ' + (resData.message || 'Server error. Please call 905-717-8905.'));
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerText = 'SCHEDULE MY REPAIR VISIT';
          }
        }
      } catch (err) {
        console.error('Schedule booking error:', err);
        alert('Network error: Could not reach server. Please check your internet or call 905-717-8905.');
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerText = 'SCHEDULE MY REPAIR VISIT';
        }
      }
    }
  </script>

  <!-- Floating Mobile Action Bar -->
  <div class="fixed bottom-0 left-0 right-0 z-50 bg-white/95 border-t border-bordercolor backdrop-blur-md px-4 py-3 flex gap-3 shadow-lg md:hidden">
    <a href="tel:9057178905" class="gtm-web-call flex-1 bg-primary text-white text-center font-bold py-3.5 rounded-xl flex items-center justify-center gap-2 hover:bg-secondary transition-colors w-full">
      <svg class="w-4 h-4 text-accent fill-current" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
      Call Dispatch Directly
    </a>
  </div>

</body>
</html>
