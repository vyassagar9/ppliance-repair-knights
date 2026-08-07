<?php
/**
 * Reusable Form Component: Contact Us / General Inquiry
 * Usage: <?php include __DIR__ . '/forms/contact-form.php'; ?>
 */
?>
<div id="contact-form-container" class="bg-white rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-200 relative">
  <div class="bg-brandOrange text-white text-xs font-black uppercase tracking-widest py-1.5 px-3 rounded-full inline-block mb-3">
    ✉️ CONTACT DISPATCH CENTER
  </div>

  <h2 class="text-2xl font-heading font-black text-brandDarkBlue mb-1">
    Send Us a Message
  </h2>
  <p class="text-slate-500 text-xs mb-5">
    Have a question or require service details? Send a message and our support team will respond promptly.
  </p>

  <form id="site-contact-form" class="gtm-web-contact-submit space-y-4" onsubmit="event.preventDefault(); handleSiteContactFormSubmit(this);">
    <input type="hidden" name="form_type" value="contact">

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <div>
        <label for="contact-name" class="block text-xs font-bold text-slate-700 uppercase mb-1">Full Name *</label>
        <input type="text" id="contact-name" name="name" required placeholder="John Doe" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all">
      </div>
      <div>
        <label for="contact-phone" class="block text-xs font-bold text-slate-700 uppercase mb-1">Phone Number *</label>
        <input type="tel" id="contact-phone" name="phone" required placeholder="(905) 717-8905" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all">
      </div>
    </div>

    <div>
      <label for="contact-email" class="block text-xs font-bold text-slate-700 uppercase mb-1">Email Address *</label>
      <input type="email" id="contact-email" name="email" required placeholder="john@example.com" class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all">
    </div>

    <div>
      <label for="contact-message" class="block text-xs font-bold text-slate-700 uppercase mb-1">Your Message / Inquiry *</label>
      <textarea id="contact-message" name="message" rows="4" required placeholder="Tell us how we can help you..." class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandBlue outline-none transition-all resize-y"></textarea>
    </div>

    <button type="submit" class="contact-btn-submit gtm-web-btn-contact w-full bg-brandDarkBlue hover:bg-brandNavy text-white font-extrabold py-3.5 px-6 rounded-xl text-sm sm:text-base shadow-lg transition-all flex items-center justify-center gap-2 uppercase tracking-wider cursor-pointer">
      <svg class="w-5 h-5 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
      <span>SEND MESSAGE</span>
    </button>
  </form>

  <!-- Success View -->
  <div id="contact-success-msg" class="hidden bg-emerald-50 border-2 border-emerald-500 rounded-2xl p-6 text-center space-y-3 mt-4">
    <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center mx-auto">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
    </div>
    <h3 class="text-xl font-heading font-bold text-emerald-900">Message Sent!</h3>
    <p class="text-xs text-emerald-800">
      Thank you! Your message has been sent to our team. We will get back to you shortly.
    </p>
  </div>
</div>

<script>
window.handleSiteContactFormSubmit = async function(formEl) {
  const nameEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="name"]') || formEl.querySelector('#contact-name')) : document.querySelector('#contact-name');
  const phoneEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="phone"]') || formEl.querySelector('#contact-phone')) : document.querySelector('#contact-phone');
  const emailEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="email"]') || formEl.querySelector('#contact-email')) : document.querySelector('#contact-email');
  const messageEl = (formEl && formEl.querySelector) ? (formEl.querySelector('[name="message"]') || formEl.querySelector('#contact-message')) : document.querySelector('#contact-message');

  const name = nameEl ? nameEl.value.trim() : '';
  const phone = phoneEl ? phoneEl.value.trim() : '';
  const email = emailEl ? emailEl.value.trim() : '';
  const message = messageEl ? messageEl.value.trim() : '';
  const submitBtn = (formEl && formEl.querySelector) ? formEl.querySelector('.contact-btn-submit') : document.querySelector('.contact-btn-submit');

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
      <span>SENDING...</span>
    `;
  }

  const payload = {
    name: name,
    phone: phone,
    email: email,
    message: message,
    appliance: 'General Contact Inquiry',
    city: 'GTA',
    form_type: 'contact',
    page: window.location.pathname.split('/').pop() || 'contact.php'
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
    console.log('Contact Form Result:', resData);

    if (response.ok && (resData.status === 'success' || resData.status === 'partial_success')) {
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'web_contact_success',
        'value': 1
      });

      const container = formEl.closest('#contact-form-container') || formEl.parentElement;
      formEl.classList.add('hidden');
      const successView = container.querySelector('#contact-success-msg');
      if (successView) successView.classList.remove('hidden');
    } else {
      alert('Error sending message: ' + (resData.message || 'Server error. Please call 905-717-8905.'));
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<span>SEND MESSAGE</span>';
      }
    }
  } catch (err) {
    console.error('Contact submission error:', err);
    alert('Network error: Could not reach server. Please check your internet or call 905-717-8905.');
    if (submitBtn) {
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<span>SEND MESSAGE</span>';
    }
  }
};
</script>
