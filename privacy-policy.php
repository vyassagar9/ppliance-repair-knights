<?php
$base_url = './';
$page_title = 'Privacy Policy & Service Warranty | Appliance Repair Knights';
$page_description = 'Read our privacy policy and service warranty terms. 90-day parts and labor warranty on all appliance repair jobs across GTA.';
$page_keywords = 'appliance repair knights warranty, privacy policy';
$canonical_url = 'https://www.appliancerepairknights.ca/privacy-policy.php';
include 'head.php';
?>

<body class="bg-white text-slate-800 font-sans antialiased">

<?php 
$current_page = 'privacy';
include 'header.php'; 
?>

  <!-- BREADCRUMBS -->
  <nav class="bg-slate-50 border-b border-brandBorder py-3">
    <div class="max-w-7xl mx-auto px-4 text-xs font-medium text-slate-500 flex items-center gap-2">
      <a href="index.php" class="hover:text-brandOrange">Home</a>
      <span>/</span>
      <span class="text-slate-800 font-semibold">Privacy Policy</span>
    </div>
  </nav>

  <main class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 space-y-8">
      
      <div class="border-b border-brandBorder pb-6">
        <h1 class="text-3xl sm:text-4xl font-heading font-black text-brandDarkBlue tracking-tight">Privacy Policy & Warranty Terms</h1>
        <p class="text-xs text-slate-400 mt-2">Last Updated: August 2026</p>
      </div>

      <div class="prose prose-slate max-w-none text-sm leading-relaxed space-y-6 text-slate-600">
        <p>
          At <strong>Appliance Repair Knights</strong>, accessible from appliancerepairknights.ca, your privacy is one of our main priorities. This Privacy Policy document outlines the types of information collected and recorded by Appliance Repair Knights and how we use it.
        </p>

        <h2 class="text-lg font-heading font-bold text-brandDarkBlue">1. Information We Collect</h2>
        <p>
          When you request an appliance repair service or fill out our online booking and contact forms, we may ask you to provide personal information, including:
        </p>
        <ul class="list-disc pl-5 space-y-1 text-slate-600">
          <li>Full name and contact details (phone number, email address).</li>
          <li>Service location / address within Toronto, GTA, and surrounding service areas.</li>
          <li>Appliance type, brand, and details regarding the fault or repair needed.</li>
        </ul>

        <h2 class="text-lg font-heading font-bold text-brandDarkBlue">2. How We Use Your Information</h2>
        <p>
          We use the information we collect in various ways, including to:
        </p>
        <ul class="list-disc pl-5 space-y-1 text-slate-600">
          <li>Dispatch licensed technicians to your location for diagnostic and repair services.</li>
          <li>Contact you regarding scheduling, booking confirmations, or technician arrival windows.</li>
          <li>Process service invoices, receipts, and warranty details.</li>
          <li>Improve our website performance and customer dispatch efficiency.</li>
        </ul>

        <h2 class="text-lg font-heading font-bold text-brandDarkBlue">3. Data Security & Service Warranty</h2>
        <p>
          Appliance Repair Knights implements industry-standard technical and organizational security measures to protect your personal data against unauthorized access. We do not sell or rent your personal contact information to third-party marketing companies. All completed appliance repair jobs include up to 90 days written warranty on parts and labor.
        </p>

        <h2 class="text-lg font-heading font-bold text-brandDarkBlue">4. Contact Us</h2>
        <p>
          If you have additional questions or require more information about our Privacy Policy or Warranty coverage, do not hesitate to contact us by phone at <a href="tel:9057178905" class="text-brandOrange font-bold hover:underline">905-717-8905</a> or via email at info@appliancerepairknights.com.
        </p>
      </div>

    </div>
  </main>

<?php include 'footer.php'; ?>
