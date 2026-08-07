<?php
// Determine base path depending on whether included from root or subfolder
$base_url = isset($base_url) ? $base_url : '';
?>
  <!-- FOOTER -->
  <footer class="bg-brandNavy text-slate-300 py-12 border-t border-slate-800 text-xs">
    <div class="max-w-7xl mx-auto px-4">

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 mb-10">

        <!-- Col 1: Brand & Social -->
        <div class="lg:col-span-1 space-y-3">
          <img src="<?php echo $base_url; ?>img/Appliance_Repair_Knights_Logo-white.avif" alt="Appliance Repair Knights Logo" class="h-14 w-auto object-contain">
          <p class="text-slate-400 leading-relaxed">
            Fast, reliable and professional appliance repair services across the GTA &amp; Southern Ontario.
          </p>
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
          <ul class="space-y-2 text-slate-400">
            <li><a href="<?php echo $base_url; ?>index.php#service-areas" class="hover:text-white transition-colors">Toronto &amp; GTA</a></li>
            <li><a href="<?php echo $base_url; ?>locations/pickering-appliance-repair.php" class="hover:text-white transition-colors">Pickering Appliance Repair</a></li>
            <li><a href="<?php echo $base_url; ?>index.php#service-areas" class="hover:text-white transition-colors">Mississauga &amp; Brampton</a></li>
            <li><a href="<?php echo $base_url; ?>index.php#service-areas" class="hover:text-white transition-colors">Hamilton &amp; Burlington</a></li>
            <li><a href="<?php echo $base_url; ?>index.php#service-areas" class="hover:text-white transition-colors">Kitchener-Waterloo</a></li>
            <li><a href="<?php echo $base_url; ?>index.php#service-areas" class="hover:text-white transition-colors">Oshawa &amp; Durham Region</a></li>
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
              <a href="tel:9057178905" class="text-white font-bold hover:text-brandOrange">905-717-8905</a>
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

    function toggleFAQ(faqId) {
      const content = document.getElementById(faqId);
      const icon = document.getElementById('icon-' + faqId);

      if (content && icon) {
        if (content.classList.contains('hidden')) {
          content.classList.remove('hidden');
          icon.innerText = '−';
        } else {
          content.classList.add('hidden');
          icon.innerText = '+';
        }
      }
    }
  </script>
</body>
</html>
