<?php
// Determine base path depending on whether included from root or subfolder
$base_url = isset($base_url) ? $base_url : '';
?>
  <!-- FOOTER -->
  <footer class="bg-brandNavy text-slate-300 py-12 border-t border-slate-800 text-xs">
    <div class="max-w-7xl mx-auto px-4">

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 mb-10">

        <!-- Col 1: Brand & Social -->
        <div class="lg:col-span-1 space-y-4">
          <img src="<?php echo $base_url; ?>img/Appliance_Repair_Knights_Logo-white.avif" alt="Appliance Repair Knights Logo" class="h-14 w-auto object-contain">
          <p class="text-slate-400 leading-relaxed">
            Fast, reliable and professional appliance repair services across the GTA &amp; Southern Ontario.
          </p>

          <!-- Social Media & Google Business Links (Pure Icon-Only) -->
          <div class="pt-2 flex items-center gap-2.5">
            <!-- Facebook -->
            <a href="https://www.facebook.com/Appliancerepairknights" 
               target="_blank" 
               rel="noopener noreferrer me" 
               aria-label="Facebook" 
               title="Facebook Page" 
               class="w-9 h-9 rounded-lg bg-slate-800/80 hover:bg-[#1877F2] text-slate-300 hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm group">
              <svg class="w-4 h-4 fill-current group-hover:scale-110 transition-transform" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/appliancerepairknights/" 
               target="_blank" 
               rel="noopener noreferrer me" 
               aria-label="Instagram" 
               title="Instagram Profile" 
               class="w-9 h-9 rounded-lg bg-slate-800/80 hover:bg-gradient-to-tr hover:from-[#f09433] hover:via-[#dc2743] hover:to-[#bc1888] text-slate-300 hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm group">
              <svg class="w-4 h-4 fill-current group-hover:scale-110 transition-transform" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>

            <!-- Google My Business (GMB) -->
            <a href="https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059" 
               target="_blank" 
               rel="noopener noreferrer me" 
               aria-label="Google My Business" 
               title="Google My Business Profile" 
               class="w-9 h-9 rounded-lg bg-slate-800/80 hover:bg-[#4285F4] text-slate-300 hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm group">
              <svg class="w-4 h-4 fill-current group-hover:scale-110 transition-transform" viewBox="0 0 24 24">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Col 2: Quick Links -->
        <div>
          <h4 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-3">QUICK LINKS</h4>
          <ul class="space-y-2 text-slate-400">
            <li><a href="<?php echo $base_url; ?>index.php" class="hover:text-white transition-colors">Home</a></li>
            <li><a href="<?php echo $base_url; ?>about.php" class="hover:text-white transition-colors">About Us</a></li>
            <li><a href="<?php echo $base_url; ?>index.php#service-areas" class="hover:text-white transition-colors">Service Areas</a></li>
            <li><a href="<?php echo $base_url; ?>schedule.php" class="hover:text-white transition-colors">Book Online</a></li>
            <li><a href="<?php echo $base_url; ?>contact.php" class="hover:text-white transition-colors">Contact</a></li>
          </ul>
        </div>

        <!-- Col 3: Services -->
        <div>
          <h4 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-3">SERVICES</h4>
          <ul class="space-y-2 text-slate-400">
            <li><a href="<?php echo $base_url; ?>services/fridge-repair.php" class="hover:text-white transition-colors">Refrigerator Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/washer-repair.php" class="hover:text-white transition-colors">Washer Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/dryer-repair.php" class="hover:text-white transition-colors">Dryer Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/dishwasher-repair.php" class="hover:text-white transition-colors">Dishwasher Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/stove-repair.php" class="hover:text-white transition-colors">Oven &amp; Stove Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/microwave-repair.php" class="hover:text-white transition-colors">Microwave Repair</a></li>
          </ul>
        </div>

        <!-- Col 4: Service Areas -->
        <div>
          <h4 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-3">SERVICE AREAS</h4>
          <ul class="space-y-1.5 text-slate-400 text-xs">
            <li><a href="<?php echo $base_url; ?>locations/toronto-appliance-repair" class="hover:text-white transition-colors">Toronto Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/mississauga-appliance-repair" class="hover:text-white transition-colors">Mississauga Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/brampton-appliance-repair" class="hover:text-white transition-colors">Brampton Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/caledon-appliance-repair" class="hover:text-white transition-colors">Caledon Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/vaughan-appliance-repair" class="hover:text-white transition-colors">Vaughan Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/markham-appliance-repair" class="hover:text-white transition-colors">Markham Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/oakville-appliance-repair" class="hover:text-white transition-colors">Oakville Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/scarborough-appliance-repair" class="hover:text-white transition-colors">Scarborough Repair</a></li>
          </ul>

          <button type="button" id="footer-more-loc-btn" onclick="toggleFooterLocations()" class="text-xs font-bold text-brandOrange hover:text-white transition-colors mt-2 flex items-center gap-1 focus:outline-none">
            <span id="footer-more-loc-text">+ More Locations...</span>
          </button>

          <ul id="footer-more-loc-list" class="hidden space-y-1.5 mt-2 border-t border-slate-800 pt-2 text-slate-400 text-xs">
            <li><a href="<?php echo $base_url; ?>locations/richmond-hill-appliance-repair" class="hover:text-white transition-colors">Richmond Hill Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/burlington-appliance-repair" class="hover:text-white transition-colors">Burlington Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/hamilton-appliance-repair" class="hover:text-white transition-colors">Hamilton Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/kitchener-appliance-repair" class="hover:text-white transition-colors">Kitchener Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/waterloo-appliance-repair" class="hover:text-white transition-colors">Waterloo Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/cambridge-appliance-repair" class="hover:text-white transition-colors">Cambridge Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/guelph-appliance-repair" class="hover:text-white transition-colors">Guelph Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/milton-appliance-repair" class="hover:text-white transition-colors">Milton Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/barrie-appliance-repair" class="hover:text-white transition-colors">Barrie Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/ajax-appliance-repair" class="hover:text-white transition-colors">Ajax Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/pickering-appliance-repair" class="hover:text-white transition-colors">Pickering Repair</a></li>
            <li><a href="<?php echo $base_url; ?>locations/oshawa-appliance-repair" class="hover:text-white transition-colors">Oshawa Repair</a></li>
          </ul>
        </div>

        <!-- Col 5: Contact Info -->
        <div>
          <h4 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-3">CONTACT US</h4>
          <ul class="space-y-2.5 text-slate-400">
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
              </svg>
              <a href="tel:9057178905" class="gtm-web-call text-white font-bold hover:text-brandOrange">905-717-8905</a>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brandOrange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              <span>info@appliancerepairknights.com</span>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brandOrange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span>Open 7 Days a Week <br>8:00am - 9:00pm</span>
            </li>
          </ul>

          <div class="mt-4 pt-3 border-t border-slate-800">
            <div class="flex items-center gap-1.5">
              <svg class="w-4 h-4 text-amber-400 fill-current" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <span class="text-white font-bold">Rated 5.0 / 5 Stars</span>
            </div>
          </div>
        </div>

      </div>

      <div class="pt-6 border-t border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-2 text-xs text-slate-400">
        <p>© <?php echo date('Y'); ?> Appliance Repair Knights. All Rights Reserved.</p>
        <div class="flex gap-4">
          <a href="<?php echo $base_url; ?>privacy-policy.php" class="hover:text-white transition-colors">Privacy Policy</a>
          <span class="text-slate-700">•</span>
          <a href="<?php echo $base_url; ?>terms-and-conditions.php" class="hover:text-white transition-colors">Terms &amp; Conditions</a>
          <span class="text-slate-700">•</span>
          <a href="<?php echo $base_url; ?>disclaimer.php" class="hover:text-white transition-colors">Disclaimer</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Interactivity Scripts -->
  <script>
    // Mobile Menu Toggle Script
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileBtn && mobileMenu) {
      mobileBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    }

    // Interactive Enquiry Form Handler (Submits to send-lead.php)
    async function submitEnquiry() {
      const form = document.getElementById('quick-enquiry-form');
      const successBox = document.getElementById('enquiry-success');
      
      const name = document.getElementById('client-name') ? document.getElementById('client-name').value.trim() : '';
      const phone = document.getElementById('client-phone') ? document.getElementById('client-phone').value.trim() : '';
      const email = document.getElementById('client-email') ? document.getElementById('client-email').value.trim() : '';
      const city = document.getElementById('client-city') ? document.getElementById('client-city').value : 'GTA';
      const appliance = document.getElementById('appliance-type') ? document.getElementById('appliance-type').value : 'Appliance';
      const issue = document.getElementById('issue-description') ? document.getElementById('issue-description').value : '';

      if (!name || !phone) {
        alert('Please fill in your Name and Phone Number.');
        return;
      }

      const payload = {
        name: name,
        phone: phone,
        email: email,
        city: city,
        appliance: appliance,
        message: issue,
        page: window.location.pathname.split('/').pop() || 'index.php'
      };

      try {
        const isSubfolder = window.location.pathname.includes('/services/') || window.location.pathname.includes('/locations/');
        const scriptPath = isSubfolder ? '../send-lead.php' : 'send-lead.php';
        await fetch(scriptPath, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        });
      } catch (err) {
        console.log('Submission notice:', err);
      } finally {
        // GTM Conversion Event
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
          'event': 'web_form_success',
          'appliance': appliance,
          'city': city,
          'value': 1
        });

        if (form && successBox) {
          form.classList.add('hidden');
          successBox.classList.remove('hidden');
        }
      }
    }

    function resetEnquiry() {
      const form = document.getElementById('quick-enquiry-form');
      const successBox = document.getElementById('enquiry-success');
      if (form && successBox) {
        form.reset();
        form.classList.remove('hidden');
        successBox.classList.add('hidden');
      }
    }

    function toggleFAQ(param) {
      if (typeof param === 'string') {
        const content = document.getElementById(param);
        const icon = document.getElementById('icon-' + param);
        if (content) {
          content.classList.toggle('hidden');
          if (icon) {
            icon.innerText = content.classList.contains('hidden') ? '+' : '−';
          }
        }
      } else if (param && (param.nodeType || param instanceof HTMLElement)) {
        const parent = param.parentElement;
        const content = param.nextElementSibling || (parent ? parent.querySelector('div:not([class*="hidden"])') || parent.querySelector('div') : null);
        const svg = param.querySelector('svg');
        const icon = param.querySelector('span:last-child');

        if (content) {
          content.classList.toggle('hidden');
          if (svg) {
            if (content.classList.contains('hidden')) {
              svg.classList.remove('rotate-180');
            } else {
              svg.classList.add('rotate-180');
            }
          }
          if (icon && (icon.innerText === '+' || icon.innerText === '−' || icon.innerText === '-')) {
            icon.innerText = content.classList.contains('hidden') ? '+' : '−';
          }
        }
      }
    }
    window.toggleFAQ = toggleFAQ;
    window.toggleFaq = toggleFAQ;

    function toggleHeaderLocations() {
      const list = document.getElementById('header-more-loc-list');
      const btn = document.getElementById('header-more-loc-btn');
      const icon = document.getElementById('header-more-loc-icon');
      if (list && btn) {
        if (list.classList.contains('hidden')) {
          list.classList.remove('hidden');
          btn.querySelector('span').innerText = '− Less Locations';
          if (icon) icon.classList.add('rotate-180');
        } else {
          list.classList.add('hidden');
          btn.querySelector('span').innerText = '+ More Locations...';
          if (icon) icon.classList.remove('rotate-180');
        }
      }
    }

    function toggleMobileLocations() {
      const list = document.getElementById('mobile-more-loc-list');
      const btn = document.getElementById('mobile-more-loc-btn');
      if (list && btn) {
        if (list.classList.contains('hidden')) {
          list.classList.remove('hidden');
          btn.querySelector('span').innerText = '− Less Locations';
        } else {
          list.classList.add('hidden');
          btn.querySelector('span').innerText = '+ More Locations...';
        }
      }
    }

    function toggleFooterLocations() {
      const list = document.getElementById('footer-more-loc-list');
      const text = document.getElementById('footer-more-loc-text');
      if (list && text) {
        if (list.classList.contains('hidden')) {
          list.classList.remove('hidden');
          text.innerText = '− Less Locations';
        } else {
          list.classList.add('hidden');
          text.innerText = '+ More Locations...';
        }
      }
    }
  </script>
</body>
</html>
