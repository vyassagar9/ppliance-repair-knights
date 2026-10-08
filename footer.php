<?php
// Determine base path depending on whether included from root or subfolder
$base_url = isset($base_url) ? $base_url : '';
?>
  <!-- FOOTER -->
  <footer class="mt-auto bg-brandNavy text-slate-300 py-12 border-t border-slate-800 text-xs">
    <div class="max-w-7xl mx-auto px-4">

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 mb-10">

        <!-- Col 1: Brand & Social -->
        <div class="lg:col-span-1 space-y-4">
          <img src="<?php echo $base_url; ?>img/Appliance_Repair_Knights_Logo-white.avif" alt="Appliance Repair Knights Logo" width="723" height="345" loading="lazy" decoding="async" class="h-14 w-auto object-contain">
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

            <!-- TikTok -->
            <a href="https://www.tiktok.com/@appliance.service1" 
               target="_blank" 
               rel="noopener noreferrer me" 
               aria-label="TikTok" 
               title="TikTok Profile" 
               class="w-9 h-9 rounded-lg bg-slate-800/80 hover:bg-black text-slate-300 hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm group">
              <svg class="w-4 h-4 fill-current group-hover:scale-110 transition-transform" viewBox="0 0 24 24">
                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 003 15.67a6.34 6.34 0 006.34 6.33 6.34 6.34 0 006.34-6.33V9.5a8.19 8.19 0 004.91 1.63v-3.5a4.85 4.85 0 01-1-.94z"/>
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
            <li><a href="<?php echo $base_url ? $base_url : './'; ?>" class="hover:text-white transition-colors">Home</a></li>
            <li><a href="<?php echo $base_url; ?>about" class="hover:text-white transition-colors">About Us</a></li>
            <li><a href="<?php echo $base_url ? $base_url : './'; ?>#service-areas" class="hover:text-white transition-colors">Service Areas</a></li>
            <li><a href="<?php echo $base_url; ?>schedule" class="hover:text-white transition-colors">Book Online</a></li>
            <li><a href="<?php echo $base_url; ?>blog" class="hover:text-white transition-colors">Blog &amp; Guides</a></li>
            <li><a href="<?php echo $base_url; ?>contact" class="hover:text-white transition-colors">Contact</a></li>
          </ul>
        </div>

        <!-- Col 3: Services -->
        <div>
          <h4 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-3">SERVICES</h4>
          <ul class="space-y-2 text-slate-400">
            <li><a href="<?php echo $base_url; ?>services" class="text-brandOrange font-bold hover:text-white transition-colors flex items-center gap-1"><span>All Repair Services</span> &rarr;</a></li>
            <li><a href="<?php echo $base_url; ?>services/fridge-repair" class="hover:text-white transition-colors">Refrigerator Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/washer-repair" class="hover:text-white transition-colors">Washer Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/coffee-machine-repair" class="hover:text-white transition-colors">Coffee Machine Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/dishwasher-repair" class="hover:text-white transition-colors">Dishwasher Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/dryer-repair" class="hover:text-white transition-colors">Dryer Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/stove-repair" class="hover:text-white transition-colors">Oven &amp; Stove Repair</a></li>
            <li><a href="<?php echo $base_url; ?>services/microwave-repair" class="hover:text-white transition-colors">Microwave Repair</a></li>
          </ul>
        </div>

        <!-- Col 4: Service Areas -->
        <div>
          <h4 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-3">SERVICE AREAS</h4>
          <ul class="space-y-1.5 text-slate-400 text-xs">
            <li><a href="<?php echo $base_url; ?>locations" class="text-brandOrange font-bold hover:text-white transition-colors flex items-center gap-1"><span>All 20+ Service Areas</span> &rarr;</a></li>
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
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              <div class="space-y-0.5">
                <a href="mailto:info@appliancerepairknights.com" class="hover:text-white transition-colors block">info@appliancerepairknights.com</a>
                <a href="mailto:appliancerepairknights@gmail.com" class="hover:text-white transition-colors block">appliancerepairknights@gmail.com</a>
              </div>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <div>
                <span>Monday – Sunday: 8:00am - 8:00pm</span>
                <span class="block text-xs text-brandOrange font-medium">24/7 Emergency Support</span>
              </div>
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
          <a href="<?php echo $base_url; ?>privacy-policy" class="hover:text-white transition-colors">Privacy Policy</a>
          <span class="text-slate-700">•</span>
          <a href="<?php echo $base_url; ?>terms-and-conditions" class="hover:text-white transition-colors">Terms &amp; Conditions</a>
          <span class="text-slate-700">•</span>
          <a href="<?php echo $base_url; ?>disclaimer" class="hover:text-white transition-colors">Disclaimer</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- FIXED RIGHT-SIDE FLOATING CTA BUTTONS (3 COMPACT MINIMALIST BUTTONS) -->
  <aside id="fixed-side-ctas" aria-label="Quick Contact Actions" class="select-none" style="position: fixed; right: 0; bottom: 75px; z-index: 9999; display: flex; flex-direction: column; gap: 5px; align-items: flex-end;">
    
    <!-- 1. WhatsApp Button (WhatsApp Green) -->
    <a href="https://wa.me/19057178905?text=Hi%2C%20I%20need%20appliance%20repair%20service%20in%20Toronto%2FGTA" 
       target="_blank" 
       rel="noopener noreferrer" 
       aria-label="Chat on WhatsApp" 
       title="Chat on WhatsApp"
       class="transition-transform duration-200 hover:-translate-x-1 active:scale-95"
       style="width: 38px; height: 38px; background-color: #25D366; border-radius: 19px 0 0 19px; padding-left: 2px; display: flex; align-items: center; justify-content: center; box-shadow: -2px 2px 8px rgba(0,0,0,0.18); text-decoration: none;">
      <div style="width: 26px; height: 26px; border-radius: 50%; border: 1.5px solid rgba(255,255,255,0.75); display: flex; align-items: center; justify-content: center; background: transparent;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="#ffffff" style="display: block; width: 15px; height: 15px;">
          <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2zm0 18.12c-1.5 0-2.97-.4-4.26-1.16l-.31-.18-3.13.82.83-3.05-.2-.32a8.04 8.04 0 0 1-1.24-4.32c0-4.47 3.64-8.11 8.11-8.11 2.17 0 4.2 0.85 5.73 2.38a8.06 8.06 0 0 1 2.38 5.73c0 4.47-3.64 8.11-8.11 8.11zm4.45-6.09c-.24-.12-1.44-.71-1.66-.79-.22-.08-.38-.12-.55.12-.16.24-.63.79-.77.95-.14.16-.28.18-.52.06-.24-.12-1.02-.38-1.95-1.21-.72-.64-1.21-1.44-1.35-1.68-.14-.24-.01-.37.11-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.55-1.32-.75-1.81-.2-.48-.4-.41-.55-.42h-.47c-.16 0-.42.06-.64.3-.22.24-.85.83-.85 2.02s.87 2.34.99 2.5c.12.16 1.71 2.61 4.14 3.66.58.25 1.03.4 1.38.51.58.18 1.11.16 1.53.1.47-.07 1.44-.59 1.64-1.16.2-.57.2-1.06.14-1.16-.06-.1-.22-.16-.46-.28z"/>
        </svg>
      </div>
    </a>

    <!-- 2. Booking / Shop Button (Brand Orange #FF6B00) -->
    <a href="<?php echo (isset($base_url) && $base_url ? $base_url : './'); ?>schedule" 
       aria-label="Book Appliance Repair Online" 
       title="Book Online"
       class="transition-transform duration-200 hover:-translate-x-1 active:scale-95"
       style="width: 38px; height: 38px; background-color: #FF6B00; border-radius: 19px 0 0 19px; padding-left: 2px; display: flex; align-items: center; justify-content: center; box-shadow: -2px 2px 8px rgba(0,0,0,0.18); text-decoration: none;">
      <div style="width: 26px; height: 26px; border-radius: 50%; border: 1.5px solid rgba(255,255,255,0.75); display: flex; align-items: center; justify-content: center; background: transparent;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: block; width: 15px; height: 15px;">
          <path d="M3 9l1-5h16l1 5"/>
          <path d="M4 9a3 3 0 0 0 6 0 3 3 0 0 0 6 0 3 3 0 0 0 4 0"/>
          <path d="M4 14v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6"/>
          <path d="M9 21v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4"/>
        </svg>
      </div>
    </a>

    <!-- 3. Phone Call Button (Brand Dark Blue #0A2E52) -->
    <a href="tel:9057178905" 
       aria-label="Call Appliance Repair Knights" 
       title="Call 905-717-8905"
       class="gtm-web-call transition-transform duration-200 hover:-translate-x-1 active:scale-95"
       style="width: 38px; height: 38px; background-color: #0A2E52; border-radius: 19px 0 0 19px; padding-left: 2px; display: flex; align-items: center; justify-content: center; box-shadow: -2px 2px 8px rgba(0,0,0,0.18); text-decoration: none;">
      <div style="width: 26px; height: 26px; border-radius: 50%; border: 1.5px solid rgba(255,255,255,0.75); display: flex; align-items: center; justify-content: center; background: transparent;">
        <svg width="14" height="14" viewBox="0 0 20 20" fill="#ffffff" style="display: block; width: 14px; height: 14px;">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
      </div>
    </a>

  </aside>

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
