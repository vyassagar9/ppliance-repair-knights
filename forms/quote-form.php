<?php
/**
 * Reusable Form Component: Get a Free Repair Quote
 * Usage: <?php $defaultAppliance = 'Refrigerator'; include __DIR__ . '/forms/quote-form.php'; ?>
 */
$currentAppliance = isset($defaultAppliance) ? $defaultAppliance : '';
?>
<div id="quote-form-container" class="bg-white rounded-3xl p-6 sm:p-7 shadow-2xl border-2 border-brandBlue/20 relative">
  <div class="bg-brandBlue text-white text-xs font-black uppercase tracking-widest py-1.5 px-3 rounded-full inline-block mb-3">
    ⚡ SAME-DAY ONLINE DISPATCH
  </div>

  <h2 class="text-2xl font-heading font-black text-brandDarkBlue mb-1">
    Get a Free Repair Quote
  </h2>
  <p class="text-slate-500 text-xs mb-4">
    Fill out the form below. A local technician will contact you within <strong>15 minutes</strong>.
  </p>

  <form id="site-quote-form" class="gtm-web-form-submit space-y-3" onsubmit="event.preventDefault(); handleSiteQuoteFormSubmit(this);">
    <input type="hidden" name="form_type" value="quote">
    
    <div>
      <label for="quote-name" class="block text-xs font-bold text-slate-700 uppercase mb-1">Full Name *</label>
      <input type="text" id="quote-name" name="name" required placeholder="John Doe" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all">
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
      <div>
        <label for="quote-phone" class="block text-xs font-bold text-slate-700 uppercase mb-1">Phone Number *</label>
        <input type="tel" id="quote-phone" name="phone" required placeholder="(905) 717-8905" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all">
      </div>
      <div>
        <label for="quote-email" class="block text-xs font-bold text-slate-700 uppercase mb-1">Email Address <span class="text-slate-400 font-normal lowercase">(optional)</span></label>
        <input type="email" id="quote-email" name="email" placeholder="john@example.com" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all">
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
      <div>
        <label for="quote-city" class="block text-xs font-bold text-slate-700 uppercase mb-1">Your City / Area *</label>
        <select id="quote-city" name="city" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all bg-white">
          <option value="Toronto" selected>Toronto & GTA</option>
          <option value="Mississauga">Mississauga</option>
          <option value="Brampton">Brampton</option>
          <option value="Hamilton">Hamilton</option>
          <option value="Kitchener">Kitchener-Waterloo</option>
          <option value="Oshawa">Oshawa / Durham</option>
          <option value="Burlington">Burlington & Oakville</option>
        </select>
      </div>
      <div>
        <label for="quote-appliance" class="block text-xs font-bold text-slate-700 uppercase mb-1">Appliance *</label>
        <select id="quote-appliance" name="appliance" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all bg-white">
          <option value="Refrigerator" <?php echo (empty($currentAppliance) || $currentAppliance === 'Refrigerator') ? 'selected' : ''; ?>>Refrigerator / Freezer</option>
          <option value="Washing Machine" <?php echo ($currentAppliance === 'Washing Machine') ? 'selected' : ''; ?>>Washing Machine</option>
          <option value="Dryer" <?php echo ($currentAppliance === 'Dryer') ? 'selected' : ''; ?>>Clothes Dryer</option>
          <option value="Dishwasher" <?php echo ($currentAppliance === 'Dishwasher') ? 'selected' : ''; ?>>Dishwasher</option>
          <option value="Oven & Stove" <?php echo ($currentAppliance === 'Oven & Stove') ? 'selected' : ''; ?>>Oven / Stove / Range</option>
          <option value="Microwave" <?php echo ($currentAppliance === 'Microwave') ? 'selected' : ''; ?>>Microwave</option>
        </select>
      </div>
    </div>

    <button type="submit" class="quote-btn-submit gtm-web-btn-submit w-full bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold py-3.5 px-6 rounded-xl text-sm sm:text-base shadow-lg transition-all flex items-center justify-center gap-2 uppercase tracking-wider cursor-pointer mt-2">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
      <span>GET FREE QUOTE</span>
    </button>

    <p class="text-[11px] text-center text-slate-400 mt-2">
      🔒 100% Privacy Protected • $0 Service Call With Any Paid Repair
    </p>
  </form>

  <!-- Success View -->
  <div id="quote-success-msg" class="hidden bg-emerald-50 border-2 border-emerald-500 rounded-2xl p-6 text-center space-y-3 mt-4">
    <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center mx-auto">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
    </div>
    <h3 class="text-xl font-heading font-bold text-emerald-900">Quote Request Received!</h3>
    <p class="text-xs text-emerald-800">
      Thank you! A local technician will contact <strong class="display-user-phone">your phone</strong> within <strong>15 minutes</strong>.
    </p>
    <a href="tel:9057178905" class="inline-block bg-brandDarkBlue text-white text-xs font-bold py-2 px-4 rounded-lg mt-2">Call Dispatch Directly: 905-717-8905</a>
  </div>
</div>

<script>
window.handleSiteQuoteFormSubmit = async function(formEl) {
  const nameEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="name"]') || formEl.querySelector('#quote-name')) : document.querySelector('#quote-name');
  const phoneEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="phone"]') || formEl.querySelector('#quote-phone')) : document.querySelector('#quote-phone');
  const emailEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="email"]') || formEl.querySelector('#quote-email')) : document.querySelector('#quote-email');
  const cityEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="city"]') || formEl.querySelector('#quote-city')) : document.querySelector('#quote-city');
  const applianceEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="appliance"]') || formEl.querySelector('#quote-appliance')) : document.querySelector('#quote-appliance');

  const name = nameEl ? nameEl.value.trim() : '';
  const phone = phoneEl ? phoneEl.value.trim() : '';
  const email = emailEl ? emailEl.value.trim() : '';
  const city = (cityEl && cityEl.value) ? cityEl.value : 'Toronto';
  const appliance = (applianceEl && applianceEl.value) ? applianceEl.value : 'Refrigerator';
  const submitBtn = (formEl && formEl.querySelector) ? formEl.querySelector('.quote-btn-submit') : document.querySelector('.quote-btn-submit');

  if (!name || !phone) {
    alert('Please enter your Name and Phone Number.');
    return;
  }

  if (submitBtn) {
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
      <svg class="animate-spin h-5 w-5 text-white inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
      <span>SENDING REQUEST...</span>
    `;
  }

  const payload = {
    name: name,
    phone: phone,
    email: email,
    city: city,
    appliance: appliance,
    form_type: 'quote',
    page: window.location.pathname.split('/').pop() || 'site-quote'
  };

  try {
    const baseUrl = '<?php echo isset($base_url) ? $base_url : ""; ?>';
    const isSubfolder = window.location.pathname.includes('/services/') || window.location.pathname.includes('/locations/');
    const scriptPath = isSubfolder ? (baseUrl ? baseUrl + 'send-lead.php' : '../send-lead.php') : (baseUrl ? baseUrl + 'send-lead.php' : 'send-lead.php');
    
    const response = await fetch(scriptPath, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    });

    const resData = await response.json();
    console.log('Lead Submission Result:', resData);

    if (response.ok && (resData.status === 'success' || resData.status === 'partial_success')) {
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'web_form_success',
        'appliance': appliance,
        'city': city,
        'value': 1
      });

      const container = formEl.closest('#quote-form-container') || formEl.parentElement;
      const phoneDisp = container.querySelector('.display-user-phone');
      if (phoneDisp) phoneDisp.innerText = phone;
      formEl.classList.add('hidden');
      const successView = container.querySelector('#quote-success-msg');
      if (successView) successView.classList.remove('hidden');
    } else {
      alert('Error sending request: ' + (resData.message || 'Server error. Please call 905-717-8905.'));
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<span>GET FREE REPAIR QUOTE</span>';
      }
    }
  } catch (err) {
    console.error('Submission error:', err);
    alert('Network error: Could not reach server. Please check your internet or call 905-717-8905.');
    if (submitBtn) {
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<span>GET FREE REPAIR QUOTE</span>';
    }
  }
};
</script>
